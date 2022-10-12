<template>
    <div class="container">
        <div class="container-details">
            <div class="container-img">
                <img src="../../public/img/pia.png" alt="Iamgem do produto">
            </div>
            <div class="container-descriptions">
                <h2>{{ product.product_name }}</h2>
                <h4>{{ product.description }}</h4>
                <p class="value">R${{ product.price }}</p>

                <form method="POST" @submit="buyProduct">
                    <label for="observation">Observações:</label>
                    <textarea name="observation" v-model="observation" id="observation"></textarea><br>

                    <div class="block">
                        <label for="quantity">Quantidade:</label>
                        <input class="form-input" name="quantity" v-model="quantity" type="text" min="1" id="quantity">
                    </div>
                   
                    <input class="btn" type="submit" value="Comprar">
                </form>
            </div>
        </div>
        <hr>
        <div class="observations">
            <p>Descrição</p>
            <p>{{ product.description }}</p>
        </div>
    </div>
</template>

<script setup>
    import api from "@/services/config";
    import { ref } from "@vue/reactivity";
    import { useRouter } from 'vue-router';
    import { useStore } from 'vuex';

    const store = useStore();
    const router = useRouter();
    const props = defineProps({
        product: Object
    });

    const date = new Date().toLocaleString();

    const observation = ref('');
    const quantity = ref(1);

    async function buyProduct(e) {
        e.preventDefault();

        let orderID = localStorage.getItem('order_id');

        if(!orderID) {
            store.dispatch('createOrder', {
                total: 0,
                status: 'in_cart',
                order_created: date
            }).then((response) => {
                orderID = response.data.id;

                insertCart(orderID);
            })
            .catch(e => console.log(e));
        } else {
            insertCart(orderID);
        }

        router.push('/order-item');
    }

    function insertCart(orderID) {
        store.dispatch('insertCart', {
            product_id: props.product.id,
            order_id: parseInt(orderID),
            quantity: parseInt(quantity.value),
            unit_price: parseFloat(props.product.price),
            total_price: parseFloat(props.product.price) * quantity.value,
            observation: observation.value,
        });
    }
</script>

<style scoped>
    .container {
        width: 87%;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 5px;
    }

    .block {
        display: block;
        margin: 10px 0;
    }

    .container-details {
        display: flex;
    }
    
    .container-img {
        flex-grow: 1;
        padding: 10px;
        border-radius: 5px 0px 0px 5px;
        text-align: center;
    }

    .container-img img {
        width: 70%;
    }

    .container-descriptions {
        width: 60%;
        flex-grow: 1;
        padding: 10px;
        border-radius: 0px 5px 5px 0px;
    }

    h4, p {
        padding: 10px 0px 0px 0px;
        font-weight: normal;
    }

    h4, .value{
        margin: 10px 0;
    }

    .value {
        font-weight: bold;
        font-size: 30px;
    }

    .form-input {
        width: 10%;
        border: 1px solid #ccc;
        font-size: 25px;
        border-radius: 5px;
        text-align: center;
        padding: 2px;
        display: block;
    }

    textarea {
        width: 98%;
        border: 1px solid #ccc;
        height: 60px;
        border-radius: 5px;
        padding: 4px;
    }

    .btn {
        font-weight: bold;
        border: none;
        font-size: 20px;
        padding: 10px 30px;
        border-radius: 5px;
        margin-top: 10px;
        background-color: #FCBA05;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #CC9A10;
    }

    .observations {
        display: block;
    }

    hr {
        margin: 10px auto;
        width: 98%;
    }

    .observations {
        padding: 0px 5px 10px 15px;
    }
</style>
<template>
    <div class="container">
        <div class="container-details">
            <div class="container-img">
                <img :src="`${baseUrlImage}storage/${product.product_image}`" :alt="`Imagem do produto: ${product.product_name}`">
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

                        <div class="finish">
                            <input class="form-input" name="quantity" v-model="quantity" type="number" min="1" id="quantity">
                            <input class="btn" type="submit" value="Comprar">
                        </div>
                    </div>
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

    const baseUrlImage = api.defaults.baseURL.replace('/api', '');
    const date = new Date().toLocaleString(); /* ========== APAGAR CÓDIGO QUANDO REMOVER COLUNA DO BANCO ========== */

    const observation = ref('');
    const quantity = ref(1);

    async function buyProduct(e) {
        e.preventDefault();

        let orderID = localStorage.getItem('order_id');

        if(!orderID) {
            store.dispatch('createOrder', {
                total: 0,
                status: 'in_cart',
                order_created: date /* ========== APAGAR CÓDIGO QUANDO REMOVER COLUNA DO BANCO ========== */
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
            quantity: quantity.value,
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
        padding: 10px;
        text-align: center;
    }

    .container-img img {
        width: 100%;
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
        padding: 0px;
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
        background-color: #FCBA05;
        cursor: pointer;
        margin-right: 3px;
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

    .finish {
        display: flex;
        justify-content: space-between;
    }
</style>
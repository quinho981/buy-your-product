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

                <form @submit="buyProduct">
                    <label for="observation">Observações:</label>
                    <textarea name="observation" v-model="observation" id="observation"></textarea><br>

                    <label for="quantity">Quantidade:</label>
                    <input class="form-input" name="quantity" v-model="quantity" type="number" min="1" id="quantity">
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
    import { ref } from "@vue/reactivity";

    const props = defineProps({
        product: Object
    })

    const observation = ref('');
    const quantity = ref(1);

    function buyProduct(e) {
        e.preventDefault();

        console.log(quantity.value);
        console.log(observation.value);

        // ENVIAR PARA API VIA POST
    }
</script>

<style scoped>
    .container {
        width: 87%;
        margin: 30px auto;
        background-color: #fff;
        border-radius: 5px;
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
        width: 98.5%;
        border: 1px solid #ccc;
        font-size: 30px;
        border-radius: 5px;
        text-align: center;
        padding: 2px;
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
<template>
    <div class="container">
        <div class="container-details">
            <div class="container-img">
                <img src="../../public/img/pia.png" alt="">
            </div>
            <div class="container-descriptions">
                <h2>{{ product.product_name }}</h2>
                <h4>{{ product.description }}</h4>
                <p class="value">R${{ product.price }}</p>
                <form>
                    <p>Observações:</p>
                    <textarea name="" id=""></textarea><br>
                    <p>Quantidade:</p>
                    <input class="form-input" type="number">
                    <input class="btn" type="submit" value="Comprar">
                </form>
            </div>
        </div>
        <hr>
        <div class="observations">
            <p>Descrição</p>
            <p>{{ product.description }}</p>
            <br>
            <p>Descrição</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        product: Object
    })
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
<template>
    <div class="card">
        <div class="card-header">
            <img src="" alt="">
        </div>
        <div class="card-body">
            <h4>{{ product.product_name }}</h4>
            <h6>{{ product.description }}</h6>
            <p>a partir de R${{ product.price }}</p>
        </div>
        <div class="card-bottom">
            <router-link class="btn" 
                :to="{
                    name: 'product', 
                    params: { 
                        id: product.id 
                    }
                }">
                Comprar
            </router-link>
        </div>
    </div>
</template>

<script setup>
    import { useRouter } from 'vue-router';

    const router = useRouter();

    const props = defineProps({
        product: Object
    })
</script>

<style scoped>
    .card {
        width: 23%;
        margin: 10px 11px;
        border-radius: 5px;
    }

    .card-header {
        background-color: gray;
        height: 150px;
        border-radius: 5px 5px 0px 0px;
    }

    .card-body {
        padding: 10px 5px 0px 5px;
        background-color: #fff;
    }

    .card-body h6 {
        font-size: 0.74em;
    }

    .card-body h6,
    .card-body p {
        padding: 10px 0;
        font-weight: normal;
    }

    .card-bottom {
        padding: 5px;
        background-color: #fff;
        border-radius: 5px;
    }

    .btn {
        background-color: #FCBA05;
        padding: 10px;
        display: inline-block;
        margin-bottom: 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
        font-weight: bold;
        color: #000;
        transition: .3s;
    }

    .btn:hover {
        background-color: #CC9A10;
    }
</style>
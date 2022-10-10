<template>
    <div>
        <p>Breadcomb</p>
        <Jumbotron v-for="product in products" :key="product.id" v-bind="{ product }" />
    </div>
</template>

<script setup>
    import api from '@/services/config';
    import { ref } from '@vue/reactivity';
    import { onMounted } from '@vue/runtime-core';
    import { useRoute } from 'vue-router';
    import Jumbotron from '../components/Jumbotron.vue';

    const route = useRoute();
    const productID = parseInt(route.params.id);
    const products = ref([]);

    const fetchProduct = async () => await api.get(`/products/${productID}`)
        .then((response) => {
            products.value = response.data;
        })
        .catch(e => console.log(e));

    onMounted(fetchProduct);
</script>

<style scoped>
    p {
        margin: 15px 0px 0px 85px;
    }
</style>
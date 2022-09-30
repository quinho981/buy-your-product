<template>
  <div class="container">
    <div class="cards">

      <Card v-for="product in products" :key="product.id" v-bind="{ product }" />
      
    </div>
  </div>
</template>

<script setup>
  import api from '@/services/config';
  import { ref } from '@vue/reactivity';
  import { onMounted } from '@vue/runtime-core';
  import Card from '../components/Card.vue';

  const products = ref([]);

  const fetchProducts = async () => await api.get("/products")
    .then((response) => {
      products.value = response.data;
    });

  onMounted(fetchProducts);
</script>

<style scoped>
  .container {
    width: 88%;
    margin: 30px auto;
  }

  .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
</style>
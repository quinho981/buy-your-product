<template>
  <div class="container">
    <h2>Carrinho de compras</h2>
    <div class="events-message">
      <font-awesome-icon icon="fa-solid fa-check" id="icon-check"/> Você adicionou TESTE ao carrinho de compras.
    </div>
    <div class="cart-group">

      <div class="cart-section">
        <div class="cart-section-title">
          <div class="item grow-5">Item</div>
          <div class="item grow-1">Preço</div>
          <div class="item grow-1">Quantidade</div>
          <div class="item grow-1 center">Sub-total</div>
        </div>
        <hr>
        <div class="cart-section-body" v-for="item in items" :key="item.id">
          <div class="item grow-5">
            <p>{{ item.product_id }}</p>
          </div>

          <div class="item grow-1">
            <p>R${{ item.unit_price }}</p>
          </div>

          <div class="item grow-1 center">
            <p>{{ item.quantity }}</p>
          </div>

          <div class="item grow-1 center">
            <p>R${{ item.total_price }}</p>
          </div>
        </div>
        <hr>
      </div>

      <div class="subtotalArea">
        <div class="sub-total">
          <div class="subTotalOrder">
            <div>
              <p>Sub-total</p>
            </div>
            <div>
              <p>R$41,80</p>
            </div>
          </div>
          
          <div class="totalOrder">
            <div>
              <p>Total do pedido</p>
            </div>
            <div>
              <p>R$41,80</p>
            </div>
          </div>
          
          <button class="btn">Finalizar compra</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  import api from '@/services/config';
  import { ref } from '@vue/reactivity';
  import { onMounted } from '@vue/runtime-core';

  const orderID = localStorage.getItem('order_id');
  const items = ref([]);

  if(orderID) {
    const fetchItems = async () => await api.get(`/orders/${orderID}`)
      .then((response) => {
        items.value = response.data;
      })
      .catch(e => console.log(e));

    onMounted(fetchItems);
  }
</script>

<style scoped>
  .container {
    width: 86%;
    margin: 30px auto;
  }

  .events-message {
    padding: 10px;
    background-color: #E5EFE5;
    color: #336706;
    border-radius: 5px;
    margin-top: 15px;
    font-size: 14px;
    display: flex;
    align-items: center;
  }

  .cart-group {
    display: flex;
    flex-wrap: wrap;
  }

  .cart-section {
    flex-grow: 6;
    background-color: #fff;
    border-radius: 5px 0px 0px 5px;
    padding: 10px;
    margin-top: 15px;
  }

  .cart-section-title {
    display: flex;
    font-weight: 600;
    background-color: #f9f9f9;
    border-radius: 5px 5px 0px 0px;
    padding: 0px 5px;
  }

  .cart-section-body {
    display: flex;
    font-size: 14px;
    padding: 0px 5px;
  }

  .item {
    flex: 1;
    padding: 10px 2px;
    color: #333;
  }

  .grow-1 {
    flex-grow: 1;
  }

  .grow-5 {
    flex-grow: 5;
  }

  .center {
    text-align: center;
  }

  .subtotalArea {
    flex-grow: 1;
    background-color: #fff;
    border-radius: 0px 5px 5px 0px;
    padding: 10px;
    margin-top: 15px;
  }

  .sub-total {
    padding: 10px;
    background-color: #F5F5F5;
    border-radius: 5px;
  }

  .subTotalOrder {
    font-size: 13px;
    display: flex;
    justify-content: space-between;
    padding: 5px 0;
  }

  .totalOrder {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    font-weight: 700;
    font-size: 18px;
    border-bottom: 1px solid #ccc;
  }

  .btn {
    margin-top: 10px;
    width: 100%;
    padding: 14px;
    font-size: 18px;
    font-weight: 600;
    background-color: #FCBA05;
    color: #000;
    border: none;
    transition: .3s;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #CC9A10;
  }

  #icon-check {
    font-weight: bold;
    font-size: 18px;
    margin-right: 10px;
  }
</style>
<template>
  <div class="container">
    <div class="cards">
      <div class="card">
        <div class="card-header">
          <img src="" alt="">
        </div>
        <div class="card-body">
          <h4>Nome do produto</h4>
          <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h6>
          <p>a partir de R$19,99</p>
        </div>
        <div class="card-bottom">
          <button @click="redirectToDetail()">Comprar</button>
        </div>
      </div>

      <div class="card card-center">
        <div class="card-header">
          <img src="" alt="">
        </div>
        <div class="card-body">
          <h4>Nome do produto</h4>
          <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h6>
          <p>a partir de R$19,99</p>
        </div>
        <div class="card-bottom">
          <button @click="redirectToDetail()">Comprar</button>
        </div>
      </div>

      <div class="card card-center">
        <div class="card-header">
          <img src="" alt="">
        </div>
        <div class="card-body">
          <h4>Nome do produto</h4>
          <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h6>
          <p>a partir de R$19,99</p>
        </div>
        <div class="card-bottom">
          <button @click="redirectToDetail()">Comprar</button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <img src="" alt="">
        </div>
        <div class="card-body">
          <h4>Nome do produto</h4>
          <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h6>
          <p>a partir de R$19,99</p>
        </div>
        <div class="card-bottom">
          <button @click="redirectToDetail()">Comprar</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  components: {
  },
  methods: {
    redirectToDetail() {
      this.$router.push('details');
    }
  },
  // mounted(){
  //   this.redirectToDetail();
  // }
}
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
    padding: 10px 0px 0px 5px;
    background-color: #fff;
  }

  .card-body h3,
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

  .card-bottom button {
    padding: 10px;
    margin-bottom: 5px;
    border: none;
    background-color: #FCBA05;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: .3s;
  }

  .card-bottom button:hover {
    background-color: #CC9A10;
  }
</style>
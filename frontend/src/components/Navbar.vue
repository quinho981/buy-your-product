<template>
  <nav>
    <div class="categorys">
      <router-link class="nav-link" to="/">TODA A LOJA</router-link>
      <router-link class="nav-link" to="/">Banheiro</router-link>
      <router-link class="nav-link" to="/">Climatização e ventilação</router-link>
      <router-link class="nav-link" to="/">Cozinha e lavanderia</router-link>
      <router-link class="nav-link" to="/">Porcelanatos</router-link>
      <router-link class="nav-link" to="/">Portas e janelas</router-link>
    </div>
  </nav>
</template>

<script setup>

</script>

<style scoped>
  nav {
    width: 100%;
    background-color: #fff;
    padding: 15px 0;
    display: flex;
    font-weight: bold;
    font-size: 20px;
  }

  .categorys {
    width: 100%;
    margin: 0 95px;
    justify-content: space-between;
    display: flex;
  }

  .nav-link {
    color: #222;
    transition: .5s;
  }

  .nav-link:hover {
    color: #FCBA05
  }
</style>
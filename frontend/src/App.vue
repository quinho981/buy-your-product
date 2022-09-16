<template>
  <Header />
  <router-view/>  
</template>

<script>
import Header from "@/components/Header.vue";

export default {
  components: {
    Header
  }
}
</script>

<style>
  * {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding: 0;
    margin: 0;
  }
</style>

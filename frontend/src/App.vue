<template>
  <Header />
  <Navbar />
  <router-view/>  
</template>

<script setup>
  import Header from "@/components/Header.vue";
  import Navbar from "./components/Navbar.vue";
</script>

<style>
  * {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding: 0;
    margin: 0;
    text-decoration: none;
  }

  body {
    background-color: #F5F5F5;
  }
</style>

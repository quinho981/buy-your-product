<template>
    <header>
        <router-link to="/" id="logo-link">
            <img src="../../public/img/box.png" alt="Caixa" id="logo">
        </router-link>
        <nav>
            <router-link class="nav-link" to="/">Entre ou cadastre-se</router-link>
            <router-link class="nav-link" to="/order-item">
                <font-awesome-icon icon="fa-solid fa-cart-shopping" id="icon-cart"/>
                <span class="productsCart">{{ store.state.cart.length }}</span>
            </router-link>
        </nav>
    </header>
</template>

<script setup>
    import { useStore } from 'vuex';

    const store = useStore();
    //let productsInCart = JSON.parse(localStorage.getItem('cart'));
</script>

<style scoped>
    header {
        width: 100%;
        background-color: #222;
        padding: 10px 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 12px;
    }

    #logo-link {
        margin-left: 95px;
    }

    #logo {
        width: 40px;
        height: 40px;
    }

    nav {
        margin-right: 90px;
        display: flex;
        align-items: center;
    }

    .nav-link {
        margin-right: 10px;
        color: #fff;
        transition: .5s;
    }

    .nav-link:hover {
        color: #FCBA05;
    }

    #icon-cart {
        font-size: 30px;
    }

    .productsCart {
        color: #fff;
        background-color: rgb(255, 69, 69);
        border-radius: 50%;
        padding: 3px 6px;
        font-size: 12px;
        margin-left: -12px;
        margin-top: -15px;
        font-weight: bold;
    }
</style>
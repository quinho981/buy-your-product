<template>
  <div class="container">
    <div class="container-img">
        <img src="../../public/img/pia.png" alt="">
    </div>
    <div class="container-descriptions">
        <h2>Nome do produto</h2>
        <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h5>
        <p>a partir de R$19,99</p>
        <form>
            <p>Observações:</p>
            <textarea name="" id=""></textarea><br>
            <p>Quantidade:</p>
            <input class="form-input" type="number">
            <input class="btn" type="submit" value="Comprar">
        </form>
    </div>
  </div>
</template>

<script>
export default {
    name: "ProductDetail"
}
</script>

<style scoped>
    .container {
        width: 87%;
        margin: 30px auto;
        background-color: #fff;
        display: flex;
        border-radius: 5px;
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

    h5, p {
        padding: 10px 0px 0px 0px;
        font-weight: normal;
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
</style>
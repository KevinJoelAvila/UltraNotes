<template>
    <div id="NavBar">
        <div class="imagenTitulo">
            <router-link to="/"><img src="../assets/notas2.png"/></router-link>
        </div>
        <div class="textoTitulo">
            <p>UltraNotes</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NavBar',
    data () {

    }
}
</script>

<style scoped>

* {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

#NavBar
{
    background-color: rgba(192, 27, 233, 0.507);
    width: 100%;
    height: 8vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.textoTitulo {
    margin-top: 7px;
    margin-left: 10px;
    font-size: 40px;
    font-family:Rocket;
}

@font-face {
    font-family: Rocket;
    src: url(../assets/css/Rocket.ttf);
}

</style>
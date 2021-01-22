<template>
    <div id="NavBar">
        <slot name="contenidoIzquierda"></slot>
        <div id="contenidoCentro">
            <div class="imagenTitulo">
            </div>
            <div class="textoTitulo">
                <p>UltraNotes</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NavBarGeneral',
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

#contenidoCentro
{
    display: flex;
}

.textoTitulo {
    margin-top: 7px;
    margin-left: 10px;
    font-size: 40px;
    font-family: Rocket;
}

@font-face {
    font-family: Rocket;
    src: url(../assets/css/Rocket.ttf);
}

</style>
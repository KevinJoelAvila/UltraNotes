<template>
    <div id="NavBar">

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
/* Resetear todos los componentes de la web para que se quiten los espacios de los laterales y de arriba, para pegar elementos
   bien encima de la pantalla y a los laterales */
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
}
</style>
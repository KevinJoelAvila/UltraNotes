<template>
      <router-view/>
</template>

<script>


export default {
  components: {
    
  }
}
</script>

<style>
/* Resetear todos los componentes de la web para que se quiten los espacios de los laterales y de arriba, para pegar elementos
   bien encima de la pantalla y a los laterales */
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  /*********/
  /* FONDO */
  /*********/
  background-image:-webkit-gradient(linear, left bottom, right top, from(#6d327c), color-stop(#485DA6), color-stop(#00a1ba), color-stop(#00BF98), to(#36C486));
  background-image:-webkit-linear-gradient(left bottom, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);
  background-image:-o-linear-gradient(left bottom, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);
  background-image:linear-gradient(to right top, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);

  height: 100vh;
}


</style>

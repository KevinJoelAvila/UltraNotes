<template>
  
      <Home/>
</template>

<script>
import Home from '@/views/Home.vue'

export default {
  components: {
    Home
  }
}
</script>

<style>
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

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  /* padding: 30px; */
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

button {
  border: 1px solid black;
  padding: 2px;
}

</style>

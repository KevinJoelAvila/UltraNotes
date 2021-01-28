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
* {
    margin: 0;
    padding: 0;
    border: 0;
    

}

body{
background: rgb(132,94,194);
background: -moz-linear-gradient(50deg, rgba(132,94,194,1) 0%, rgba(214,93,177,1) 14%, rgba(255,111,145,1) 44%, rgba(255,150,113,1) 64%, rgba(255,199,95,1) 85%, rgba(249,248,113,1) 100%);
background: -webkit-linear-gradient(50deg, rgba(132,94,194,1) 0%, rgba(214,93,177,1) 14%, rgba(255,111,145,1) 44%, rgba(255,150,113,1) 64%, rgba(255,199,95,1) 85%, rgba(249,248,113,1) 100%);
background: linear-gradient(50deg, rgba(132,94,194,1) 0%, rgba(214,93,177,1) 14%, rgba(255,111,145,1) 44%, rgba(255,150,113,1) 64%, rgba(255,199,95,1) 85%, rgba(249,248,113,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#845ec2",endColorstr="#f9f871",GradientType=1);
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

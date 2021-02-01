<template>
  <div class="home">
    <div>
      <NavBarGeneral>
        <template v-slot:ruta>
          <router-link to="/"><img src="../assets/notas2.png"/></router-link>
        </template>
      </NavBarGeneral>
    </div>
    <div>
      <button><router-link to="/empezar">Empezar</router-link></button>
      <!-- Lineas a quitar luego -->
      <button><router-link to="/editor">Editor</router-link></button>
      <button><router-link to="/dashboard">DashBoard</router-link></button>
      <div class="info">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam esse fugit sed explicabo accusantium a ex obcaecati. Laboriosam nulla, repellat cupiditate molestiae mollitia reprehenderit porro consequuntur. Tempora voluptatibus dolor sit.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iure, maiores perferendis officia consectetur aperiam nobis. Assumenda illum dignissimos dolor expedita numquam laudantium molestiae iusto minus perspiciatis nisi? Molestias, adipisci?
        </p>
      </div>
      <div class="marcas">
        <p>Patrocinadores</p>
      </div>
    </div>
  </div>
  
</template>

<script>
import NavBarGeneral from '@/components/NavBarGeneral.vue'


export default {
  name: 'Home',
  components: {
    NavBarGeneral
  }
}
</script>

<style scoped>
button{
  margin-top: 5vh;
}

.info{
  margin: 10vh;
  border: 1px solid black;
}

.marcas{
  margin: 10vh;
  border: 1px solid red;
}

.nota{
  width: 110px;
  height: 110px;
}

.home{
  /* background-color: red; */
  padding: 0;
  margin: 0;
}


</style>

<template>
  <div class="home">
    <div>
      <NavBar/>
    </div>
    <div>
      <button><router-link to="/empezar">Empezar</router-link></button>

      <!-- Lineas a quitar luego -->
      <button><router-link to="/editor">Editor</router-link></button>

    </div>
  </div>
  
</template>

<script>
import NavBar from '@/components/NavBar.vue'


export default {
  name: 'Home',
  components: {
    NavBar
  }
}
</script>

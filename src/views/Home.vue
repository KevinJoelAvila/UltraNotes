<template>
  <div class="home">
    <div>
      <NavBar/>
    </div>
    <div>
      <button><router-link to="/empezar">Empezar</router-link></button>
    </div>
  </div>
  <router-view/>
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

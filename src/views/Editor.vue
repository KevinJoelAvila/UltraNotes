<template>
  <div class="home">
    <div>
      <NavBarGeneral>
        <template v-slot:contenidoIzquierda id="contenidoIzquierda">
            <div id="botonAtras">
                <img style="width: 45px; height: 45px;" src="../assets/flechaizquierda.png" alt="Flecha para Retroceder"/>
            </div>
        </template>
      </NavBarGeneral>
    </div>
  </div>
  
</template>

<script>
import NavBarGeneral from '@/components/NavBarGeneral.vue'

export default {
  name: 'Editor',
  components: {
    NavBarGeneral
  }
}
</script>

<style scoped>
#botonAtras
{
    position: absolute;
    top: 0;
    left: 0;
    margin-left: 2vh;
    margin-top: 10px;
}
</style>

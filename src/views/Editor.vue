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
      <ContenedorGeneral>
        <template v-slot:botones id="botones">
          <div id="botones">
            <img id="imagenGuardar" src="../assets/guardar.png"/>
            <img id="imagenProgramar" src="../assets/programar.png"/>
            <img id="imagenCopiar" @click="CopiarTexto()" src="../assets/copiar.png"/>
            <img id="imagenLimpiar" @click="LimpiarTexto()" src="../assets/limpiar.png"/>
          </div>
        </template>
      </ContenedorGeneral>
    </div>
  </div>
  
</template>

<script>
import NavBarGeneral from '@/components/NavBarGeneral.vue'
import ContenedorGeneral from '@/components/ContenedorGeneral.vue'

export default {
  name: 'Editor',
  components: {
    NavBarGeneral,
    ContenedorGeneral
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

#botones
{
    display: inline-block;
    margin-left: 2vh;
    margin-top: 20vh;
    float: left;

    max-width: 10vh;
    max-height: 60vh;
    width: 60vh;
    background-color: white;
    border-radius: 15px;
}

#imagenGuardar, #imagenProgramar, #imagenCopiar, #imagenLimpiar
{
    margin-top: 2.5vh;
    height: 50px;
    width: 50px;
    margin-bottom: 1.5vh;
}
</style>

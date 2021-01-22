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
        <template v-slot:editorTexto>
          <div id="contenedorNota">
            <div id="textoNotaDiv">
                <textarea v-model="textoArea" id="textoNota" type="text" placeholder="Empieza a escribir tu nota aqui.." @input="UsuarioEscribiendo()"></textarea>
            </div>
          </div>
        </template>
        <template v-slot:botones>
          <div id="botones">
            <img id="imagenGuardar" src="../assets/guardar.png"/>
            <img id="imagenProgramar" src="../assets/programar.png"/>
            <img id="imagenCopiar" src="../assets/copiar.png"/>
            <img id="imagenLimpiar" src="../assets/limpiar.png"/>
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
    margin-top: 2vh;
    display: block;
    width: auto;
    background-color: white;
    border-radius: 15px;
}

#textoNotaDiv
{
    background-color: white;
    height: 72vh;
    padding: 0 20px;
    width: auto;
    border-radius: 15px;
}

#textoNota
{
    width: 100%;
    background-color: white;
    height: 88%;
    margin-top: 2vh;
    float: left;
    padding: 0 2px;
    box-sizing: border-box;
}

#imagenGuardar, #imagenProgramar, #imagenCopiar, #imagenLimpiar
{
    margin-left: 2.5vh;
    margin-right: 2.5vh;
    height: 50px;
    width: 50px;
    padding-top: 1vh;
    padding-bottom: 1vh;
}


</style>

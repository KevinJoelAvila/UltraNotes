<template>
    <div id="contenedorNota">
        <slot name="botones"></slot>
        <slot name="editorTexto"></slot>
        <slot name="notas"></slot>
        <slot name="buscador"></slot>
    </div>
</template>

<script>
export default {
    name: 'ContenedorGeneral',
    data () {

    }
}
</script>

<style scoped>

* {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

#contenedorNota
{
    background-color: rgb(228, 228, 228);
    width: 97.5%;
    height: 88vh;
    border-radius: 15px;
    float: right;
    margin-top: 2vh;
    margin-right: 2vh;
    padding: 0 2px;
}

@media screen and (max-width: 480px) {
    #contenedorNota {
      width: calc(100% - 10%);
    }
}

</style>
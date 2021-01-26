<template>
    <div id="contenedorNota">
        <slot name="editorTexto"></slot>
        <slot name="notas"></slot>
        <slot name="buscador"></slot>
        <slot name="botones"></slot>
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
    display: flex;
    flex-direction: row;
    justify-content: center;
    text-align: center;
    background-color: rgb(228, 228, 228);
    width: auto;
    height: auto;
    border-radius: 15px;
    margin: 2vh;
    padding: 8px;
}

</style>
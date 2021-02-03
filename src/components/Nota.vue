<template>
    <div class="nota" id="{{ id }}">
        <div class="imgEliminar">
            <img src="../assets/eliminar2.png">
        </div>
        <div class="imgNota">
            <img src="../assets/nota.png">
            <slot name="titulo" class="titulo"></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: "Nota",
    data () {

    },
    props: ["id"],
}
</script>

<style scoped>
.imgEliminar{
    position:relative;
    top: 42px;
    left: 2px;
    float: left;
    filter: grayscale(100%);
    /* margin-top: 10px; */
    /* z-index: 2; */
    /* display: block; */
}
.imgNota{
    /* position: absolute; */
    /* z-index: 3; */
    
    padding: 0;
    margin: 0;
}

.nota{
    /* position: ; */
    border: 2px solid white;
    padding: 0;
    margin: 2px;
    padding: 0;
}

</style>
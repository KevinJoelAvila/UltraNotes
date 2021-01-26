<template>
    <div class="nota">
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

    }
}
</script>

<style scoped>
.imgEliminar{
    position:fixed;
    margin-top: 2px;
    margin-left: 60px;
    /* margin-top: 10px; */
    /* z-index: 2; */
    /* display: block; */
}
.imgNota{
    /* position: absolute; */
    /* z-index: 3; */
}

.nota{
    position: relative;
    border: 2px solid black;
    padding: 0;
    margin: 2px;
    width: 15%;
}

</style>
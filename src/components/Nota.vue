<template>
    <div class="nota">
        <div class="imgEliminar">
            <img src="../assets/eliminar2.png">
        </div>
        <div class="imgNota">
            <img src="../assets/nota.png">
            <slot name="titulo"></slot>
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
    position: relative;
}
.imgNota{
    
}
</style>
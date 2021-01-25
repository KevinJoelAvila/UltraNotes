<template>
    <div class="index">
        <NavBarGeneral>
            <template v-slot:ruta>
                <router-link to="/"><img src="../assets/notas2.png"/></router-link>
            </template>
        </NavBarGeneral>
        <ContenedorGeneral>
            <template v-slot:notas>
                <div class="notas">
                    
                </div>
            </template>
            <template v-slot:buscador>

            </template>
        </ContenedorGeneral>
    </div>
</template>

<script>
import NavBarGeneral from '@/components/NavBarGeneral.vue'
import ContenedorGeneral from '@/components/ContenedorGeneral.vue'

export default {
    name: 'DashBoard',
    components: {
        NavBarGeneral,
        ContenedorGeneral
    }
}
</script>


<style scoped>
.notas{
    display: flex;
    justify-content: space-evenly;

}
</style>
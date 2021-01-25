<template>
    <div class="index">
        <NavBarGeneral>
            <template v-slot:ruta>
                <router-link to="/"><img src="../assets/notas2.png"/></router-link>
            </template>
        </NavBarGeneral>
        <ContenedorGeneral>
            <template v-slot:notas>
                <Notas>
                    <template v-slot:titulo> 
                        <p>Hola</p>
                    </template>
                </Notas>
            </template>
        </ContenedorGeneral>
        
    </div>
</template>

<script>
//  Importamos componentes
import NavBarGeneral from '@/components/NavBarGeneral.vue'
import ContenedorGeneral from '@/components/ContenedorGeneral.vue'
import Notas from '@/components/Nota.vue'

export default {
    name: 'DashBoard',
    components: {
        NavBarGeneral,
        ContenedorGeneral,
        Notas
    }
}
</script>


<style scoped>
.contenedor-notas{
    display: flex;
    justify-content: space-evenly;

}
</style>
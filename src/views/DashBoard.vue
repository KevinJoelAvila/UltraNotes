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
                        <p class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolorum iste eligendi ducimus </p>
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

.titulo{
    position: fixed;
    margin-left: 35px;
    margin-top: -120px;
    /* max-width: 10%; */
    border: 1px solid red;
    width: 10%;
    max-width: 10%;
    max-height: 14%;
}
</style>
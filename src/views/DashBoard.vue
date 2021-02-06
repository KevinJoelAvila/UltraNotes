<template>
    <div class="index">
        <NavBarGeneral>
            <template v-slot:ruta>
                <router-link to="/"><img src="../assets/notas2.png"/></router-link>
            </template>
            <template v-slot:menu>
                <Menu></Menu>
            </template>
        </NavBarGeneral>
        <ContenedorGeneral>
            <template v-slot:notas>
                <div v-for="(numero,i) in list" :key="i">
                    <Notas :id="numero.id">
                        <template v-slot:titulo> 
                            <p class="titulo">{{numero}}</p>
                        </template>
                    </Notas>
                </div>
            </template>
        </ContenedorGeneral>
        
        
    </div>
</template>

<script>
//  Importamos componentes
import NavBarGeneral from '@/components/NavBarGeneral.vue'
import ContenedorGeneral from '@/components/ContenedorGeneral.vue'
import Notas from '@/components/Nota.vue'
import Menu from '@/components/Menu.vue'
import axios from 'axios'

export default {
    name: 'DashBoard',
    components: {
        NavBarGeneral,
        ContenedorGeneral,
        Notas,
        Menu
    },
    data() {
        return{
            list: [],
            error: ""
        }
        
    },
    created: function() {
        this.getTitle();
    },
    methods: {
        getTitle: function() {
            axios.get('http://localhost/prueba/ultranotes/src/api/notas/notas.php').then((response) => {
                this.list = response.data
            }).catch(error => console.log(error));
        }
    }
}



</script>


<style scoped>
.index{
    background: transparent;
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
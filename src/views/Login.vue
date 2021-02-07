<template>
    <div id="log">
        <NavBarGeneral>
            <template v-slot:ruta>
                <router-link to="/"><img src="../assets/notas2.png"/></router-link>
            </template>
        </NavBarGeneral>
        
        <VistaLogin/>
        
    </div>
</template>

<script>
import VistaLogin from '@/components/Login.vue'
import NavBarGeneral from '@/components/NavBarGeneral.vue'

export default {
    name: "Log",
    components: {
        VistaLogin,
        NavBarGeneral
    },
    mounted() {

    },
    methods: {
        
    }
}
</script>


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
        function $(element){
            return document.getElementById(element);
        }

        $("a").addEventListener("click", toggleForm, false);


        $("af").addEventListener("click", toggleForm, false);

        function toggleForm(){
            var container = document.querySelector('.container');
            container.classList.toggle('active');
            console.log("funciona");
        }
    }
}
</script>


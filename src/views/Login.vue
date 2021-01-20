<template>
    <div id="log">
        <NavBar/>
        
        <VistaLogin/>
        
    </div>
</template>

<script>
import VistaLogin from '@/components/Login.vue'
import NavBar from '@/components/NavBar.vue'

export default {
    name: "Log",
    components: {
        VistaLogin,
        NavBar
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


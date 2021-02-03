<template>
    <div id="ventana-login">
        <section>
            <div class="container">
                <div class="user singinBx">
                    <div class="imgBx"><img src="../assets/notaregistro.png"></div>
                    <div class="formBx">
                        <form method="GET">
                            <h2>Iniciar Sesion</h2>
                            <input v-model="accion" type="hidden" value="log">
                            <input v-model="user" required type="text" name="" placeholder="Username">
                            <input v-model="pass" required type="password" name="" placeholder="Password">
                            <input @click="confirmarUsuario()" type="submit" name="login" value="Login">
                            <p class="signup">No tienes cuenta? <a id="a" >Registrate.</a></p>
                        </form>
                    </div>
                </div>
                <div class="user singupBx">
                    <div class="formBx">
                        <form method="GET">
                            <h2>Registrarse</h2>
                            <input v-model="name" type="text" name="" placeholder="Username">
                            <input v-model="password" type="password" name="" placeholder="Create Password">
                            <input v-model="confirmPassword" type="password" name="" placeholder="Confirm Password">
                            <input @click="confirmarUsuario()" type="submit" name="register" value="Register">
                            <p class="signup">Ya tienes cuenta? <a id="af" >Inicia Sesion.</a></p>
                        </form>
                    </div>
                    <div class="imgBx"><img src="../assets/notalogin.jpeg"></div>
                </div>
            </div>
        </section>
        <h1 v-if="error == null">HOLA</h1>
    </div>    
</template>

<script>
import axios from 'axios'

export default {
    name: 'VentanaLogin',
    data () {
        return {
            user: "",
            pass: "",
            name: "",
            password: "",
            confirmPassword: "",
            accion: "",
            error: "",
            log: "login",
            reg: "register"
        }
    },
    created() {

    },
    methods: {
        confirmarUsuario() {
            //Ruta de nuestra API
            axios.get('http://localhost/prueba/ultranotes/src/api/usuarios/usuarios.php', {
                //Con la propiedad params pasamos los datos a la API
                params: {
                    user: this.user,
                    pass: this.pass,
                    accion: "login"
                }
            })
            //Captura la respuesta
            .then((response) => {
                console.log(response.data)
            })
            //Captura los errores
            .catch(error => console.log(error));
        },
        registrarUsuario() {
            //Ruta de nuestra API
            axios.get('http://localhost/prueba/ultranotes/src/api/usuarios/usuarios.php', {
                //Con la propiedad params pasamos los datos a la API
                params: {
                    user: this.name,
                    pass: this.password,
                    accion: this.accion
                }
            })
            //Captura la respuesta
            .then((response) => {
                console.log(response.data)
            })
            //Captura los errores
            .catch(error => console.log(error));
        }
    }
}



// Espera a cargar la pagina para leer los id de la vista
window.onload = function (){
    
}
</script>

<style scoped>
@import '../assets/css/login.css';
</style>
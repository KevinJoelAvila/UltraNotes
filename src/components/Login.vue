<template>
    <div id="ventana-login">
        <section>
            <div class="container">
                <div class="user singinBx">
                    <div class="imgBx"><img src="../assets/notaregistro.png"></div>
                    <div class="formBx">
                        <div class="form">
                            <h2>Iniciar Sesion</h2>
                            <input v-model="user" required type="text" placeholder="Username">
                            <input v-model="pass" required type="password" placeholder="Password">
                            <input v-model="cache[data.Error]" v-bind:class="{mostrar: data.Error != null}" type="text" class="error1" readonly>
                            <input :disabled="pass && user == ''" @click="registerLogin('login')" type="button" value="Login"  >
                            <p @click="pass = '', user = '', toggleForm()" class="signup">No tienes cuenta? <a id="a" >Registrate.</a></p>
                        </div>
                        
                    </div>
                </div>
                <div class="user singupBx">
                    <div class="formBx">
                        <div class="form">
                            <h2>Registrarse</h2>
                            <input v-model="user" type="text" placeholder="Username">
                            <input v-model="pass" type="password" placeholder="Create Password">
                            <input v-model="confirmPassword" type="password" placeholder="Confirm Password">
                            <input v-model="cache[data.Error]" v-bind:class="{mostrar: data.Error != null}" type="text" class="error1" readonly>
                            <p v-if="pass != confirmPassword">Las contraseñas no coinciden</p>
                            <input :disabled="pass != confirmPassword" @click="registerLogin('register')" type="button" value="Register">
                            <p @click="pass = '', user = '', confirmPassword = '', toggleForm()" class="signup">Ya tienes cuenta? <a id="af" >Inicia Sesion.</a></p>
                        </div>
                    </div>
                    <div class="imgBx"><img src="../assets/notalogin.jpeg"></div>
                </div>
                
            </div>
        </section>
        
    </div>    
</template>

<script>
import axios from 'axios'
//axios.defaults.withCredentials = true;

export default {
    name: 'VentanaLogin',
    data () {
        return {
            user: "",
            pass: "",
            confirmPassword: "",
            error: null,
            cache: {
                existe: "Usuario registrado",
                1: "Usuario o contraseña incorrecta",
                2: "Usuario no disponible"
            },
            data: {
                Error: null,
                Respuesta: null
            }
        }
    },
    created() {
        
    },
    methods: {
        // Ejecuta una consulta ajax pasando al servidor el tipo de accion que se va a realizar
        registerLogin(modo) {
            if(this.user != '' && this.pass != '')
            {
                var these = this;
                //Ruta de nuestra API
                axios.get('http://localhost/prueba/ultranotes/src/api/usuarios/usuarios.php', {
                    //Con la propiedad params pasamos los datos a la API
                    params: {
                        user: this.user,
                        pass: this.pass,
                        accion: modo
                    }
                })
                //Captura la respuesta
                .then((response) => {
                    //these.error =  response.data['Error'];
                    these.data = response.data;
                    console.log(response.data);
                    if(modo == "login") this.redireccion('DashBoard');
                    else this.redireccion('Empezar');
                })
                //Captura los errores
                .catch(error => console.log(error));
            }
        },
        redireccion(sitio){
            if(this.data.Respuesta != null)
                document.cookie = "usuario="+this.data.Respuesta.usuario+"; expires=Fri, 31 Dec 9999 23:59:59 GMT";
                document.cookie = "pass="+this.data.Respuesta.pass+"; expires=Fri, 31 Dec 9999 23:59:59 GMT";
                document.cookie = "token="+this.data.Respuesta.token+"; expires=Fri, 31 Dec 9999 23:59:59 GMT";
                this.$router.push(sitio);
        },
        // Deslizar vista de login o registro
        toggleForm(){
            var container = document.querySelector('.container');
            container.classList.toggle('active');
        }
    }
}
</script>

<style scoped>
@import '../assets/css/login.css';
</style>
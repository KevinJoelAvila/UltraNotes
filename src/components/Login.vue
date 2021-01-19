<template>
    <div id="ventana-login">
        <section>
            <div class="container">
                <div class="user singinBx">
                    <div class="imgBx"><img src="coverPage/10.png"></div>
                    <div class="formBx">
                        <form method="post">
                            <h2>Iniciar Sesion</h2>
                            <input type="text" name="" placeholder="Username">
                            <input type="password" name="" placeholder="Password">
                            <input type="submit" name="login" value="Login">
                            <p class="signup">No tienes cuenta? <a id="a" href="#">Registrate.</a></p>
                        </form>
                    </div>
                </div>
                <div class="user singupBx">
                    <div class="formBx">
                        <form method="post">
                            <h2>Registrarse</h2>
                            <input type="text" name="" placeholder="Username">
                            <input type="password" name="" placeholder="Create Password">
                            <input type="password" name="" placeholder="Confirm Password">
                            <input type="submit" name="login" value="Login">
                            <p class="signup">Ya tienes cuenta? <a id="af" href="#">Inicia Sesion.</a></p>
                        </form>
                    </div>
                    <div class="imgBx"><img src="coverPage/15.png"></div>
                </div>
            </div>
        </section>
    </div>    
</template>

<script>
export default {
    name: 'VentanaLogin',
    data () {

    }
}
</script>

<style scoped>
@import '../assets/css/login.css';
</style>
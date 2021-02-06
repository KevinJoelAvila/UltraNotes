<template>
    <div id="NavBar">
        
        <slot name="contenidoIzquierda"></slot>
        <div id="contenidoCentro">
            <div class="imagenTitulo">
                <slot name="ruta"></slot>
            </div>
            <div class="textoTitulo">
                <p class="neon">UltraNotes</p>
            </div>
        </div>
        <slot name="menu"></slot>
    </div>
</template>

<script>
export default {
    name: 'NavBarGeneral',
    data () {

    }
}
</script>

<style scoped>

* {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

#NavBar
{
    background: rgba(155, 133, 133, 0.623);
    width: 100%;
    height: 8vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

#contenidoCentro
{
    display: flex;
}

.textoTitulo {
    margin-top: 7px;
    margin-left: 10px;
    font-size: 40px;
    font-family: 'Courier New';
    color: white;
}

@font-face {
    font-family: Rocket;
    src: url(../assets/css/Rocket.ttf);
}

.neon {
    text-decoration: none;
    color: #fff;
    /* transition: all 0.5s; */
    /* text-shadow: 0 0 1px #fff0aa, 0 0 5px #fee778, 0 0 10px #fee35e, 0 0 20px #fee259, 0 0 30px #fee157, 0 0 40px #fedb36, 0 0 70px #fedc38, 0 0 80px #fedc3b, 0 0 100px #fedd40, 0 0 150px #FEDE45; */
}

/* p.neon:hover,
p.neon:focus {
    color: #fff;
    text-shadow: 0 0 1px #c2a101, 0 0 5px #dcb601, 0 0 10px #e6be01, 0 0 20px #f0c701, 0 0 30px #facf01, 0 0 40px #fed308, 0 0 70px #fed512, 0 0 80px #fee35e, 0 0 100px #fee04f, 0 0 150px #FEDE45;
} */
</style>
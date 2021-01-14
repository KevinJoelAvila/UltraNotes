
const caracteresMaximos = 5000;
var contadorSegundos = 2;

var contenedorNota = new Vue({
    el: '#contenedorNota',
    data: {
        CARACTERES_PERMITIDOS: "5000",
        ESTADO_TEXTO: "Guardado",
        ESTADO: 1,
        textoArea: "",
        estadoTexto: ""
    },
    methods: {
      UsuarioEscribiendo () {
        this.CARACTERES_PERMITIDOS = caracteresMaximos - this.textoArea.length;
        this.ESTADO = 0;
        this.ESTADO_TEXTO = "No Guardado";
        contadorSegundos = 3;
      }
    },
})

var botones = new Vue({
    el: '#botones',
    methods: {
      CopiarTexto () {
        alert("TF");
        navigator.clipboard.writeText(contenedorNota.textoArea);
      },
      LimpiarTexto () {
        contenedorNota.textoArea = "";
        contenedorNota.CARACTERES_PERMITIDOS = caracteresMaximos - contenedorNota.textoArea.length;
        contenedorNota.ESTADO = 0;
        contenedorNota.ESTADO_TEXTO = "No Guardado";
        contadorSegundos = 3;
      }
    },
})

let timerId = setInterval(() => AutoGuardarNota(), 3000);
let timerId2 = setInterval(() => RestarSegundos(), 1000);

function AutoGuardarNota()
{
    if(contadorSegundos == 0)
    {
        contenedorNota.ESTADO_TEXTO = "Guardado";
        contenedorNota.ESTADO = 1;
    }
    else if(contadorSegundos == 1 || contadorSegundos == 2)
    {
        contenedorNota.ESTADO_TEXTO = "No Guardado";
        contenedorNota.ESTADO = 0;
    }
}

function RestarSegundos()
{   
    if(contadorSegundos != 0)
    {
        contadorSegundos--;
    }
}


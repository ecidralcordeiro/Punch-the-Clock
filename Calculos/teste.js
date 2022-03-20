let listaEntradaPonto = [];
let listaSaidaPonto = [];
let listaDataEntrada = [];
let listaDataSaida = [];
let tempoTrabalhado = 0;
const data = new Date();

function baterPonto(){
    hora = data.getHours();
    dia = String(data.getDate()).padStart(2, '0');
    mes = String(data.getMonth() + 1).padStart(2, '0');
    ano = data.getFullYear();
    date = String(ano + "/" + mes + "/" + dia)
    hora = data.getHours();

    if(listaEntradaPonto.length > listaSaidaPonto.length){
        listaSaidaPonto.push(hora);
        listaDataSaida.push(date)

    }else if (listaEntradaPonto.length == listaSaidaPonto.length){
        listaEntradaPonto.push(hora);
        listaDataEntrada.push(date)
    }

}


function calculaHoraTrabalhada(){

    console.log(listaDataEntrada)
    console.log(listaSaidaPonto)
    console.log(listaEntradaPonto)
    for (let i = 0; i < listaDataSaida.length; i++){
        if(listaDataEntrada[0] == listaDataSaida[-1]){
            tempoTrabalhado = tempoTrabalhado + listaSaidaPonto[i] - listaEntradaPonto[i];
            return tempoTrabalhado;
        }else{
            tempoTrabalhado = tempoTrabalhado + (1440 - listaEntradaPonto[i] + listaSaidaPonto[i])
        }
    }

}

function calculaIntervalo(){


    
}
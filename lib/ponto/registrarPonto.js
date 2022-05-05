
  function getDate() {
      var dataAtual = new Date();
      var ano = dataAtual.getFullYear();
      var mes = dataAtual.getMonth();
      var dia = dataAtual.getDay();
      var hora = dataAtual.getHours();
      var minuto = dataAtual.getMinutes();

    var dt = new Date();
    document.getElementById('data').innerText= dia+ '/' +  mes+ '/' +  ano + '  -  ' + hora + ':' + minuto;
  }



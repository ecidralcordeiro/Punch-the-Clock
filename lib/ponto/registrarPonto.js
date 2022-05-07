
  function getDate() {
      var dataAtual = new Date();
      var ano = dataAtual.getFullYear();
      var mes = dataAtual.getMonth();
      var dia = dataAtual.getDay();
      var hora = dataAtual.getHours();
      var minuto = dataAtual.getMinutes();

    var dt = new Date();
    document.getElementById('data').innerText = 'Data: ' + dia + '/' +  mes + '/' +  ano;
    document.getElementById('hora').innerText = 'Horário: ' + hora + ':' + minuto;
  }

  function getLocal() {
    if ("geolocation" in navigator) {
    } else {
      alert("Desculpe, mas os serviços de geolocalização não são suportados pelo seu navegador :(");
    }
  
    navigator.geolocation.getCurrentPosition(function(position) {
      var lati = (position.coords.latitude);
      var longi = (position.coords.longitude);
      document.getElementById("local").innerText = lati + "  |  " + longi;
    });
  }

  function onSuceed() {
    alert("Ponto Registrado!");
  }
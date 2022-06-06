
  function getDate() {
    var data = new Date(),
    dia  = data.getDate().toString(),
    diaF = (dia.length == 1) ? '0'+dia : dia,
    mes  = (data.getMonth()+1).toString(), 
    mesF = (mes.length == 1) ? '0'+mes : mes,
    anoF = data.getFullYear();
    var hora = data.getHours();
    var minuto = data.getMinutes();
    var horam = hora * 60;
    var horamin = horam + minuto;

    document.getElementById('data').innerText = 'Data: ' + diaF + '/' +  mesF + '/' +  anoF;

    document.getElementById('datai').setAttribute("value" ,anoF + '-' + mesF + '-' +  diaF);

    document.getElementById('hora').innerText = 'Horário: ' + hora + ':' + minuto;

    document.getElementById('horai').setAttribute("value", horamin);

    return diaF+"/"+mesF+"/"+anoF;
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

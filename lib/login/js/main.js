$(function(){
    $("#login").submit(function(e){
     e.preventDefault();

        var formData = new FormData(this);
        for(var dados of formData.entries()) {
           console.log(dados[0]+ ', '+ dados[1]);
        }


        $.ajax({
          url: "../db/login.php",
          type: "POST",
          data:  formData,
          dataType: 'json',
            contentType: false,
            processData: false,    
          success: function(data) {
            alert(data['nome'] + data['senha'])
            if(data['nome'] != ""){
                location.href = "../home/home.php"
            }
            console.log(data);
           }
        });     
    });

});
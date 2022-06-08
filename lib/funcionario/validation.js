const senha = document.getElementById('inputPassword');
const rep_senha = document.getElementById('inputPassword2');
const cpf = document.getElementById("cpf");


function validate(item){
    item.setCustomValidity('');
    item.checkValidity('');

    if (item == rep_senha){
        if(item.value === senha.value) {
            item.setCustomValidity('');
        }else{
            item.setCustomValidity('As senhas devem ser identicas');
        }

    }
    if(item == cpf){
        let numCpf = cpf.value.replace(/[^0-9]/g , "");
        if(validateCPF(numCpf)){
            item.setCustomValidity('');
        }else{
            item.setCustomValidity('Você precisa inserir um cpf valido');
        }
    }
}

function validateCPF(cpf)
  {
    var number, digits, sum, i, result, equal_digits;
    equal_digits = 1;
    if (cpf.length < 11)
          return false;
    for (i = 0; i < cpf.length - 1; i++)
          if (cpf.charAt(i) != cpf.charAt(i + 1))
                {
                equal_digits = 0;
                break;
                }
    if (!equal_digits)
          {
          number = cpf.substring(0,9);
          digits = cpf.substring(9);
          sum = 0;
          for (i = 10; i > 1; i--)
                sum += number.charAt(10 - i) * i;
          result = sum % 11 < 2 ? 0 : 11 - sum % 11;
          if (result != digits.charAt(0))
                return false;
          number = cpf.substring(0,10);
          sum = 0;
          for (i = 11; i > 1; i--)
                sum += number.charAt(11 - i) * i;
          result = sum % 11 < 2 ? 0 : 11 - sum % 11;
          if (result != digits.charAt(1))
                return false;
          return true;
          }
    else
        return false;
  }





senha.addEventListener('input', function(){validate(senha)});
rep_senha.addEventListener('input', function(){validate(rep_senha)});
cpf.addEventListener('input', function(){validate(cpf)});
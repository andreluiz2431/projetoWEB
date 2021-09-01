function mostrarSenha(id) {
  var senha = document.getElementById(id);
  if (senha.type == "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
}


function verificacao (id,id1,id2,id3){
  var nam = document.getElementById(id).value;
  var nam1 = document.getElementById(id1).value;

  verificanomes(nam,nam1);

  var sennha = document.getElementById(id2).value;
  var sennha1 = document.getElementById(id3).value;

  verificaSenhas(sennha, sennha1);
}


function verificanomes(id, id1) {
  
  if (id == "" && id1 == "") {
    alert("O nome e o sobrenome não foram preenchidos, por favor revise");
    document.id.focus();
    return false;
  } else if (id == "") {
    alert("O nome não está preenchido, por favor revise");
    document.id.focus();
    return false;
  } else if (id1 == "") {
    alert("O sobrenome não está preenchido, por favor revise");
    document.id1.focus();
    return false;
  }
}
function verificaSenhas(sennha, sennha1) {
  

  if (sennha == "" || sennha.length <= 5) {
    alert(
      "ERRO na inserção da senha! Digite uma senha com pelo menos 6 caracteres"
    );
    document.sennha.focus();
    return false;
  } else if (sennha1 == "" || sennha1.length <= 5) {
    alert(
      "ERRO na confirmação da senha! Digite uma senha com pelo menos 6 caracteres"
    );
    document.sennha1.focus();
    return false;
  }

  if (sennha != sennha1) {
    alert("ERRO! As senhas não são iguais");
    document.sennha.focus();
    return false;
  }
}

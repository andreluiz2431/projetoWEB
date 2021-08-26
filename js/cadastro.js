function mostrarSenha(id) {
  var senha = document.getElementById(id);
  if (senha.type == "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
}

function verificanomes(id, id1) {
  var nam = document.getElementById(id).value;
  var nam1 = document.getElementById(id1).value;
  if (nam == "" && nam1 == "") {
    alert("O nome e o sobrenome não foram preenchidos, por favor revise");
    document.nam.focus();
    return false;
  } else if (nam == "") {
    alert("O nome não está preenchido, por favor revise");
    document.nam.focus();
    return false;
  } else if (nam1 == "") {
    alert("O sobrenome não está preenchido, por favor revise");
    document.nam.focus();
    return false;
  }
}
function verificaSenhas(id, id1) {
  var sennha = document.getElementById(id).value;
  var sennha1 = document.getElementById(id1).value;

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

function validarSenha() {
  var senha = document.getElementById("senha").value;
  var confirmarSenha = document.getElementById("confirmar-senha").value;

  if (senha !== confirmarSenha) {
    alert("As senhas não são iguais. Por favor, verifique novamente.");
    return false;
  }

  return true;
}

function validarData() {
  var dtNascimento = document.getElementById("nasc").value;
  var dataAtual = new Date().toISOString().split("T")[0];

  if (dtNascimento === "") {
    alert("Por favor, insira uma data de nascimento válida.");
    return false;
  }

  if (dtNascimento > dataAtual) {
    alert("Data de nascimento inválida. Por favor, verifique novamente.");
    return false;
  }

  return true;
}

function validarFormulario() {
  return validarSenha() && validarData();
}

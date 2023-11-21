function calculateIMC() {
    var weight = parseFloat(document.getElementById("weight").value);
    var height = parseFloat(document.getElementById('height').value);

    if (weight > 0 && height > 0) {
        height = height / 100;
      var imc = weight / (height * height);
      displayResult(imc);
    } else {
      alert('Por favor, insira valores válidos para peso e altura.');
    }
}

function displayResult(imc) {
    var resultDiv = document.getElementById('result');
    var message;

    if (imc < 18.5)
        message = 'Abaixo do peso';
    if (imc >= 18.5 && imc < 24.9) 
        message = 'Peso normal';
    if (imc >= 25 && imc < 29.9) 
        message = 'Sobrepeso';
    if (imc >= 30 && imc < 34.9) 
        message = 'Obesidade grau 1';
    if (imc >= 35 && imc < 39.9)
        message = 'Obesidade grau 2';
    if (imc >= 40)
        message = 'Obesidade grau 3';
    

    console.log(imc);
    resultDiv.innerHTML = 'Seu IMC é ' + imc.toFixed(2) + '. ' + message + '.';
    resultDiv.hidden = false;
}
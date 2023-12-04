document.addEventListener('DOMContentLoaded', function() {
    // Seletor do campo de CEP
    var cepInput = document.querySelector('input[name="cep"]');

    // Adiciona um ouvinte de evento para o evento de entrada
    cepInput.addEventListener('input', function(event) {
        // Obtém o valor atual do campo CEP
        var cepValue = event.target.value;

        // Remove caracteres não numéricos
        var cleanCep = cepValue.replace(/\D/g, '');

        // Adiciona o hífen se o comprimento for maior que 5
        if (cleanCep.length > 5) {
            cleanCep = cleanCep.substring(0, 5) + '-' + cleanCep.substring(5, 9);
        }

        // Atualiza o valor do campo CEP
        event.target.value = cleanCep;
    });
});

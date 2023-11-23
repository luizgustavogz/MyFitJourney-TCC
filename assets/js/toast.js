// console.log("Início do script toast.js");

function showToast(message) {
    var toast = document.getElementById("toast");

    // Verificar se o elemento com o ID "toast" foi encontrado
    if (toast) {
        toast.innerHTML = message;
        toast.style.display = "block";
        setTimeout(function () {
            toast.style.display = "none";
        }, 3000);
    } else {
        console.error("Elemento com o ID 'toast' não encontrado.");
    }
}

// console.log("Script toast.js carregado!");

// Função para redirecionar ao clicar no toast
function redirectVerificationEmail(email) {
    window.location.href = "../services/emailVerificationService.php?email=" + email;
}

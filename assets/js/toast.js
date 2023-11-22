// var toast = document.getElementById("toast");

function showToast(message) {
    var toast = document.getElementById("toast");
    toast.innerHTML = message;
    toast.style.display = "block";
    setTimeout(function () {
        toast.style.display = "none";
    }, 3000);
}

// Função para redirecionar ao clicar no toast
function redirectVerificationEmail(email) {
    window.location.href = "../services/emailVerificationService.php?email=" + email;
}

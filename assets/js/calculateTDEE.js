function calculateTDEE() {

    // Obter valores do formulário
    const gender = document.getElementById("gender").value;
    const age = parseInt(document.getElementById("age").value);
    const weight = parseFloat(document.getElementById("weight").value);
    const height = parseFloat(document.getElementById("height").value);
    const activityLevel = document.getElementById("activityLevel").value;
    const objective = document.getElementById("objective").value;

    // Calcular TDEE
    let tdee = 0, tmb = 0, activityLevelNumber = 0;

    if (gender == "male") {
        tmb = (10 * weight) + (6.25 * height) - (5 * age) + 5;
    } else {
        tmb = (10 * weight) + (6.25 * height) - (5 * age) - 161;                
    }

    if (activityLevel == "sedentary")
        activityLevelNumber = 1.2;
    if (activityLevel == "lightlyActive") 
        activityLevelNumber = 1.375;
    if (activityLevel == "moderatelyActive") 
        activityLevelNumber = 1.55;
    if (activityLevel == "veryActive") 
        activityLevelNumber = 1.725;
    if (activityLevel == "extraActive")
        activityLevelNumber = 1.9;
    
    
    tdee = tmb * activityLevelNumber;

    // Calcular Macros (exemplo de proporção)
    let protein=0, carbs=0, fat=0;
    if (objective == "loseWeight" || objective == "loseWeightFast") {
        protein = weight * 1.2;
        carbs = weight * 3;
        fat = (tdee * 0.2) / 9;
    }
    if (objective == "maintainWeight" || objective == "gainWeight") {
        protein = weight * 1.7;
        carbs = weight * 0.5;
        fat = (tdee * 0.3) / 9;
    }
    if (objective == "agressiveGains") {
        protein = weight * 2.2;
        carbs = weight * 0.7;
        fat = (tdee * 0.35) / 9;
    }


    // Exibir resultados
    document.getElementById("tmbResult").innerText = `Gasto energético em repouso de nosso corpo (TMB): ${tmb.toFixed(2)} kcal`;
    document.getElementById("tdeeResult").innerText = `Gasto energético com atividade física (TDEE): ${tdee.toFixed(2)} kcal`;
    document.getElementById("macrosResult").innerText = `Macros ingeridos por dia (aproximadamente): Proteína ${protein.toFixed(2)}g, Carboidratos ${carbs.toFixed(2)}g, Gordura ${fat.toFixed(2)}g`;

    // Exibir a seção de resultados
    document.getElementById("resultSection").style.display = "block";
}

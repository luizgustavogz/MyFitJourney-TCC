function calculateTDEE() {

    // Obter valores do formulário
    const gender = document.getElementById("gender").value;
    const age = parseInt(document.getElementById("age").value);
    const weight = parseFloat(document.getElementById("weight").value);
    const height = parseFloat(document.getElementById("height").value);
    const activityLevel = document.getElementById("activityLevel").value;

    // Calcular TDEE
    let tdee = 0;
    let tmb = 0;
    let activityLevelNumber = 0;

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
    const protein = weight * 2.2;  // 2.2g de proteína por kg de peso
    const carbs = tdee * 0.5;      // 50% das calorias provenientes de carboidratos
    const fat = tdee * 0.3;        // 30% das calorias provenientes de gorduras

    // Exibir resultados
    document.getElementById("tmbResult").innerText = `TMB: ${tmb.toFixed(2)} kcal`;
    document.getElementById("tdeeResult").innerText = `TDEE: ${tdee.toFixed(2)} kcal`;
    document.getElementById("macrosResult").innerText = `Macros: Proteína ${protein.toFixed(2)}g, Carboidratos ${carbs.toFixed(2)}g, Gordura ${fat.toFixed(2)}g`;

    // Exibir a seção de resultados
    document.getElementById("resultSection").style.display = "block";
}

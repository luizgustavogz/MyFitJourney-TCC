let currentPage = 'http://localhost:8080/products'

window.onload = async () => {
    try {
        await loadProducts(currentPage)
    } catch (error) {
        alert(error)
    }
}

async function loadProducts(url) {

    try {
        const response = await fetch(url);
        const responseJson = await response.json();
        console.log(responseJson)

        const accImgElements = document.getElementsByClassName('accessories-img'); // Seleciona todas as divs com a classe 'accessories-img'

        for (let i = 0; i < responseJson.products.length; i++) {
            const tagImg = document.createElement('img');
            tagImg.src = responseJson.products[i].url;

            if (i < accImgElements.length) {
                // Verifica se ainda há divs disponíveis para inserir as imagens
                accImgElements[i].appendChild(tagImg);
            }
        }


    } catch (error) {
        alert(error)
    }
}
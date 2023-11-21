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

        const accImgElements = document.getElementsByClassName('uk-card uk-card-body card-benefits cards-border'); // Seleciona todas as divs com a classe 'accessories-img'
        const nameProducts = document.getElementsByClassName('uk-card-title');
        const priceProducts = document.getElementsByClassName('products-price')

        for (let i = 0; i < responseJson.products.length; i++) {
            const tagImg = document.createElement('img');
            tagImg.className = 'productsImg';
            tagImg.src = responseJson.products[i].url;
            
            if (i < accImgElements.length) {
                // Verifica se ainda há divs disponíveis para inserir as imagens
                accImgElements[i].appendChild(tagImg);
                
            }

            if (i < nameProducts.length) {
                nameProducts[i].innerText = responseJson.products[i].name;
                nameProducts[i].style.textAlign = 'center';
                accImgElements[i].appendChild(nameProducts[i]);
            }

            if (i < priceProducts.length) {
                priceProducts[i].className = 'products-price';
                priceProducts[i].innerText = `R$ ${responseJson.products[i].price}`;
                priceProducts[i].style.textAlign = 'center';
                accImgElements[i].appendChild(priceProducts[i]);
            }
        }

    } catch (error) {
        alert(error)
    }
}
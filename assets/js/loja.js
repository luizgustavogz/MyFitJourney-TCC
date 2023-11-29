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
        const carrinho = document.getElementById('carrinho');
        const priceProducts = document.getElementsByClassName('products-price');
        const total = document.getElementById('total_amount');
        let carrinhoTexto = '';

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

            if (i < accImgElements.length) {
                var link = document.createElement("a");
                accImgElements[i].appendChild(link);
                link.style.textAlign = 'center';
                link.style.display = 'flex';
                link.style.justifyContent = 'center';
                link.style.color = '#fff';
                link.style.textDecoration = 'underline'
                link.className = 'shoppingCart';
                link.innerText = 'Adicionar no carrinho';


                responseJson.products[i].quantity = 0;
                link.addEventListener("click", function () {
                    console.log(responseJson.products[i].name, responseJson.products[i].price)

                    // Incrementa a quantidade do produto
                    responseJson.products[i].quantity += 1;

                    // Atualiza o texto do carrinho
                    carrinhoTexto = responseJson.products.reduce((acumulador, produto) => {
                        if (produto.quantity > 0) {
                            acumulador += `${produto.name} (${produto.quantity}) <br>`;
                        }
                        return acumulador;
                    }, '');

                    // Atualiza a exibição do carrinho na tela
                    carrinho.style.fontSize = '13px';
                    carrinho.innerHTML = carrinhoTexto;

                    // Atualiza o total na tela
                    total.innerText = `R$ ${calcularTotal().toFixed(2)}`;
                });
            }
        }

        function calcularTotal() {
            return responseJson.products.reduce((acc, produto) => {
                // Garante que os valores sejam números válidos
                const price = parseFloat(produto.price) || 0;
                const quantity = parseInt(produto.quantity) || 0;
        
                return acc + (price * quantity);
            }, 0);
        }

    } catch (error) {
        alert(error)
    }
}
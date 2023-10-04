<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    <link rel="stylesheet" href="../assets/css/pagamento.css">
</head>
<body>

<div class="container">
    <form action="">
        <div class="row">
            <div class="col">
                <h3 class="title">Endereço de pagamento</h3>

                <div class="inputBox">
                    <span>Nome completo:</span>
                    <input type="text" placeholder="Exemplo da Silva Teste">
                </div>
                <div class="inputBox">
                    <span>E-mail:</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Endereço:</span>
                    <input type="text" placeholder="Rua Exemplo">
                </div>
                <div class="inputBox">
                    <span>Número:</span>
                    <input type="text" placeholder="Número">
                </div>
                <div class="inputBox">
                    <span>Bairro:</span>
                    <input type="text" placeholder="Bairro">
                </div>
                <div class="inputBox">
                    <span>Cidade:</span>
                    <input type="text" placeholder="São Paulo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado:</span>
                        <input type="text" placeholder="São Paulo">
                    </div>
                    <div class="inputBox">
                        <span>CEP:</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>
            </div>

            <div class="col">
                <h3 class="title">Pagamento</h3>
                <div class="inputBox">
                    <span>Cartões aceitos:</span>
                    <img src="../assets/img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nome no cartão:</span>
                    <input type="text" placeholder="Exemplo S. Teste">
                </div>
                <div class="inputBox">
                    <span>Número no cartão:</span>
                    <input type="text" placeholder="1111 2222 3333 4444" maxlength="19">                    
                </div>
                <div class="inputBox">
                    <span>CPF:</span>
                    <input type="text" placeholder="123.456.789-00" maxlength="14">
                </div>
                <span>Validade:</span>
                <div class="flex">
                    <div class="inputBox">                        
                        <input type="text" placeholder="Mês" min="1" max="12" maxlength="2">                        
                    </div>
                    <div class="inputBox">                        
                        <input type="text" placeholder="Ano" min="2000" max="2100" maxlength="4">
                    </div>                    
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>CVV:</span>
                        <input type="text" placeholder="123">
                    </div>
                </div>
            </div>
    
        </div>

        <input type="submit" value="Realizar pagamento" class="submit-btn">

    </form>

</div>    
    
</body>
</html>
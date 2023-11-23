// Obtenha o contexto do Canvas
function invertColors(canvasId, imagePath) {
    var canvas = document.getElementById(canvasId);
    var ctx = canvas.getContext('2d');

    // Carregue as imagens
    var img = new Image();
    img.src = imagePath;

    // Quando a imagem estiver carregada
    img.onload = function() {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height); // Desenhe a imagem no Canvas
    
        var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height); // Obtenha os dados dos pixels do Canvas
        var data = imageData.data;
    // Inverta as cores (exceto os pixels transparentes)
        for (var i = 0; i < data.length; i += 4) {
            if (data[i + 3] !== 0) {
                data[i] = 255 - data[i];
                data[i + 1] = 255 - data[i + 1];
                data[i + 2] = 255 - data[i + 2];
            }
        }
        
        ctx.putImageData(imageData, 0, 0); // Atualize os dados dos pixels no Canvas
    };
}

invertColors('canvas-resistencia', '../assets/img/img-wk-card-resistencia.png');
invertColors('canvas-forca', '../assets/img/img-wk-card-forca.png');
invertColors('canvas-hipertrofia', '../assets/img/img-wk-card-hipertrofia.png');

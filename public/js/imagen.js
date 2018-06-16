function tieneSoporteUserMedia(){
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia ||  navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}

function _getUserMedia(){
    return (navigator.getUserMedia || (navigator.mozGetUserMedia ||  navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

function showImage(){
    img= $('#imagen').val();
    var canvas_final = document.getElementById('foto_final');
    var context_final = canvas_final.getContext('2d');
    imageObj = new Image();
    imageObj.onload = function(){
        context_final.drawImage(imageObj,0,0,300,150);
    }
    imageObj.src = img;

    qrcode = document.getElementById('qrcodepng').src;

    $('#qrcode').val(qrcode);
}



$('#btn-subir-foto').on('click', function(e){ 
    e.preventDefault();
    $('#fotografia').modal('show');

    if (tieneSoporteUserMedia()) {
        _getUserMedia(
            {video: true},
            function (stream) {
                console.log("Permiso concedido");

                var video = document.getElementById("video");
                video.srcObject = stream;
                video.play();

            }, function (error) {
                console.log("Permiso denegado o error: ", error);
        });
    } else {
        alert("Lo siento. Tu navegador no soporta esta característica");
    }

});

$('#btn-guardar-imagen').on('click', function(e){ 
    e.preventDefault();
    $('#imagen').val(sessionStorage.foto_base);

    var canvas_final = document.getElementById('foto_final');
    var context_final = canvas_final.getContext('2d');

    imageObj = new Image();
    imageObj.onload = function(){
        context_final.drawImage(imageObj,0,0,300,150);
    }
    imageObj.src = sessionStorage.foto_base;
    
    $('#fotografia').modal('hide');
});

canvas = document.getElementById("canvas"),
boton = document.getElementById("tomar"),
estado = document.getElementById("estado");

$('#tomar').on('click', function(e){ 
    e.preventDefault();

    //Pausar reproducción
    video.pause();
 
    //Obtener contexto del canvas y dibujar sobre él
    var contexto = canvas.getContext("2d");
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    contexto.drawImage(video, 0, 0, canvas.width, canvas.height);
    
    var foto = canvas.toDataURL(); //Esta es la foto, en base 64
    sessionStorage.setItem('foto_base', foto);
    sessionStorage.setItem('ancho',  canvas.width);
    sessionStorage.setItem('alto', canvas.height);

    //alert(foto);
    /*$estado.innerHTML = "Enviando foto. Por favor, espera...";
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./guardar_foto.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(encodeURIComponent(foto)); //Codificar y enviar
 
    xhr.onreadystatechange = function() {
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
            console.log("La foto fue enviada correctamente");
            $estado.innerHTML = "Foto guardada con éxito. Puedes verla <a target='_blank' href='./" + xhr.responseText + "'> aquí</a>";
        }
    }*/
 
    //Reanudar reproducción
    video.play();
    
});
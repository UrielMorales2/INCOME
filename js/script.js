$(document).ready(function(){
    $('#btnSend').click(function(){
        var errores = '';

        // Validando
        if( $('#names').val() == ''){
            errores += '<P><i class="fa-solid fa-x"></i> Ingresa un nombre</p>';
            $('#names').css("border-bottom-color", "#F14B4B")
            $('#nom').css("color", "#F14B4B")
        }else{
            $('#names').css("border-bottom-color", "#d1d1d1")
            $('#nom').css("color", "black")
        }

        if( $('#email').val() == ''){
            errores += '<P><i class="fa-solid fa-x"></i> Ingresa un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
            $('#correo').css("color", "#F14B4B")
        }else{
            $('#email').css("border-bottom-color", "#d1d1d1")
            $('#correo').css("color", "black")
        }

        if( $('#mmensaje').val() == ''){
            errores += '<P><i class="fa-solid fa-x"></i> Ingresa un mensaje</p>';
            $('#mmensaje').css("border-bottom-color", "#F14B4B")
            $('#mensag').css("color", "#F14B4B")
        }else{
            $('#mmensaje').css("border-bottom-color", "#d1d1d1")
            $('#mensag').css("color", "black")
        }
        
        
        if( $('#aceptar').prop('checked')){
            $('#acep').css("color", "black")
        }else{
            errores += '<P><i class="fa-solid fa-x"></i> Acepta que estas de acuerdo</p>';
            $('#acep').css("color", "#F14B4B")
        }
        
        // enviando mensaje
        if(errores == '' == false){
            var mensajemodal = '<div class="modalWrap">' +
                                    '<div class="mensaje_modal">' +
                                        '<h3 class="tect_modal">Debe de llenar estos campos</h3>'+
                                        errores+
                                        ' <span id="btnClose" >Cerrar</span>' + 
                                    '</div>'+
                                '</div>'

        $('body').append(mensajemodal); 
        }



        // cerrando modal
        $('#btnClose').click(function(){
            $('.modalWrap').remove();
        })

    });

})

$(document).ready(function(){

    //Scroll Elementos Menu
    var quienesSomos = $('#somos').offset().top,
        servicios = $('#servicios').offset().top,
        contacto = $('#contacto').offset().top;
    
    //Boton Quienes Somos
    $('#btn-quienes-somos').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: quienesSomos - 30
        },500);
    });

    //Boton Nuestro Servicios
    $('#btn-servicios').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: servicios
        },500);
    });

  
    //Boton Contacto
    $('#btn-contacto').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: contacto
        },500);
    });

})
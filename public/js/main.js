var base = location.protocol+'//'+location.host;
var route = document.getElementsByName('routeName')[0].getAttribute('content');

function copyToClipBoard(id) {

    var content = document.getElementById(id);
    navigator.clipboard.writeText(content.innerHTML);

    // var inputFalso = document.createElement("input");
    // inputFalso.setAttribute("value", content.innerHTML);
    // document.body.appendChild(inputFalso);
    // inputFalso.select();
    // document.execCommand("copy");
    // document.body.removeChild(inputFalso);
    // // document.getElementById(id + '_i').setAttribute('title', 'Copiado');
    // // document.getElementById(id + '_i').setAttribute('data-bs-original-title', 'Copiado');
    // // document.getElementById(id + '_i').setAttribute('aria-label', 'Copiado');
    alert("Copiado al portapapeles");
}

function copyToClickBoard() {
    var $temp = $("<textarea>");
    $("body").append($temp);
    var html = $('#copy-text').html();
    html = html.replace(/<br>/g, "\n"); // or \r\n
    html = html.replace(/<span[^>]*>/g, "");
    html = html.replace(/<\/span>/g, "");
    console.log(html);
    //$temp.val(html).select();
    //document.execCommand("copy");
    navigator.clipboard.writeText(html)
        .then(() => {
        console.log("Text copied to clipboard...")
    })
        .catch(err => {
        console.log('Something went wrong', err);
    })
    $temp.remove();
}

function copyToClickBoard0(){
    var content = document.getElementById('copy-text').innerHTML;
    //var brRegex = /<br\s*[\/]?>/gi;
    //content.replace(brRegex, "\r\n");
    content.replace('<br>', '\n');
    console.log(content);

    navigator.clipboard.writeText(content)
        .then(() => {
        console.log("Text copied to clipboard...")
    })
        .catch(err => {
        console.log('Something went wrong', err);
    })
 
}

$(document).ready(function(){

    AOS.init();

    $('[data-bs-toggle="tooltip"]').tooltip(); 

    $("input[name=telephone]").bind("change keyup input", function() {
        var position = this.selectionStart - 1;
        var fixed = this.value.replace(/[^0-9]/g, "");
    
        if (this.value !== fixed) {
          this.value = fixed;
          this.selectionStart = position;
          this.selectionEnd = position;
        }
    });

    $('.focus-form').on('click', function(){
        $('.fullname').focus();
    });

    $('form').submit(function (event) {
        if ($(this).hasClass('submitted')) {
            event.preventDefault();
        }
        else {
            //$(this).find(':submit').html('Se está enviando la cotización ...');
            $(this).addClass('submitted');
        }
      });

    $('#carousel-slider').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        responsive: {
            0: {
            items: 1,
            nav: false,
            },
            768: {
            items: 1,
            nav: false,
            },
            900: {
            items: 1,
            nav: false,
            dots: true,
            }
        }
    });
    
    $('#carousel-header .owl-next').html('<img src="' + base + '/images/arrow-right.png">');
    $('#carousel-header .owl-prev').html('<img src="' + base + '/images/arrow-left.png">');
})
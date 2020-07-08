//identificar o clique do menu
//verificar o item que foi clicado e fazer referêencia com o alvo
//verificar a distancia eentre o alvo e o topo
//animar o scroll até o alvo

$('nav a').click(function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top,
        menuHeight = $('nav').innerHeight();

    $('html, body').animate({
        scrollTop: targetOffset - menuHeight
    }, 500);
});

$('#mobile-nav a').click(function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top,
        menuHeight = $('nav').innerHeight();

    $('html, body').animate({
        scrollTop: targetOffset - menuHeight
    }, 500);
});


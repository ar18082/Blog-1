let xhr = new XMLHttpRequest();
xhr.open(
    'GET',
    'det_article/?id=10&direction=up'
)

xhr.send(null);

xhr.onreadystatechange = function(){
    switch (xhr.readyState){
        case xhr.LOADING:
            console.log( " les données en cours de réception")
        break;
        case xhr.DONE:
            switch(xhr.status){
                case 200:
                    console.log(`${xhr.responseText}`);
                break;
                case 404:
                    console.error(" ressource pas trouvée");
            }
        break;
    }
}


/*
var $container = $('.js-vote-arrows');
$container.find('a').on('click', function (e) {
    e.preventDefault();
    var $link = $(e.currentTarget);

    $.ajax({
        url: '/article/10/vote/' + $link.data('direction'),
        method: 'GET'
    }).then(function (data) {
        $container.find('.js-vote-total').text(data.votes);
    });     

   
});
/*
var $container = $('.js-vote-arrows');
$container.find('a').on('click', function (e) {
    $.ajax({
        url: '/article/10/vote/' + $link.data('direction'),
        method: 'GET',
        dataType: "json"
    })

    //Lors d'un clic sur le div...
    $(".js-vote-arrows").click(function () {
        //...On inverse les classes de p
        $("p").toggleClass("afficher cacher");
        //Les éléments avec .afficher seront visibles
        $(".afficher").show();
        //Les éléments avec .cacher seront cachés
        $(".cacher").hide();
    });

*/
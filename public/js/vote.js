/*let xhr = new XMLHttpRequest();
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
}*/



var $container = $('.js-vote-arrows');
$container.find('a').on('click', function (e) {
    e.preventDefault();
    var $link = $(e.currentTarget);

    $.ajax({
        url: 'http://127.0.0.1/ProjetEcole/Framework_Symfony/Blog-1/public/index.php/10/vote/' + $link.data('direction'),
        method: 'GET'
    }).then(function (data) {

       
        $container.find('.js-vote-total').text(data.votes);
    });     

    
});

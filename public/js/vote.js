let xhr = new XMLHttpRequest();
xhr.open(
    'GET',
    'det_article/ '
)

xhr.send(null);

xhr.onreadystatechange = function () {
    switch (xhr.readyState) {
        case xhr.LOADING:
            console.log("Données en cours de réception");
            break;
        case xhr.DONE:
            console.log("Données bien reçues");
            break;
    }
}
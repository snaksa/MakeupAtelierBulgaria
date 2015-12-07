function GetBasketProducts() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var response = xmlhttp.responseText;
            if (response.length == 0) {
                document.getElementById("basketDiv").innerHTML = "<center>Няма продукти в кошницата</center>";
            }
            else {
                document.getElementById("basketDiv").innerHTML = response;
            }
        }
    };
    xmlhttp.open("GET", "/getBasketProducts", true);
    xmlhttp.send();
}

function AddProductToBasket(id, model) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var response = xmlhttp.responseText;
            if (response.length == 0) {
            }
            else {
                GetBasketProducts();
            }
        }
    };
    xmlhttp.open("GET", "/addProductToBasket/" + id + "/" + model, true);
    xmlhttp.send();
}

function DecreaseProductFromBasket(id, model) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var response = xmlhttp.responseText;
            if (response.length == 0) {
            }
            else {
                GetBasketProducts();
            }
        }
    };
    xmlhttp.open("GET", "/decreaseProductFromBasket/" + id + '/' + model, true);
    xmlhttp.send();
}

function DeleteProductFromBasketAjax(id, model) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var response = xmlhttp.responseText;
            if (response.length == 0) {
            }
            else {
                GetBasketProducts();
            }
        }
    };
    xmlhttp.open("GET", "/deleteProductFromBasket/" + id + "/" + model, true);
    xmlhttp.send();
}

function GetOrderDetails(name, email, phone, city, address) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var response = xmlhttp.responseText;
            if (response.length == 0) {
            }
            else {
                document.getElementById("orderDetailsTables").innerHTML = response;
                $("#orderUserDetails").slideDown("slow");
            }
        }
    };
    xmlhttp.open("GET", "/getOrderDetailsTable/" + name + "/" + email + "/" + phone + "/" + city + "/" + address, true);
    xmlhttp.send();
}
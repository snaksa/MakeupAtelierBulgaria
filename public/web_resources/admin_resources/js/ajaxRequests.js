function GetSubcategories(str) {
    if (str == "0") {
        document.getElementById("subCategorySelect").innerHTML = "<option id='0'>Няма подкатегория</option>";
        document.getElementById("subCategorySelect").disabled = true;
        return;
    }
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
                //disable the second drop down list
                document.getElementById("subCategorySelect").innerHTML = "<option id='0'>Няма подкатегория</option>";
                document.getElementById("subCategorySelect").disabled = true;
            }
            else {
                document.getElementById("subCategorySelect").innerHTML = response;
                document.getElementById("subCategorySelect").disabled = false;
            }
        }
    };
    xmlhttp.open("GET", "getSubcategories/" + str, true);
    xmlhttp.send();
}

function GetSubcategoriesWithSelect(str, sub) {
    if (str == "0") {
        document.getElementById("subCategorySelect").innerHTML = "<option id='0'>Няма подкатегория</option>";
        document.getElementById("subCategorySelect").disabled = true;
        return;
    }
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
                //disable the second drop down list
                document.getElementById("subCategorySelect").innerHTML = "<option id='0'>Няма подкатегория</option>";
                document.getElementById("subCategorySelect").disabled = true;
            }
            else {
                document.getElementById("subCategorySelect").innerHTML = response;
                document.getElementById("subCategorySelect").disabled = false;
            }
        }
    };
    xmlhttp.open("GET", "getSubcategoriesWithSelect/" + str + "/" + sub, true);
    xmlhttp.send();
}

function GetProducts() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (response.length == 0) {
                //no products found
            }
            else {
                document.getElementById("topProductsDiv").innerHTML = response;
            }
        }
    };
    var mainID = document.getElementById("mainCategories").value;
    var subID = document.getElementById("subCategorySelect").value;
    xmlhttp.open("GET", "indexTopProductsResult/" + mainID + "/" + subID, true);
    xmlhttp.send();
}

function GetVideoProducts() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (response.length == 0) {
                //no products found
            }
            else {
                document.getElementById("topProductsDiv").innerHTML = response;
            }
        }
    };
    var mainID = document.getElementById("mainCategories").value;
    var subID = document.getElementById("subCategorySelect").value;
    xmlhttp.open("GET", "videoTopProducts/" + mainID + "/" + subID, true);
    xmlhttp.send();
}

function GetProductsAsTable() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (response.length == 0) {
                //no products found
            }
            else {
                document.getElementById("productsByCategory").innerHTML = response;
            }
        }
    };
    var mainID = document.getElementById("mainCategories").value;
    var subID = document.getElementById("subCategorySelect").value;
    xmlhttp.open("GET", "getProductsByCategory/" + mainID + "/" + subID, true);
    xmlhttp.send();
}

//work for the top products shown on the index page
function DisplayProductsChoice(id) {

    document.getElementById("productToChange").innerHTML = id;
    document.getElementById("productsWindow").style.visibility = "visible";
}

//work for the top products shown on the index page
function ChooseProduct(id) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            location.reload();
        }
    };

    var oldID = document.getElementById("productToChange").innerHTML;
    var newID = id;
    xmlhttp.open("GET", "updateTopProduct/" + oldID + "/" + newID, true);
    xmlhttp.send();
}

function CloseProductChoiceDiv() {
    document.getElementById("productsWindow").style.visibility = "hidden";
}

//work for the top products by category in category_top_products page
function DisplayTopProducts(id) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (response.length == 0) {
                //no products found
            }
            else {
                document.getElementById("topProducts").innerHTML = response;
            }
        }
    };
    var mainID = document.getElementById("mainCategories").value;
    var subID = document.getElementById("subCategorySelect").value;
    xmlhttp.open("GET", "getTopProductsByCategory/" + mainID + "/" + subID, true);
    xmlhttp.send();
}

//work for the top products shown on the index page
function DisplayTopProductsChoice(id) {
    document.getElementById("productToChange").innerHTML = id;
    document.getElementById("productsWindow").style.visibility = "visible";
    ChooseTopProductToChange();
}

//work for the top products shown on the index page
function ChooseTopProductToChange() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("topProductsChoiceDiv").innerHTML = response;
        }
    };

    var mainID = document.getElementById("mainCategories").value;
    var subID = document.getElementById("subCategorySelect").value;
    xmlhttp.open("GET", "topProductsResult/" + mainID + "/" + subID, true);
    xmlhttp.send();
}

//work for the top products shown on the index page
function ChooseTopProduct(id) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        var response = xmlhttp.responseText;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //location.reload();
            document.getElementById("SubmitButton").click();
            document.getElementById("productsWindow").style.visibility = "hidden";
        }
    };

    var oldID = document.getElementById("productToChange").innerHTML;
    var newID = id;
    xmlhttp.open("GET", "updateCategoryTopProduct/" + oldID + "/" + newID, true);
    xmlhttp.send();
}
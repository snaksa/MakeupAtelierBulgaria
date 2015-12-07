function SetHeight() {
    var myDiv = document.getElementById("slideshow");
    var val = myDiv.clientHeight;
    document.getElementById("header").setAttribute("style", "height:" + val + "px");
}

function ShowDetailsDiv(element) {
    document.getElementById("link" + element.id).setAttribute("style", "opacity:0.6");
    document.getElementById("product" + element.id).setAttribute("style", "visibility:visible");
}

function HideDetailsDiv(element) {
    document.getElementById("link" + element.id).setAttribute("style", "opacity:1");
    document.getElementById("product" + element.id).setAttribute("style", "visibility:hidden");
}

function ChangeMainImage(element) {
    var path = element.getAttribute("href");
    document.getElementById("mainImage").src = path;
}

function SetBorder(element) {
    var list = document.getElementsByClassName("modelImage");
    var list = document.getElementsByClassName("modelImage");
    for (var i = 0; i < list.length; i++) {
        list[i].setAttribute("style", "border:none");
    }
    document.getElementById(element.id).setAttribute("style", "border:1px solid #ccc");
    document.getElementById("modelName").textContent = element.id;
}

function DropDown(el) {
    this.dd = el;
    this.initEvents();
}
DropDown.prototype = {
    initEvents: function () {
        var obj = this;

        obj.dd.on('click', function (event) {
            $(this).toggleClass('active');
            event.stopPropagation();
        });
    }
}

$(function () {

    var dd = new DropDown($('#dd'));

    $(document).click(function () {
        // all dropdowns
        $('.wrapper-dropdown-5').removeClass('active');
    });

});


$(document).ready(function () {




    $("#Products").hover(function () {
        $("#ProductsSubMenu").fadeIn("fast");
        $("#mesDiv").fadeOut("fast");
    }, function () {
        $("#ProductsSubMenu").fadeOut("fast");
        $("#mesDiv").fadeIn("fast");
    });

    $("#Academy").hover(function () {
        $("#AcademySubMenu").fadeIn("fast");
    }, function () {
        $("#AcademySubMenu").fadeOut("fast");
    });

    $("#basketMenu").hover(function () {
        $("#basketDiv").slideDown();
    }, function () {
        $("#basketDiv").slideUp();
    });

    $("#header").hover(function () {
        $("#arrow1").fadeIn("fast");
        $("#arrow2").fadeIn("fast");
    }, function () {
        $("#arrow1").fadeOut("fast");
        $("#arrow2").fadeOut("fast");
    });


    $('#slideshow img:gt(0)').hide();

    var interval = setInterval(function () {
        $('#slideshow > img:first')
                .fadeOut(500)
                .next()
                .delay(502)
                .fadeIn(500)
                .end()
                .appendTo('#slideshow');
    }, 8000);

    function IntervalSet() {
        clearInterval(interval);
        interval = setInterval(function () {
            $('#slideshow > img:first')
                    .fadeOut(500)
                    .next()
                    .delay(502)
                    .fadeIn(500)
                    .end()
                    .appendTo('#slideshow');
        }, 8000);
    }

    $('.nextButton').on('click', function () {
        $('#slideshow :first-child').hide()
                .next('img').fadeIn().end().appendTo('#slideshow');
        IntervalSet();
    });

    $('.previousButton').on('click', function () {
        $('#slideshow :last-child').fadeIn()
                .insertBefore($('#slideshow :first-child').hide());
        IntervalSet();
    });

    var width = window.innerWidth;
    if (width < 1000 || width > 1400)
        document.getElementById("rightSidebar").setAttribute("style", "display:none");
});
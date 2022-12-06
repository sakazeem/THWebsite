$(document).ready(function () {
    $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("fa-eye-slash");
            $('#show_hide_password i').removeClass("fa-eye");
        } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("fa-eye-slash");
            $('#show_hide_password i').addClass("fa-eye");
        }
    });
    $("#show_hide_passwordB a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_passwordB input').attr("type") == "text") {
            $('#show_hide_passwordB input').attr('type', 'password');
            $('#show_hide_passwordB i').addClass("fa-eye-slash");
            $('#show_hide_passwordB i').removeClass("fa-eye");
        } else if ($('#show_hide_passwordB input').attr("type") == "password") {
            $('#show_hide_passwordB input').attr('type', 'text');
            $('#show_hide_passwordB i').removeClass("fa-eye-slash");
            $('#show_hide_passwordB i').addClass("fa-eye");
        }
    });


    $(function () {
        $('#startDate').datepicker({
            format: 'dd/mm/yyyy'
        });
        $('#startDateb').datepicker({
            format: 'dd/mm/yyyy'
        });
    });

});


$(function () {
    $('.float-nav, .main-nav a').on("click", function () {
        var isActive = $('.main-nav, .menu-btn').is('.active');
        $('.main-nav.active, .menu-btn.active').removeClass('active');
        $('.main-nav, .menu-btn').toggleClass('active', !isActive);
    });

});




var testimonial = $("#customers-testimonials");

testimonial.owlCarousel({
    loop: true,
    nav: true,
    center: true,
    items: 3,
    margin: 0,
    autoplay: true,
    dots: false,
    autoplayTimeout: 85000,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        1170: {
            items: 3
        }
    }
});


var latestblog = $("#latestblog");

latestblog.owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});


var featurePrd = $("#featurePrd");

featurePrd.owlCarousel({
    loop: true,
    autoplay:true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

var detailImgCarousel = $("#detailImgCarousel");

detailImgCarousel.owlCarousel({
    loop: true,
    margin:20,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1.2
        },
        767: {
            items: 2.2
        },
        1024: {
            items: 3.2
        }
    }
});


//for-auto-input-otp

let digitValidate = function (ele) {
    console.log(ele.value);
    ele.value = ele.value.replace(/[^0-9]/g, '');
}

let tabChange = function (val) {
    let ele = document.querySelectorAll('input');
    if (ele[val - 1].value != '') {
        ele[val].focus()
    } else if (ele[val - 1].value == '') {
        ele[val - 2].focus()
    }
}




//for-upload-file

$("form .fileUp").on("change", ".file-upload-field", function () {
    $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
});

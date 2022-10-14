$(window).on('load', function() { // makes sure the whole site is loaded 
    $(".pre-loader").fadeOut(10);
    $('body').delay(10).css({ 'overflow': 'visible' });
    $(window).scroll();
});

$(document).ready(function() {
    if ($('#script').length) $('#script').remove();
    if ($('.rating-star').length) $('.rating-star').rating();
    if ($('.selectpicker').length) $('.selectpicker').selectpicker();
    if ($("input[type='tel']").length) $("input[type='tel']").numeric();
    if ($('input[type="file"]').length) $('input[type="file"]').fileuploader();

    new WOW().init();
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-98174592-1', 'auto');
    ga('send', 'pageview');


    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '220523278362043');
    fbq('track', 'PageView');

    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85403866-1', 'auto');
    ga('send', 'pageview');
    //<!--Start of Tawk.to Script-->
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/57f847964a427d1574342649/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    //<!--End of Tawk.to Script-->

    $('[data-toggle="tooltip"],a[title]').tooltip();

    $(".modal").on("shown.bs.modal", function() {
        $('.modal').css({ "display": "flex !important", "align-items": "center" });
    })
    $(".modal").on("hidden.bs.modal", function() {
        $('.modal').css("display", "none !important");
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 200) {
            $('.page-home header').addClass('sticky');
            $('.page-home header .btn').addClass('btn-wesabi');
        } else {
            $('.page-home header').removeClass('sticky');
            $('.page-home header .btn').addClass('btn-wesabi');
        }
    });

    $('.counter-count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    $('.owl-carousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
    });
    $('.dropdown-menu').on('show.bs.dropdown', function() {
        alert("what is going on here?")
    })
    $('.bootstrap-select.btn-group .dropdown-menu li a').addClass("dropdown-item");
    //$('.package').selectpicker('val', [$(this).attr("data-value")]);

    $('.datepicker').datepicker({
        date: 'tomorrow',
        format: 'yyyy-mm-dd',
        startDate: ($(".datepicker.custom").length > 0 && $(".datepicker").attr("class").contains("full") ? "" : '+1d'),
        autoclose: true,
    }).datepicker("setDate", "tomorrow");

    $("input[type='tel'").numeric();

    $('.accordion a').click(function() {
        $(this).toggleClass('active');
        $(this).next('.content').slideToggle(400);
    });

    $('.selectpicker').on('change', function(event, clickedIndex, newValue, oldValue) {
        let selected = $(this).find("option:selected");
        let category = $(".selectpicker.category").find("option:selected").val();

        if ($(this).attr('name') == 'category') {
            if ($(selected).val() == "Home Cleaning and Laundry") {
                $('.cleaning-service').slideDown();
            } else {
                $('.cleaning-service').slideUp();
            }
            $.when(app.api.connect(app.origin + 'subcategories/category/' + $(selected).data('id'), { app: app }, true)).done(function(response) {
                console.log(response);
                if (response.status == 'success') {
                    sub = '';
                    $('.selectpicker.sub-category').html('');
                    $.each(response.data, function(i, item) {
                        console.log(item);
                        sub += "<option value='" + item.sub + "' data-id='" + item.id + "' data-price='" + item.price + "' data-tokens='" + item.sub + "'>" + item.sub + "</option>"
                    });
                    $(".selectpicker.sub-category").append(sub);
                    $('.selectpicker.sub-category').selectpicker('refresh');
                }
            });
        }
        if ($(this).attr('name') == "sub") {
            $(".alert.task-price-range").hide();
            if ($(selected).val() != "Others" & $(selected).data('price') != "" & $(selected).data('price') != "0" & $(selected).data('price') != "0.00") {
                $(".alert.task-price-range").show();
                $(".alert.task-price-range").html("Labour charge for " + $(selected).val() + " will be within the range of: <strong class='text-danger'>₦ <strong class='task-pricing'>" + $(selected).data('price') + "</strong></strong>");
            } else {
                $(".alert.task-price-range").show();
                $(".alert.task-price-range").html("Charges for this service will be given upon inspection by a WesabiPro!");
            }
        }
    });

    $('.login-signup').change(function() {
        let action = $(this).val();
        if (action == 'login-account') {
            $('.create-account').slideUp();
            $('.create-password').prop('name', '')
            $('.login-password').prop('name', 'password')
        } else {
            $('.login-account').slideUp();
            $('.login-password').prop('name', '')
            $('.create-password').prop('name', 'password')
        }
        $('.' + action).slideDown();
    });

    $.click($.class('wizard-footer btn-next'), function(e) {
        $(".preview-booking-mobile span").text($.input("mobile").val());
        $(".preview-booking-date span").text($.input("date").val());
        $(".preview-booking-description").text($.textarea("description").val());
        $(".preview-booking-service").text($(".selectpicker.category").find("option:selected").text());
        $(".preview-booking-name span").text($.input("firstname").val() + " " + $.input("lastname").val());
        $(".preview-booking-address").text($.input("address").val() + "  in  " + $.input("location").val());
    });

    // ((app.isMobile.any() === null) ? $(".whatsapp").prop("href", "https://web.whatsapp.com/send?phone=2349076464645") : $(".whatsapp").prop("href", "https://api.whatsapp.com/send?phone=2349076464645"));


    $(".submit-review").click(function() {
        var Review = app.rate(parseInt($(".modal.rate-now input:checked").val()), $(".modal.rate-now textarea[name='ProReview']").val(), parseInt($(this).attr("data-pro")), parseInt($(this).attr("data-trans")))
        if (Review == "Data uploaded successfully!") {
            alert("Review submited, thank you for using Wesabi!");
            $('.modal.rate-now .close').click();
            location.replace(app.origin + "pros/profile/" + parseInt($(this).attr("data-pro")) + "/" + parseInt($(this).attr("data-trans")) + "/")
        } else if (Review == "Data updated successfully!") {
            alert("Review updated, thank you for using Wesabi!");
            $('.modal.rate-now .close').click();
            location.replace(app.origin + "pros/profile/" + parseInt($(this).attr("data-pro")) + "/" + parseInt($(this).attr("data-trans")) + "/")
        } else {
            alert(Review);
        }
    });
});
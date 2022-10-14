if (typeof jQuery === "undefined") {
    throw new Error("AppJs requires jQuery");
}

'use strict';
var App = function(name, version, server, origin, developer, key) {
    this.key = key || "";
    this.name = name || "";
    this.version = version || "1.12";
    this.server = server || location.href + "/";
    this.origin = origin || location.href + "/";
    this.developer = developer || " Scnip";
};

$.extend(App.prototype, {
    key: function() { return this.key; },
    name: function() { return this.name; },
    server: function() { return this.server; },
    origin: function() { return this.origin; },
    version: function() { return this.version; },
    developer: function() { return this.developer; },
    welcome: function() {
        return "Hi, you're Welcome to " + this.name + ", " + this.version + ". App developed by: " + this.developer;
    },
    loader: {
        show: function() {
            $('body').addClass("show-spinner");
        },
        hide: function() {
            $('body').removeClass("show-spinner");
        }
    },
    initialize: function() {
        if (this.initialized) return;
        this.initialized = true;
        // this.timely.initialize();
        console.log("Welcome to " + this.name + " App ");
        console.log(this.name + " App " + this.version + " initialized!");
        console.log("App Developed by: " + this.developer);
    },
    initialized: false,
    api: {
        connect: function(url, options = { app: app, data: [], method: "GET", headers: {} }, load = false) {
            if (load) app.loader.show();
            options.headers = options.headers || { 'Content-Type': 'application/json;charset=utf-8', 'Authorization': 'Bearer:' + options.app.key };
            return $.ajax({
                url: url,
                method: options.method,
                headers: options.headers,
                data: JSON.stringify(options.data)
            }).done(function(data) {
                setTimeout(function() { app.loader.hide(); }, 500);
                return data;
            }).fail(function(data) {
                let response = JSON.parse(data['responseText']);
                console.log("API Connection failed: " + response.message);
                return response;
            });

            /*return fetch(url, {
                method: options.method,
                headers: options.headers,
                body: JSON.stringify(options.data)
            }).then(response => response.json()).then(resp => {
                console.log(resp);
                setTimeout(function () { app.loader.hide(); }, 500);
                return resp;
            }).catch(function (err) {
                return { error: err };
            });*/
        }
    },
    timely: {
        time: null,
        default: 1800000,
        resfresh: 300000,
        autoreresh: false,
        initialize: function() {
            console.log(app.logout);
            console.log(this.default);
            console.log(this.resfresh);
            console.log(app.name + ' idle timeout handler started');
            window.onload = this.reset(this.default, this.refresh);
            window.onmousemove = this.reset(this.default, this.refresh); // catches mouse movements
            window.onmousedown = this.reset(this.default, this.refresh); // catches mouse movements
            window.onclick = this.reset(this.default, this.refresh); // catches mouse clicks
            window.onscroll = this.reset(this.default, this.refresh); // catches scrolling
            window.onkeypress = this.reset(this.default, this.refresh); //catches keyboard actions
        },
        reset: function(time, refresh) {
            clearTimeout(this.time);
            this.time = setTimeout(this.logout(), time); // time is in milliseconds (1000 is 1 second)
            // if (this.autoreresh) this.time = setTimeout(this.reload(), resfresh); // time is in milliseconds (1000 is 1 second)
        },
        logout: function() {
            window.location.href = app.server + '/dashboard/logout'; //Adapt to actual logout script
        },
        reload: function() {
            window.location = self.location.href; //Reloads the current page
        }
    },
    switch: function(element) {
        $("#forms form").hide().slideUp(1000); //fadeOut('fast');
        $(element).show().slideDown(1000);
    },
    login: function(username, password, type) {
        let login = JSON.parse(this.api.connect(this.origin, { Login: true, username: username, password: password, type, type }));
        $('#text-login-msg').text(login.message);
        if (login.status == "success") {
            $('#login-msg').removeClass("bg-error").addClass("bg-success text-white");
            $('#icon-login-msg').removeClass("glyphicon-chevron-right text-danger").addClass("glyphicon-ok text-success");
            setTimeout(function() {
                location.href = location.href;
            }, 1500);
        } else {
            $('#login-msg').removeClass("bg-success text-success").addClass("bg-danger text-white");
            $('#icon-login-msg').removeClass("glyphicon-chevron-right glyphicon-ok text-success").addClass("glyphicon-remove text-danger");
        }
    },
    register: function(username, email, password, retype, type) {
        let register = JSON.parse(this.api.connect(this.origin, { Register: true, screenName: username, email: email, password: password, retype: retype, type: type }));
        $('#text-register-msg').text(register.message);
        if (register.status == "success") {
            $('#register-msg').removeClass("bg-error").addClass("bg-success text-white");
            $('#icon-register-msg').removeClass("glyphicon-chevron-right text-danger").addClass("glyphicon-ok text-success");
        } else {
            $('#register-msg').removeClass("bg-success text-success").addClass("bg-danger text-white");
            $('#icon-register-msg').removeClass("glyphicon-chevron-right glyphicon-ok text-success").addClass("glyphicon-remove text-danger");
        }
    },
    relogin: function(mobile, user) {
        $("#id-login-form input[name='VerifyMobile']").val(mobile)
        $("#id-login-form input[name='UserType'][value='" + user + "']").prop('checked', true);
        $("#id-login-form").submit();
        return this.api.connect(this.origin, { Action: 'VerifyMobile', Mobile: mobile, User: user });
    },
    filter: function(input, ul) {
        filter = $(input).val().toUpperCase();
        li = $(ul).find("li");
        for (i = 0; i < li.length; i++) {
            a = $(li[i]).find("a")[0];
            if ($(a).text().toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
        return;
    },
    device: {
        android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        blackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        ios: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            console.log("Page Viewed on " + navigator.userAgent + " Device ")
            return (this.android() || this.blackBerry() || this.ios() || this.opera() || this.windows());
        }
    },
    countdown: function(options) {
        var timer,
            instance = this,
            seconds = options.seconds || 10,
            updateStatus = options.onUpdateStatus || function() {},
            counterEnd = options.onCounterEnd || function() {};

        function decrementCounter() {
            updateStatus(seconds);
            if (seconds === 0) {
                counterEnd();
                instance.stop();
            }
            seconds--;
        }

        this.start = function() {
            clearInterval(timer);
            timer = 0;
            seconds = options.seconds;
            timer = setInterval(decrementCounter, 1000);
        };

        this.stop = function() {
            clearInterval(timer);
        };
    },
    validator: {
        booking_one: function() {
            // var booking_one = $('.modal#booking form.booking').validate({
            return $('form').validate({
                rules: {
                    pickup: {
                        required: true,
                        minlength: 6

                    },
                    destination: {
                        required: true,
                        minlength: 6
                    },
                    pickupDate: {
                        required: true
                    },
                    pickupTime: {
                        required: true
                    },
                    passenger: {
                        required: true
                    },
                    children: {
                        required: true
                    }
                },
            });
        },
    },
    validate: function(fields) {
        let error = true,
            total = $(fields).length;
        $(fields).each(function(index, item) {
            var required = $(this).prop("required");
            var empty = ($(this).val() == "" || $(this).val() == null)
            if ((required & empty) || ($(this).prop("type") == "email" && !$(this).validateEmail())) {
                $(this).addClass("error");
                $(this).focus();
                error = false;
                return false;
            } else {
                error = true;
                $(this).removeClass("error");
            }
        });
        return error;
    },
    alert: function(title, message, status) {
        $('.modal#' + status + ' h4').text(title);
        $('.modal#' + status + ' p').text(message);
        $('#' + status).modal('show');
    },
    map: {
        autocomplete: function(element = "autocomplete") {
            let that = this,
                details = {};
            google.maps.event.addDomListener(window, "load", function() {
                var input = document.getElementsByClassName(element);
                for (i = 0; i < input.length; i++) {
                    var places = new google.maps.places.Autocomplete(input[i]);
                    places.setComponentRestrictions({ "country": ["ng"] });
                    google.maps.event.addListener(places, "place_changed", function() {
                        let place = places.getPlace(),
                            location = [];
                        $.extend(details, { "geometry": place.geometry });
                        $.extend(details, { "formatted_address": place.formatted_address });
                        $.extend(details, { "address_components": place.address_components });
                        location.push(details);
                        let response = that.parse_place(location)
                        that.coords(response, input);
                    });
                }
            });
        },
        coords: function(place, element) {
            if ($("input[name='" + $(element).data("location") + "']").length >= 1) {
                $("input[name='" + $(element).data("location") + "']").val(JSON.stringify(place.location));
            }
        },
        parse_place: function(place) {
            let location = {};
            $.each(place, function(i, address_component) {
                let components = ((typeof address_component.place_id !== "undefined") ? address_component.address_components[0] : address_component.address_components);
                $.each(components, function(i, component) {
                    component = ((typeof address_component.place_id !== "undefined") ? components : components[i]);
                    $.each(component.types, function(j, type) {
                        switch (type) {
                            case 'locality':
                                $.extend(location, { "city": component.long_name });
                                break;
                            case 'administrative_area_level_1':
                                $.extend(location, { "state": component.long_name });
                                break;
                            case 'country':
                                $.extend(location, { "country": component.long_name });
                                $.extend(location, { "code": component.short_name });
                                break;
                        }
                    })
                })
                $.extend(location, { "address": address_component.formatted_address });
                $.extend(location, { "location": address_component.geometry.location });
            });
            return location;
        },
        routes: function(origin = [], destination = [], canvas = "map-canvas", otitle = "Pickup", dtitle = "Destination", olabel = "", dlabel = "") {
            let ori = new google.maps.LatLng(origin[0], origin[1]),
                des = new google.maps.LatLng(destination[0], destination[1]),
                options = {
                    zoom: 20,
                    center: ori
                },
                map = new google.maps.Map(document.getElementById(canvas), options),
                directionsService = new google.maps.DirectionsService,
                directionsDisplay = new google.maps.DirectionsRenderer({
                    map: map
                }),
                markerA = new google.maps.Marker({
                    position: ori,
                    title: otitle,
                    label: olabel,
                    map: map
                }),
                markerB = new google.maps.Marker({
                    position: des,
                    title: dtitle,
                    label: dlabel,
                    map: map
                });
            this.route(directionsService, directionsDisplay, ori, des);
        },
        route: function(directionsService, directionsDisplay, origin, destination) {
            directionsService.route({
                origin: origin,
                destination: destination,
                avoidTolls: true,
                avoidHighways: false,
                travelMode: google.maps.TravelMode.DRIVING
            }, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    var map = directionsDisplay.getMap();
                    directionsDisplay.setDirections(response);
                    map.setZoom(20);
                } else {
                    alert('Directions request failed due to ' + status);
                }
            });
        },
        current: function(position) {
            options = { enableHighAccuracy: false, timeout: 5000, maximumAge: Infinity };
            ((navigator.geolocation) ? navigator.geolocation.getCurrentPosition(this.position, this.error, options) : "");
        },
        error: function(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    console.log("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    console.log("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    console.log("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    console.log("An unknown error occurred.");
                    break;
            }
        },
        position: function(position) {
            lat = position.coords.latitude;
            long = position.coords.longitude;
            var latlong = new google.maps.LatLng(lat, long);
            var myOptions = {
                center: latlong,
                zoom: 17,
                mapTypeControl: true,
                navigationControlOptions: { style: google.maps.NavigationControlStyle.SMALL }
            }
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            var marker = new google.maps.Marker({ position: latlong, map: map, title: "You are here!" });
        },
        geo: function(lat, lng) {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(lat, lng);
            geocoder.geocode({ latLng: latlng }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        return parse_place(results);
                    } else {
                        console.log("No results found");
                    }
                } else {
                    console.log("Geocoder failed due to: " + status);
                }
            });
        }
    }
})

//var app = new App("John", 23);


//alert(app.origin);

//alert(app.welcome()); // "Hello, my name is John, 23 years old."

//alert(app.api.connect());d
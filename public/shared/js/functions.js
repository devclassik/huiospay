(function($) {
    $.extend({
        id: function(name) {
            return $("#" + name);
        },
        el: function(element) {
            var el = $('[name="' + element + '"],.' + element + ',#' + element + '');
            return $(el);
        },
        tag: function(el) {
            return $(el);
        },
        class: function(name) {
            return $("." + name.replaceAll(" ", " ."));
        },
        input: function(name) {
            let input = this;
            $.extend({
                check: function() {
                    return this.each(function() {
                        this.checked = true;
                    });
                },
                uncheck: function() {
                    return this.each(function() {
                        this.checked = false;
                    });
                },
                // class: function(name) {
                //     return this.each(function() {
                //         $(this).attr("class");
                //     });
                // }
            })
            return $('input[name="' + name + '"],button[name="' + name + '"],select[name="' + name + '"],textarea[name="' + name + '"]');
        },
        //a('Hello',function(e){alert(e+ ' world!');}); //=> Hello world     
        click: function(el, perform) {
            $(el).on('click', function(e) { perform.call(this, e) });
        },
        random: function() {
            var arr = []
            while (arr.length < 8) {
                var randomnumber = Math.ceil(Math.random() * 100)
                if (arr.indexOf(randomnumber) === -1) { arr.push(randomnumber) }
            }
            return arr.join("");
        },
        unique: function(lenght) {
            var unique = "",
                number = $.random();
            if (lenght == 0 || lenght == "") {
                unique = number;
            } else if (lenght > 0 && number.length > lenght) {
                unique = number.substr(1, lenght);
            } else if (lenght > 0 && number.length < lenght) {
                number = number + "" + $.random() + "" + $.random() + "" + $.random();
                unique = number.substr(1, lenght);
            }
            return unique;
        },
        select: function(name) {
            let select = this,
                $select = $('select[name="' + name + '"]');
            return $select;
        },
        textarea: function(name) {
            let textarea = this,
                $textarea = $('textarea[name="' + name + '"]');
            return $textarea;
        },
        isNumeric: function() {
            return !isNaN(parseFloat(this)) && isFinite(this);
        }
    });
})(jQuery);

jQuery.fn.extend({
    numeric: function() {
        $(this).keypress(function(event) {
            var charCode = (event.which) ? event.which : event.keyCode;
            if ((charCode != 8 && charCode < 48 || charCode > 57))
                return false;
            return true;
        })
    },
    block: function() {
        $(this).keydown(function() {
            return false;
        });
    },
    validateEmail: function(element) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test($(this).val());
    },
    allowDecical: function() {
        $(this).keydown(function(event) {
            var charCode = (event.which) ? event.which : event.keyCode;
            if (charCode != 8 && charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        });

    },
});

jQuery.fn.extend({
    check: function() {
        return this.each(function() {
            this.checked = true;
        });
    },
    uncheck: function() {
        return this.each(function() {
            this.checked = false;
        });
    }
});

function HtmlEntities(str) {
    //.replace(/&/g, '&amp;')
    return String(str).replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
}

function DecodeEntities(str) {
    //str=str.replace('&amp;', "&");
    str = str.replace('amp;', "");
    str = str.replace('&lt;', "<");
    str = str.replace('&gt;', ">");
    str = str.replace('&quot;', '"');
    str = str.replace('&#39;', "'");
    return str;
}

function DateDifference(startdate, enddate, type) {
    var difference = Math.round(new Date(startdate) - new Date(enddate));
    var seconds = difference / 1000;
    var minutes = seconds / 60;
    var hours = minutes / 60;
    var days = hours / 24;

    var value;
    if (type == "Milisecond") {
        value = difference;
    } else if (type == "Seconds") {
        value = seconds;
    } else if (type == "Minutes") {
        value = minutes;
    } else if (type == "Hours") {
        value = hours;
    } else if (type == "Days") {
        value = days;
    } else {
        value = difference;
    }

    return Math.round(value);
}

function CalculateTime(seconds) {
    var Time;
    var minutes = Math.round(seconds / 60);
    var hours = Math.round(minutes / 60);
    var days = Math.round(hours / 24);
    var weeks = Math.round(days / 7);
    var months = Math.round(days / 30);
    var years = Math.floor(days / 365);

    if (seconds == 1) {
        Time = seconds + " Second ago";
    } else if (seconds >= 1 & seconds <= 59) {
        Time = seconds + " Seconds ago";
    } else if (minutes == 1) {
        Time = minutes + " Minute ago";
    } else if (minutes >= 1 & minutes <= 59) {
        Time = minutes + " Minutes ago";
    } else if (hours == 1) {
        alert(hours)
        Time = hours + " Hour ago";
    } else if (hours >= 2 & hours <= 23) {
        Time = hours + " Hours ago";
    } else if (days == 1) {
        Time = "yesterday";
    } else if (days >= 2 & days <= 6) {
        Time = days + " days ago";
    } else if (weeks == 1) {
        Time = weeks + " week ago";
    } else if (weeks >= 2 & weeks <= 4) {
        Time = weeks + " weeks ago";
    } else if (months == 1) {
        Time = months + " month ago";
    } else if (months >= 2 & months < 12) {
        Time = months + " months ago";
    } else if (years == 1) {
        Time = years + " year ago";
    } else if (years >= 2) {
        Time = years + " years ago";
    }
    return Time;
};

function PreviewImage(id, previewer) {
    var FileReaders = new FileReader();
    FileReaders.readAsDataURL(document.getElementById(id).files[0]);
    FileReaders.onload = function(oFREvent) {
        document.getElementById(previewer).src = oFREvent.target.result;
    };
    $("#" + previewer).css({ "height": "190px" })
};

function SelectFile(parent, identity, name, type, previewer, location) {
    var inputs = $(document.createElement('input'));
    inputs.attr("type", "file");
    inputs.attr("id", identity);
    inputs.attr("name", name);
    inputs.attr("hidden", "hidden");

    if (type == "") {
        alert("Please pass file type!")
        return false;
    } else if (type == "file") {

    } else if (type == "image") {
        inputs.attr("accept", "image/*;capture=camera");
        inputs.attr("capture", "camera");
    } else if (type == "video") {
        inputs.attr("accept", "video/*;capture=camcorder");
        inputs.attr("capture", "camcorder");
    } else if (type == "audio") {
        inputs.attr("accept", "audio/*;capture=microphone");
        inputs.attr("capture", "microphone");
    }
    inputs.trigger('click');
    inputs.change(function(e) {
        var element = document.getElementById(identity);
        if (element) {
            element.remove();
        }
        $(parent).prepend(inputs);

        if (type == "image") {
            var file = e.target.files[0];
            if (file) {
                if (/^image\//i.test(file.type)) {
                    //readFile(file);
                } else {
                    alert('Please select a valid image!');
                    return;
                }
            }
        } else {

        }
        var FileReaders = new FileReader();
        FileReaders.readAsDataURL(document.getElementById(identity).files[0]);
        FileReaders.onload = function(oFREvent) {
            document.getElementById(previewer).src = oFREvent.target.result;
        };
        FileReaders.onloadend = function() {
            $(".processing").show().fadeIn('fast');
            if (type == "image") {
                if (location == "profile") {
                    //ProcessFile(FileReaders.result,file.type,location,name);
                    //SendFile(FileReaders.result,location,name);
                }
                if (location == "tasks") {

                    //alert(UploadTaskPicture(FileReaders.result,location,name));
                    //UploadTaskPicture(FileReaders.result,file.type,location,name);

                    var uploaded = name.split('Picture');
                    var uploadname;
                    for (var i = 0; i < uploaded.length; i++) {
                        uploadname = LowerCase(uploaded[0]) + "-picture-";
                        uploadname += LowerCase(uploaded[1]);
                    }
                    $("." + uploadname).attr("image-data", FileReaders.result);
                    $("." + uploadname).attr("src", FileReaders.result);
                    //$("."+uploadname).css("background","url("+FileReaders.result+") no-repeat 50% 50% / contain rgb(46,17,56)");
                    //$(".picture").css("background","url("+Application.Images+"profile/"+localStorage.getItem("UserProfilePic")+")no-repeat 50% 50% / contain rgb(46,17,56)")
                    //alert("Uploaded")
                    localStorage.setItem(name, FileReaders.result)
                    localStorage.setItem(name + "Location", location)
                    localStorage.setItem(name + "Name", name)
                }
            };
            $(".processing").hide().fadeOut('fast');
        }
        FileReaders.onerror = function() {
            alert('There was an error reading the file!');
        };

        return true;
    });

    //AlertMessage("Sorry, your android does not support picture upload!","Picture Upload Error","Close")

    return false;
}

function ReadFile(identity, type, location) {
    var SendFileResponse = "";
    var FileReaders = new FileReader();
    FileReaders.readAsDataURL(document.getElementById(identity).files[0]);

    FileReaders.onload = function(oFREvent) {

        //document.getElementById(previewer).src = oFREvent.target.result;
    };
    FileReaders.onloadend = function() {
            $(".processing").show().fadeIn('fast');
            if (type == "image") {
                $.when(SendFile(FileReaders.result, location)).done(function(SendFile) {
                    SendFileResponse = SendFile;
                })
            };
        }
        //setTimeout(function() { alert("Uploading Image, click okay to continue...") }, 5000);
    alert("Uploading Image, click okay to continue...")
    FileReaders.onerror = function() {
        SendFileResponse = 'There was an error reading the file!';
    };
    $(".processing").hide().fadeOut('fast');
    return SendFileResponse;
}

function SendFile(fileData, locations) {
    $(".processing").show().fadeIn('fast');
    var Files = $.ReturnData(Application.ServerAPI, { Action: "JustUpload", ImageData: fileData, Location: "medias/images/" + locations })
    $(".processing").hide().fadeOut('fast');
    return Files.toString();
};

function TimelyEvent(callback, parameters, time) {
    //callback.apply(this,parameters)
    function Call() {
        callback.apply(this, parameters)
    }
    setInterval(Call, time);
};

(function() {
    if (!navigator.userAgent.match(/(iPad|iPhone|iPod)/g)) return;

})();

function $_GET(key) {
    var parts = window.location.search.substr(1).split("&");
    var $_GET = {};
    for (var i = 0; i < parts.length; i++) {
        var temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);

    }
    return $_GET[key];
}

String.prototype.contains = function(char) {
    return (this.includes(char) ? true : false);
}
String.prototype.upper = function() {
    return this.replace(/^\w/, c => c.toUpperCase());
};
Object.assign(String.prototype, {
    upper() {
        return this.replace(/^\w/, c => c.toUpperCase());
    }
});
String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
};
String.prototype.titleCase = function() {
    var index, word, words, _i, _len;
    words = this.split(" ");
    for (index = _i = 0, _len = words.length; _i < _len; index = ++_i) {
        word = words[index].charAt(0).toUpperCase();
        words[index] = word + words[index].substr(1);
    }
    return words.join(" ");
};
String.prototype.lowercase = function() {
    str = this.toLowerCase().split(' ');
    if (str.length > 1) {
        for (var i = 0; i < str.length; i++) {
            str[i] = str[i].split('');
            str[i][0] = str[i][0].toLowerCase();
            str[i] = str[i].join('');
        }
        return str.join(' ');

    } else {
        return string[0].toLowerCase() + string.substring(1)
    }
};
String.prototype.dasherize = function() {
    return this.replace(/[A-Z]/g, function(char, index) {
        return (index !== 0 ? '-' : '') + char.toLowerCase();
    });
};
String.prototype.underscorize = function() {
    return this.replace(/[A-Z]/g, function(char, index) {
        return (index !== 0 ? '_' : '') + char.toLowerCase();
    });
};
Date.prototype.parseDate = function(date, defaultValue) {
    //    Date.prototype.parseDate = function(date, defaultValue) {
    if (!date) return (getDefaultValue());
    if (typeof(date) === 'date') return (date);
    if (typeof(date) === 'number') return (new Date(date));

    function getDefaultValue() {
        return ((typeof(defaultValue) === 'function') ? defaultValue(name) : defaultValue);
    }
    var results;
    if ((results = /(\d{4})[-\/\\](\d{1,2})[-\/\\](\d{1,2})/.exec(date))) {
        return (new Date(results[1], parseInt(results[2], 10) - 1, results[3]) || new Date(date) || getDefaultValue());
    }
    if ((results = /(\d{1,2})[-\/\\](\d{1,2})[-\/\\](\d{4})/.exec(date))) {
        date = new Date(results[3], parseInt(results[1], 10) - 1, results[2]) || new Date(date) || getDefaultValue();
    }
    return (new Date(date) || getDefaultValue());
}
Number.prototype.toInteger = function(thousandsSeparator) {
    var n, startAt, intLen;
    if (thousandsSeparator === null) thousandsSeparator = ",";
    n = this.round(0, true);
    intLen = n.length;
    if ((startAt = intLen % 3) == 0) startAt = 3;
    for (var i = 0, len = Math.ceil(intLen / 3) - 1; i < len; i++) n = n.insertAt(i * 4 + startAt, thousandsSeparator);
    return n;
}

Number.prototype.isNumeric = function() {
    return !isNaN(parseFloat(this)) && isFinite(this);
}

Number.prototype.thousand = function(decimal) {
    return this.toFixed((decimal === null) ? 2 : decimal).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}


Number.prototype.unique = function(lenght) {
    var Numbers = UniqueRandom();
    var Unique;
    if (lenght == 0 || lenght == "") {
        Unique = Numbers;
    } else if (lenght > 0 && Numbers.length > lenght) {
        Unique = Numbers.substr(1, lenght);
    } else if (lenght > 0 && Numbers.length < lenght) {
        Numbers = Numbers + "" + UniqueRandom() + "" + UniqueRandom() + "" + UniqueRandom();
        Unique = Numbers.substr(1, lenght);
    }
    return Unique;
}

String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

/*String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.split(search).join(replacement);
};*/


Number.prototype.toWords = function() {
    number = this;
    let word = '';
    const mad = ['', 'thousand', 'million', 'billion', 'trillion'];
    const tens = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
    const first = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ', 'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
    for (let i = 0; i < mad.length; i++) {
        let tempNumber = number % (100 * Math.pow(1000, i));
        if (Math.floor(tempNumber / Math.pow(1000, i)) !== 0) {
            if (Math.floor(tempNumber / Math.pow(1000, i)) < 20) {
                word = first[Math.floor(tempNumber / Math.pow(1000, i))] + mad[i] + ' ' + word;
            } else {
                word = tens[Math.floor(tempNumber / (10 * Math.pow(1000, i)))] + '-' + first[Math.floor(tempNumber / Math.pow(1000, i)) % 10] + mad[i] + ' ' + word;
            }
        }
        tempNumber = number % (Math.pow(1000, i + 1));
        if (Math.floor(tempNumber / (100 * Math.pow(1000, i))) !== 0) word = first[Math.floor(tempNumber / (100 * Math.pow(1000, i)))] + 'hundred ' + word;
    }
    return word;
}

Array.prototype.isArray = true;
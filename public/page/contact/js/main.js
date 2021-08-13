// Copyright (c) 2021 Sri Lakshmi Kanthan P
// 
// This software is released under the MIT License.
// https://opensource.org/licenses/MIT

/**
 * form submit handler
 */
function onSubmit(evt) {
    evt.preventDefault();

    var name   = $("#name");
    var email  = $("#email");
    var phone  = $("#phone");
    var query  = $("#query");
    var submit = $("#submit");
    var state  = true;

    let validEmail = (email) => {
        return (/^[^\s@]+@[^\s@]+\.[^\s@]+$/).test(email);
    }

    name.prop("disabled", true);
    email.prop("disabled", true);
    phone.prop("disabled", true);
    query.prop("disabled", true);
    submit.prop("disabled", true);

    if(name.val() === "") {
        name.addClass("is-invalid");
        state = false;
    } else {
        name.removeClass("is-invalid");
    }

    if(!validEmail(email.val())) {
        email.addClass("is-invalid");
        state = false;
    } else {
        email.removeClass("is-invalid");
    }

    if(phone.val() === "") {
        phone.addClass("is-invalid");
        state = false;
    } else {
        phone.removeClass("is-invalid");
    }

    if(query.val() === "") {
        query.addClass("is-invalid");
        state = false;
    } else {
        query.removeClass("is-invalid");
    }

    if(!state) {
        name.prop("disabled", false);
        email.prop("disabled", false);
        phone.prop("disabled", false);
        query.prop("disabled", false);
        submit.prop("disabled", false);
        return false;
    }

    var data = {
        name: name.val(),
        email: email.val(),
        phone: phone.val(),
        query: query.val()
    };

    $("#submit").val("Sending");

    $.ajax({
        method: "POST",
        data: data
    }).done(function(data) {
        data = JSON.parse(data);
        if(data.success) {
            $("#submit").val("Success");
        } else {
            if(!data.name) {
                name.addClass("is-invalid");
            } else {
                name.removeClass("is-invalid");
            }

            if(!data.email) {
                email.addClass("is-invalid");
            } else {
                email.removeClass("is-invalid");
            }

            if(!data.phone) {
                phone.addClass("is-invalid");
            } else {
                phone.removeClass("is-invalid");
            }

            if(!data.query) {
                query.addClass("is-invalid");
            } else {
                query.removeClass("is-invalid");
            }
            
            name.prop("disabled", false);
            email.prop("disabled", false);
            phone.prop("disabled", false);
            query.prop("disabled", false);
            submit.prop("disabled", false);

            $("#submit").val("Try! Again");
        }
    }).fail(function(data) {
        $("#submit").val("Try! Again");
    });
    
    return false;
}

/**
 * loads particles
 */
 function loadParticles() {
    function colorParticles(color) {
        let option = Object.assign(particlesJson, {});
        option.particles.color = color;
        return option;
    }

    function incDarkness(color, percent = 10) {
        let c = tinycolor(color).darken(percent).toRgbString();
        return c;
    }

    $("#particles-home").particles().init(
        colorParticles(
            incDarkness(
                $("#home").css("background-color")
            )
        )
    );
}


/**
 * main function
 */
function main() {
    $("#form").submit(onSubmit);
    loadParticles();
}
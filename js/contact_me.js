$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var gender=$("input[name=gender]").val();
            var location=$("input#location").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            let subject = "Volunteer Contact From CF Website: "+name;
            let body = "You have received a new message from your CF website form for volunteering.\n\n"+`Here are the details:\n\nName: ${name}\n\nEmail: ${email}\n\nGender:${gender} \n\n Location:${location}. \n\n Phone: ${phone}\n\nMessage:\n${message}`;

            window.open('mailto:jimmy.cherian@creatingfutures.in?subject='+subject+'&body='+body);
            //alert(name+" "+phone+" "+email+" "+message+" "+gender+" "+location);
            // $.ajax({
            //     url: "././mail/contact_me.php",
            //     type: "POST",
            //     data: {
            //         name: name,
            //         phone: phone,
            //         email: email,
            //         message: message,
            //         gender:gender,
            //         location:location
            //     },
            //     cache: false,
            //     success: function() {
            //         // Success message
            //         $('#success').html("<div class='alert alert-success'>");
            //         $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            //             .append("</button>");
            //         $('#success > .alert-success')
            //             .append("<strong>Your message has been sent. </strong>");
            //         $('#success > .alert-success')
            //             .append('</div>');

            //         //clear all fields
            //         $('#contactForm').trigger("reset");
            //     },
            //     error: function() {
            //         // Fail message
            //         $('#success').html("<div class='alert alert-danger'>");
            //         $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            //             .append("</button>");
            //         $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
            //         $('#success > .alert-danger').append('</div>');
            //         //clear all fields
            //         $('#contactForm').trigger("reset");
            //     },
            // })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
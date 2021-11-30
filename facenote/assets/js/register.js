$("#frmSubmit").validate({
    rules:{
        name: {
            required: true
        },
        email:{
            email: true,
            required: true
        },
        password:{
            required: true,
            minlength:6
        },
        confirm_password: {
            required: true,
            minlength: 6,
            equalTo: "#password"
        }
    },
    messages: {
        name: {
            required: "Name required."
        },
        email:{
            email:"Enter a valid email.",
            required:"Email required.",
        },
        password: {
            required: "Password required",
            minlength: "Please enter at least 6 characters."
        },
        confirm_password: {
            required:"Confirm password required.",
            minlength: "Please enter at least 6 characters.",
            equalTo: "Passwords does not match."
        }
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element.parent())
    },
    submitHandler: function(form){
        alert("submitted")
        // $.ajax({
        //     url: form.action,
        //     type: form.method,
        //     data: $(form).serialize(),
        //     success: function(response) {
        //         $('#answers').html(response);
        //     }            
        // });		
    }
});
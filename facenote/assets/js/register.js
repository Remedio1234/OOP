$("#frmSubmit").validate({
    rules:{
        name: {
            required: true
        },
        email:{
            email: true,
            required: true,
            remote: {
                url: "app/controller/RegisterController.php",
                type: "post",
                data: {_action: "check_email"}
            }
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
            remote: "Email address already exist!"
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
        toastr.options = {
            "closeButton": true,
            // "debug": false,
            // "newestOnTop": false,
            // "progressBar": true,
            // "preventDuplicates": true,
            // "onclick": null,
            // "showDuration": "100",
            // "hideDuration": "1000",
            // "timeOut": "5000",
            // "extendedTimeOut": "1000",
            // "showEasing": "swing",
            // "hideEasing": "linear",
            // "showMethod": "show",
            // "hideMethod": "hide"
        };

        // // for success - green box
        // toastr.success('Success messages');

        // // for errors - red box
        // toastr.error('errors messages');

        // // for warning - orange box
        // toastr.warning('warning messages');

        // // for info - blue box
        // toastr.info('info messages');
        
        $.ajax({
            url     : "app/controller/RegisterController.php",
            type    : "post",
            dataType:"json",
            data    : $(form).serialize(),
            success : function(data) {
                if(data.response == "success"){
                    $('#frmSubmit').trigger("reset");
                    toastr.success(data.message, "Message");
                }
                else 
                    toastr.error(data.message, "Message");
            }            
        });		
    }
});
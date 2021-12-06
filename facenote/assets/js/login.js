$("#frmSubmit").validate({
    rules:{
        email:{
            email: true,
            required: true,
        },
        password:{
            required: true
        },
    },
    messages: {
        email:{
            email:"Enter a valid email.",
            required:"Email required.",
        },
        password: {
            required: "Password required"
        }
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element.parent())
    },
    submitHandler: function(form){
        submitLogin(form);
    }
});

function submitLogin(formData){
    $.ajax({
        url     : "app/controller/LoginController.php",
        type    : "post",
        dataType:"json",
        data    : $(formData).serialize(),
        beforeSend:function(){
            $("#btnLogin").attr("disabled",true).text("Processing..")
        },
        success : function(data) {
            $("#btnLogin").attr("disabled",false).text("Sign in")
            if(data.response == "success"){
                toastr.success(data.message, "Message");
                setTimeout(() => {
                    window.location.href = "index.php"
                }, 1000);
            }
            else 
                toastr.error(data.message, "Message");
        }            
    });	
}
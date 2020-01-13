$(document).ready(function(){
    $.validator.addMethod("isAlpha", function(value) {
        return /^[A-Za-z0-9]*$/.test(value) // consists of only these
            && /[a-z]/.test(value) // has a lowercase letter
    });
    $(".filter-price").validate({
        rules: {
            from: {
                required: true,

            },
            to: {
                required: true,
            }
        },
        messages: {
            from : {
                required:"Veuillez introduire une designation",
            },
            to : {
              required :  "L'addresse est obligatoire",
            }
        },
    });
});
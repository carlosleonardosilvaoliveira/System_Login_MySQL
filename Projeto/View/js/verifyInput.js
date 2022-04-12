$(document).ready(function(){
    $('#myForm').validate({
        rules: {
            user: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            user: {
                required: "Campo vazio"
            },
            password: {
                required: "Campo vazio"
            }
        }
    });
});
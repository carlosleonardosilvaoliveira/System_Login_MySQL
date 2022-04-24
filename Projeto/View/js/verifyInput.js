/*$(document).ready(function(){
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
});*/

$(document).ready(function(){
    $("#acessar").submit(function(event){
        event.preventDefault();

        var username        = $("#user").val();
        var password        = $("#password").val();
        var dataString      = 'user='+username+'&password='+password;

        if($.trim(username).length>0 && $.trim(password).length>0){

            $.ajax({
                type:       "POST",
                url:        "./Auth/loginAuth.php",
                data:       dataString,
                cache:      false,
                success: function(data){
                    if(data){
                        window.location.href = "./View/painel.html";
                    }else{
                        $("#report").html("Usuário ou senha invalidos");
                    }
                }
            });
        }
        return false;
    });
});
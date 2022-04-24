    var data = { action: 'functionListar'};

    $.post("../App/Controller/EquipamentosController.php", data, function(response){
        if(response != ""){
            $("#conteudo").html(response);
        }else{
            alert("Algo deu errado!");
        }
    });
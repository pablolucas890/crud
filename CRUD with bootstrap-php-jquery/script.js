window.onload = initPage;

function initPage(){
    read_data();
}
function botao(){
    Swal.fire({
        icon: 'success',
        title: 'Boaaa...',
        text: 'Parece que o sweet alert está funcionando!',
        footer: '<a href>Agora use isso bastante</a>'
    })
}
function AdicionarComentario2(){
    (async () => {

        const { value: formValues } = await Swal.fire({
          title: 'Multiple inputs',
          html:
            '<input id="swal-input1" class="swal2-input">' +
            '<input id="swal-input2" class="swal2-input">',
          focusConfirm: false,
          preConfirm: () => {
            return []
          }
        })
            // Pega os valores dos inputs e coloca nas variáveis
        var nome = $('#swal-input1').val();
        var comentario = $('#swal-input2').val();
        if (formValues) {
                // Método post do Jquery
            $.post('create.php', {
                nome:nome,
                comentario:comentario //ultima variavel vai sem a virgula
            }, 
            function(resposta){
                // Valida a resposta
                if(resposta == 1){
                    //Limpa os inputs
                    alert_success('Cadastro realizado com sucesso!');
                }else {
                    alert_error(resposta);
                }
            });
        }
})()
}

function read_data() { //Carrega os dados das paginas para
    $( '#table' ).load( 'read.php' );
}

function abreModal() {
    $('input, textarea').val('');
    $('#modalInsert').modal('show');
}
function abreModalUpdate() {
    $('input, textarea').val('');
    $('#modalUpdate').modal('show');
}
function fechaModal() {
    $('#modalInsert').modal('hide');
    $('#modalUpdate').modal('hide');
}

function cadastrar() {
    
    // Pega os valores dos inputs e coloca nas variáveis
    var nome = $('#nome').val();
    var comentario = $('#comentario').val();
        
        // Método post do Jquery
    $.post('create.php', {
        nome:nome,
        comentario:comentario //ultima variavel vai sem a virgula
    }, 
function(resposta){
        // Valida a resposta
        if(resposta == 1){
            //Limpa os inputs
            alert_success('Cadastro realizado com sucesso!');
            fechaModal();
            read_data();
        }else {
            alert_error(resposta);
            read_data();
        }
});
}

function delete_confirmation(id){

    Swal.fire({
        title: 'Você tem certeza que deseja excluir?',
        text: "Isso não poderá ser desfeito no futuro",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, excluir isso!'
    })
    .then((result) => {
        if (result.value) {
        $.post('delete.php', {
            id:id
        }, 
        function(resposta){
            // Valida a resposta
            if(resposta == 1){			              
                alert_success('Excluido com sucesso!');
                read_data();
            }else {
                alert_error('Ocorreu um erro ao excluir!');
                read_data();
            }
        });
        }
    })
}
function delete_confirmation2(id){

    Swal.fire({
        title: 'Você tem certeza que deseja excluir?',
        text: "Isso não poderá ser desfeito no futuro",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, excluir isso!'
    })
    .then((result) => {
        if (result.value) {
        $.post('delete.php', {
            id:id
        }, 
        function(resposta){
            // Valida a resposta
            if(resposta == 1){			              
                alert_success('Excluido com sucesso!');
            }else {
                alert_error('Ocorreu um erro ao excluir!');
            }
        });
        }
    })
}

function modal_update(id){
    
        abreModalUpdate();
        var parametros = {
            id:id
        };
    $.ajax({
            url : "update.php",
            type : 'post',
            dataType: 'JSON',
            data : parametros,
            beforeSend : function(){
            //alert("Buscando dados...");
            }
    })
    .done(function(json){
        $('#idUpdate').val(json.id);
        $('#nomeUpdate').val(json.nome);	//coloca os dados do array no modal
        $('#comentarioUpdate').val(json.comentario);
    })
    .fail(function(jqXHR, textStatus, msg){
        alert(msg);
    }); 
}

function update() {

    // Pega os valores dos inputs e coloca nas variáveis
    var parametros = {
            id : $('#idUpdate').val(),
        nome : $('#nomeUpdate').val(),
        comentario : $('#comentarioUpdate').val()
        };
        
    $.ajax({
        url : "update2.php",
        type : 'post',
        dataType: 'html',
        data : parametros,
        beforeSend : function(){
            //alert("alterando comentario....");
        }
    })
    .done(function(resposta){
        fechaModal();
        read_data();
        if(resposta != null){
            alert_success("O comentario foi alterado com sucesso!");
        }else{
            alert_error("Ocorreu um erro ao alterar seu comentario!");
        }
    })
    .fail(function(jqXHR, textStatus, msg){
        alert_error("Ocorreu o seguinte erro na chamada Ajax: "+msg);
    }); 
}

function alert_error(mensagem){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: mensagem,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.value) {
            window.location.href = '';
        }
    })
}

function alert_success(mensagem){
    Swal.fire({
        icon: 'success',
        title: 'Sucesso',
        text: mensagem,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.value) {
            window.location.href = '';
        }
    })
}
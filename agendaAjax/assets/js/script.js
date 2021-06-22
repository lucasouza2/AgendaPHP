$('.telaEditar').hide();

$('#form1').submit(function (e) {
    e.preventDefault();

    var u_name = $('#name').val();
    var u_telefone = $('#telefone').val();
    var u_email = $('#email').val();
    var u_endereco = $('#endereco').val();


    $.ajax({
        url: 'http://localhost/agendaAjax/inserir.php',
        method: 'POST',
        data: { name: u_name, telefone: u_telefone, email: u_email, endereco: u_endereco },
        dataType: 'json'
    }).done(function (result) {
        $('#name').val('');
        $('#telefone').val('');
        $('#email').val('');
        $('#endereco').val('');
        console.log(result);
        getComments();
    });
});

function geteditar(contato) {
    $('.telaEditar').show();
    console.log(contato);
    
    $('#name_editar').val(contato.nome);
    $('#telefone_editar').val(contato.telefone);
    $('#email_editar').val(contato.email);
    $('#endereco_editar').val(contato.endereco);


};

function getdelete(id) {
    console.log('deletar');
    $.ajax({
        url: 'http://localhost/agendaAjax/delete.php',
        method: 'POST',
        data: { id: id },
        dataType: 'json'
    }).done(function (result) {
        console.log(result);
        getComments();
    });


};

function getComments() {
    $.ajax({
        url: 'http://localhost/agendaAjax/selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (result) {
        console.log(result.length);
        console.log('AngeloGOD');
        $('.box_comment').text(" ")
        if(result == 'Nenhum contato encontrado'){
            $('.box_comment').prepend('<h1>nao possui contatos</h1>')
            return
        }
        if (result.length == 0) {
            $('.box_comment').prepend('<h1>nao possui contatos</h1>')
        } else {
            for (var i = 0; i < result.length; i++) {
                console.log(result[i]);
                $('.box_comment').prepend(
                    `
                    <div class="b_comm">
                        <h4>${result[i].nome} </h4>
                        <p>${result[i].telefone}</p>
                        <p>${result[i].email}</p>
                        <p>${result[i].endereco}</p>
                    </div>
                    <button onclick="geteditar('${result[i]}')">editar</button>
                    <button onclick = "getdelete('${result[i].id}')">deletar</button>
                    `
                );
            }
        }
    });
}





getComments();
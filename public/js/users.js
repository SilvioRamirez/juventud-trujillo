$(document).ready(function(){

    t_users = $('#t_users').DataTable({
        processing: true,
        serverSide: true,
        ajax: "users/datatable",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'cedula', name: 'cedula' },
            { data: 'telefono', name: 'telefono' },
            { data: 'email', name: 'email' },
        ]
    });

    $('#t_users tbody').on( 'click', 'tr', function () {
        var data = t_users.row(this).data() ;
        $('#modal-opciones-user').modal('show');
        $('#title-opciones-user').html('Seleccione una opción para: <strong>'+data['name']+'</strong>');
        sessionStorage.setItem('userId', data['id']);
        $('#footerOptions').html('<a href="users/edit/'+sessionStorage.userId+'" class="btn btn-info"><i class="fa fa-edit"></i> Editar</a>'+
           '<a href="users/delete/'+sessionStorage.userId+'" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Eliminar</a>'+
           '<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>');
    });

});
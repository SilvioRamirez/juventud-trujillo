$(document).ready(function(){

    t_roles = $('#t_roles').DataTable({
        processing: true,
        serverSide: true,
        ajax: "roles/datatable",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'slug', name: 'slug' },
            { data: 'description', name: 'description' },
        ]
    });

    $('#t_roles tbody').on( 'click', 'tr', function () {
        var data = t_roles.row(this).data() ;
        $('#modal-opciones-role').modal('show');
        $('#title-opciones-role').html('Seleccione una opción para: <strong>'+data['name']+'</strong>');
        sessionStorage.setItem('roleId', data['id']);
        $('#footerOptions').html('<a href="roles/edit/'+sessionStorage.roleId+'" class="btn btn-info"><i class="fa fa-edit"></i> Editar</a>'+
           '<a href="roles/delete/'+sessionStorage.roleId+'" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Eliminar</a>'+
           '<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>');
    });

});
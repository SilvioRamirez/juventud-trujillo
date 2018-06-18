$(document).ready(function(){

    t_users = $('#t_users').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/users/list",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'cedula', name: 'cedula' },
            { data: 'telefono', name: 'telefono' },
            { data: 'email', name: 'email' },
        ]
    });

});
$(document).ready(function(){

    t_personas = $('#t_personas').DataTable({        
        processing: true,
        serverSide: true,        
        ajax: "/personas/list/data",
        columns: [
            { data: 'nombres' },
            { data: 'cedula' },
            { data: 'telefono_1' },
            { data: 'telefono_2' },
            { data: 'municipio' },
            { data: 'parroquia'  },
            { data: 'created_at' },        
        ],
    });

});
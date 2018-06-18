$.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
    icons: {
        time: 'fa fa-clock',
        date: 'fa fa-calendar',
        up: 'fa fa-arrow-up',
        down: 'fa fa-arrow-down',
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-calendar-check-o',
        clear: 'fa fa-trash',
        close: 'fa fa-times'
}});

$.extend( true, $.fn.dataTable.defaults, {
    dom: "<'row'<'col-sm-12 col-md-4'l> <'col-sm-4 text-center'B> <'col-sm-12 col-md-4'f>>" 
        + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
    lengthMenu: [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "Todo"]],
    buttons: [
        { extend: 'copy', text:'<i class="fa fa-copy"></i> Copiar', className:'btn btn-primary btn-sm' },
        { extend: 'excel', text:'<i class="fa fa-file-excel"></i> Excel', className:'btn btn-primary btn-sm' },
        { extend: 'csv', text:'<i class="fa fa-database"></i> CSV', className:'btn btn-primary btn-sm' },
        { extend: 'pdf', text:'<i class="fa fa-file-pdf"></i> PDF', className:'btn btn-primary btn-sm' },
        { extend: 'colvis', text:'<i class="fa fa-eye"></i> Visibilidad', className:'btn btn-primary btn-sm' },
    ],
    language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ Registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar: ",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "oPaginate": {
                "sNext": '<i class="fa fa-forward"></i>',
                "sPrevious": '<i class="fa fa-backward"></i>',
                "sFirst": '<i class="fa fa-step-backward"></i>',
                "sLast": '<i class="fa fa-step-forward"></i>' 
            },
        },
});
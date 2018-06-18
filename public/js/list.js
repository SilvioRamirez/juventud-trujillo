function t_personas(){
    cedula = $('#cedula').val();

    $('#t_personas').DataTable().destroy();
    var t_personas= $('#t_personas').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/familiars/list/" + cedula,
        columns: [
            { data: 'nombres' },
            { data: 'cedula' },
            { data: 'edad' },
            { data: 'parentezco'  },
            { data: 'instruccion' },
            { data: 'municipio' },
            { data: 'parroquia' },
            { data: 'direccion' },
            { data: 'centro_votacion' },
            { data: 'beneficiario_mision' },
        ],
    });

    $('#t_personas tbody').on( 'click', 'tr', function () {
        var data = t_personas.row(this).data() ;
        $('#modal-opciones-familiar').modal('show');
        $('#title-opciones-familiar').html('Seleccione una opción para: <strong>'+data['nombres']+'</strong>');
        sessionStorage.setItem('editId', data['id']);
        sessionStorage.setItem('editNombres', data['nombres']);
        sessionStorage.setItem('editCedula', data['cedula']);
        sessionStorage.setItem('editEdad', data['edad']);
        sessionStorage.setItem('editParentezco', data['parentezco']);
        sessionStorage.setItem('editInstruccion', data['instruccion']);
        sessionStorage.setItem('editMunicipio', data['municipio']);
        sessionStorage.setItem('editParroquia', data['parroquia']);
        sessionStorage.setItem('editDireccion', data['direccion']);
        sessionStorage.setItem('editCentroVotacion', data['centro_votacion']);
        sessionStorage.setItem('editBeneficiarioMision', data['beneficiario_mision']);
    });
}
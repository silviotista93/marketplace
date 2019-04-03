let table = null;


const showInfoUsers = function(e){
    const user = JSON.parse($(this).attr("data-info"));
    let roles = "";
    user.roles.map(function (rol){
        roles += `<li style="font-size: 13px;"><i class="fa fa-check mg-r-5 tx-success"></i>${rol.name}</li>`;
    });
    modalInfo.find("#user__roles").html(roles);
    let userDato = 
    `<h3 class="tx-normal tx-roboto lh-3 mg-b-10" style="color: #0c0c0d">${user.name} ${user.last_name}</h3>
    <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Información del Usuario</h6>
    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Telefono 1</label>
    <p class="tx-info mg-b-25">${user.phone_1}</p>
    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Telefono 2</label>
    <p class="tx-info mg-b-25">${user.phone_2}</p>
    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email</label>
    <p class="tx-inverse mg-b-25">${user.email}</p>`;
    userDatos.innerHTML = userDato;
}

const loadTable = function () {
    if (table !== null) {
        table.destroy();
    }
    table = $('#users-list').DataTable({
        responsive: true,
        ajax: {
            url: urlUsersList,
            method: "POST",
            data: {}
        },
        columns: [
            {
                data: 'name',
                defaultContent: '<span class="label label-danger text-center" style="color:red !important">N/A</span>'
            },
            {
                data: 'last_name',
                defaultContent: '<span class="label label-danger text-center" style="color:red !important">N/A</span>'
            },
            {
                data: 'email',
                defaultContent: '<span class="label label-danger text-center" style="color:red !important">N/A</span>'
            },
            {
                data: 'phone_1',
                defaultContent: '<span class="label label-danger text-center" style="color:red !important">N/A</span>'
            },
            {
                data: 'status',
                render: function (data) {
                    if (data === activeUsers) {
                        return `<span class="square-8 bg-success mg-r-5 rounded-circle"></span>${data}`;
                    }
                    return `<span class="square-8 bg-danger mg-r-5 rounded-circle"></span>${data}`;
                }
            },
            {
                render: function (data, status, user) {
                    return `
                    <a href="#" data-info='${JSON.stringify(user)}'
                        class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10 users__info--info"
                        data-toggle="modal" data-target="#modal_info_profile">
                        <div><i class="fas fa-info"></i></div>
                    </a>`;
                }
            }
        ],
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "search": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
};

const init =function (){
    const modalInfo = $("#modal_info_profile");
    loadTable();
    $("#users-list").on("click", '.users__info--info', showInfoUsers);
}

init();
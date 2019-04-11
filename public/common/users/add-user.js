const frmGuardarUsuario = $("#frmGuardarUsuario");

frmGuardarUsuario.submit(function (e){
    e.preventDefault();
    const url = $(this).attr("action");
    const data = $(this).serialize();
    const success = function (e){
        frmGuardarUsuario[0].reset();
    }
    sendForm(url, data, success)
});

const frmUpdateUser = $("#frmUpdateUser");

frmUpdateUser.submit(function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmUpdateUser")[0]);
    const success = function (e) {
        frmUpdateUser[0].reset();
    }
    ajaxUpload(url, data, success);
});
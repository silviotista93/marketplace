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
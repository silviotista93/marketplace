$(document).on('click','#aceptar',function () {

    const frmRequest = $("#frmRequest");
    frmRequest.submit(function (e) {
        e.preventDefault();
        const url = "/request-accepted/";
        var data = new FormData($("#frmRequest")[0]);
        const success = function (e) {
            frmRequest[0].reset();
        }
       
        ajaxUpload(url, data, success);
    });
    
    


});


$(document).on('click','#rechazar',function () {
    const frmRequest = $("#frmRequest");
    frmRequest.submit(function (e) {
        e.preventDefault();
        const url = "/request-rejected/";
        var data = new FormData($("#frmRequest")[0]);
        const success = function (e) {
            frmRequest[0].reset();
        }
       
        ajaxUpload(url, data, success);
    });
    
    


});
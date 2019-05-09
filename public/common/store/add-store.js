const frmAddStore = $("#frmAddStore");

frmAddStore.submit(function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmAddStore")[0]);
    const success = function (e) {
        frmAddStore[0].reset();
    }
   
    ajaxUpload(url, data, success);
});
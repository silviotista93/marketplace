const frmAddCategory = $("#frmAddCategory");

frmAddCategory.submit(function (e){
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmAddCategory")[0]);
    const success = function (e){
        frmAddCategory[0].reset();
    }
    ajaxUpload(url, data, success);
});



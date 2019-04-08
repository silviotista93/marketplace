const frmAddSubCategory = $("#frmAddSubCategory");

frmAddSubCategory.submit(function (e){
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmAddSubCategory")[0]);
    const success = function (e){
        frmAddSubCategory[0].reset();
    }
    ajaxUpload(url, data, success);
});



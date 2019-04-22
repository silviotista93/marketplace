const frmAddCategory = $("#frmAddCategory");

frmAddCategory.submit(function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmAddCategory")[0]);
    const success = function (e) {
        frmAddCategory[0].reset();
    }
    ajaxUpload(url, data, success);
});

const frmUpdateCategory = $("#frmUpdateCategory");

frmUpdateCategory.submit(function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmUpdateCategory")[0]);
    const success = function (e) {
        frmUpdateCategory[0].reset();
    }
    ajaxUpload(url, data, success);
});

const datos = function (e) {
    $('#categoryu').val('');
    var category =JSON.parse($(this).attr("data-info"));
    $('#categoryu').val(category.category);
    $('#id_category').val(category.id);
    $('#iconou').val(category.icon);
   
};
$('#manage_categories').on('click','.update', datos);











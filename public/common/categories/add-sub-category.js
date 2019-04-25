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

const frmUpdateSubCategory = $("#frmUpdateSubCategory");

frmUpdateSubCategory.submit(function (e){
    e.preventDefault();
    const url = $(this).attr("action");
    var data = new FormData($("#frmUpdateSubCategory")[0]);
    const success = function (e){
        frmUpdateSubCategory[0].reset();
    }
    ajaxUpload(url, data, success);
});


const datos = function (e) {
    
    $('#subcategoryu').val('');   
    var subcategory =JSON.parse($(this).attr("data-info"));
    $('#subcategoryu').val(subcategory.sub_category);
    $('#categoriau').val(subcategory.categories_id);
    $('#id_subcategory').val(subcategory.id);
   
};
$('#manage_subcategories').on('click','.update', datos);



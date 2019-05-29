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

$("#pais").change(function(e){
    e.preventDefault();
    var id=$("#id").val($(this).val());
    /* console.log($(this).val()); */
    $.ajax({
        
        url: urlCiudad,
        type: 'html',
        method: 'GET',
        data: id,
        success: function (response) {
            $('#ciudad').html(response);
           
            
            
        }, error: function (response) {
            console.log(urlCiudad);
            
        }
    });


});
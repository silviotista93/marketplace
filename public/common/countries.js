$.ajax({
    url: urlCountry,
    type: 'html',
    method: 'GET',
    success: function (response) {
        $('#ciudad').html(response);
        //console.log(response);
    }, error: function (response) {
        //console.log(response);
    }
});
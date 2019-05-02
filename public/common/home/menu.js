alert("ddd");
$.ajax({
    url: urlMenu,
    type: 'html',
    method: 'GET',
    success: function (response) {
        $('#menu').html(response);
        //console.log(response);
    }, error: function (response) {
        //console.log(response);
    }
});
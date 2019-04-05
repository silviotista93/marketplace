const frmAddCategory = $("#frmAddCategory");
const frm= document.getElementById("frmAddCategory");

frmAddCategory.submit(function (e){
    e.preventDefault();
    const url = $(this).attr("action");
    let data = new FormData(frm);
    const success = function (e){
        frmAddCategory[0].reset();
    }
    sendForm(url, data, success)
});



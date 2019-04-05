const classInputError = "form-control-danger";
const removeAlert = function (){
    $(".alertaMSG").fadeOut("slow",function (){
        $(this).remove();
    });
}
const showAlert = function (status, title, msg){
    removeAlert();
    if (status >= 200 && status < 300){
        status = "success";
    }else if (status >= 400 && status < 500){
        status = "warning";
    }else if (status >= 500 && status < 600){
        status = "danger";
    }
    const alertHTML = 
    `<div class="alertaMSG alert alert-bordered alert-${status}" role="alert" style="position: fixed;top: 4rem;right: 0.5rem; min-width:200px;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong class="d-block d-sm-inline-block-force">${title}:</strong> ${msg}
    </div>`;
    $("body").append(alertHTML);
    setTimeout(function (){
        removeAlert();
    },3000);
};

const showErrors = function(errores){
    Object.keys(errores).map(function (key){
        const listErrores = errores[key];
        $("#error-"+key).html(listErrores[0]);
        $("#"+key).addClass(classInputError);
    });
}

const sendForm = function(url, data, success, error){
    $(".msg-error").html("");
    $("."+classInputError).removeClass(classInputError);
    $.post(url, data, function (response,status,object){
        if (typeof success === "function"){
            success(response);
        }
        showAlert(object.status, response.title, response.msg);
    }).fail(function (error){
        let msg = "Error interno";
        if (error.status === 422){
            msg = "Datos incorrectos.";
            showErrors(error.responseJSON.errors);
        }
        showAlert(error.status,"Error", msg);
        if (typeof error === "function"){
            error(error);
        }
    });
};

$("input").focus(function (){
    $(this).removeClass(classInputError);
    $(this).parent().find(".msg-error").html("");
});
$("input[type=\"checkbox\"]").click(function (){
    $(this).removeClass(classInputError);
    $(this).parent().parent().find(".msg-error").html("");
});
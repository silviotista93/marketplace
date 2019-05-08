$(document).on('click', '#close-preview', function(){ 
    const popover = $(this).parent().parent();
    popover.popover('hide');
    /* $('.image-preview').popover('hide'); */ 
    // Hover befor close the preview
    popover.parent().find('.image-preview-filename').hover(
    function () {
        popover.popover('show');
    }, 
     function () {
        popover.popover('hide');
    }
);   
});



$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        const p=$(this).parent().parent().parent();
        p.find('.image-preview').attr("data-content","").popover('hide');
        p.find('.image-preview-filename').val("");
        p.find('.image-preview-clear').hide();
        p.find('.image-preview-input input:file').val("");
        p.find(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });
        const p=$(this).parent().parent().parent().parent();
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            p.find(".image-preview-input-title").text("Change");
            p.find(".image-preview-clear").show();
            p.find(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            p.find(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
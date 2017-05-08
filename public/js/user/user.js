$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
	$("#fileUpload").on('change', function () {

	    //Get count of selected files
	    var countFiles = $(this)[0].files.length;

	    var imgPath = $(this)[0].value;
	    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	    var image_holder = $("#image-holder");
	    image_holder.empty();

	    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
	        if (typeof (FileReader) != "undefined") {
	            //loop for each file selected for uploaded.
	            for (var i = 0; i < countFiles; i++) {

	                var reader = new FileReader();
	                reader.onload = function (e) {

	                    $('<div class="col-xs-12"><img src="'+e.target.result+'" class="img-thumbnail img-responsive" />').appendTo(image_holder);
	                }

	                image_holder.show();
	                reader.readAsDataURL($(this)[0].files[i]);
	            }

	        }else{
	            alert("This browser does not support FileReader.");
	        }
	    }else{
	        alert("Please select only images");
	    }
	 });

	$('.list-group-item a').each(function(index, el) {
        if($(el).attr('href')==location.href){
            $(el).parent('li.list-group-item').addClass('active');
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
    autosize($("textarea.autosize"));
    jQuery('#datetimepicker').datetimepicker({
    	timepicker:false,
    	format:'d.m.Y',
    });
    //open modal chat
    $('#list-online').on('click', 'li', function(event) {
    	event.preventDefault();
    	var name_user = $(this).text();
    	$('#chatsModal span.label.label-success').text(name_user);
    	$('#chatsModal input[name="your_chat_chanel"]').val($(this).attr('id'));
    });

    var options = { 
        beforeSubmit:  showRequest,
        success:       showResponse
    }; 
    $('#chatsModal').ajaxForm(options); 
});
// pre-submit callback 
function showRequest(formData, jqForm, options) { 
	for (var i=0; i < formData.length; i++) { 
        if (!formData[i].value) { 
            alert('Vui lòng nhập tin nhắn !'); 
            return false; 
        } 
    } 
    return true; 
} 
// post-submit callback 
function showResponse(responseText, statusText, xhr, $form)  { 
    var domHtml = '<li class="list-group-item clearfix">'+
                        '<div class="text-right"><span class="label label-success">'+responseText+'</span></div>'+
                    '</li>';
    var elli = $(domHtml);
    $('#chatsModal ul.list-group').append(elli).find(elli).slideDown();
	$form.find('textarea').val('');
} 
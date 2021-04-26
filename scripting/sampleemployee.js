
$(document).ready(function(){

 $('#uploadfile').change(function(e){
 var formData = new FormData($('#pic-upload')[0]);
 //codes in AJAX for uploading of picture
 $.ajax({
 type: 'POST',
 url: 'upload_pic.php',
 data: formData,
 contentType: false,
 processData: false,
 dataType: 'json',
 success: function(result){
 if(result.ok){
 $('#pic-box').html('');
 $('#pic-box').append("<img src='" + result.temp_path + "' style='width:100%'/>");
 $('#picpath').val(result.temp_path);
 } else {
 alert('Error encountered while trying to upload the picture!');
 }
 }
 });
 return false;
 });
});
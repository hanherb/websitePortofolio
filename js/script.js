$(function(){
  $('#container').mixItUp();
});

$(function() {
    $("#avatarUpload").change(function(event) {
    	$("#avatarPreview").attr("src", URL.createObjectURL(event.target.files[0]));
    });
});
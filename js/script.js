$(function(){
  $('#container').mixItUp();
});

$(function() {
    $("#avatarUpload").change(function(event) {
    	$("#avatarPreview").attr("src", URL.createObjectURL(event.target.files[0]));
    });
});

$(function() {
    $("#fileUpload").change(function(event) {
    	$("#uploadPreview").attr("src", URL.createObjectURL(event.target.files[0]));
    });
});

$(function() {
    $("#fileUpload2").change(function(event) {
    	$("#uploadPreview2").attr("src", URL.createObjectURL(event.target.files[0]));
    });
});

$(function() {
    $("#fileUpload3").change(function(event) {
    	$("#uploadPreview3").attr("src", URL.createObjectURL(event.target.files[0]));
    });
});
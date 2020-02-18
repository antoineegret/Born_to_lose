$(document).ready(function(eventObject){
	$("#categories").accordion({
		autoHeight: false
	});
	$("#categories div img").click(function(eventObject) {
		var element = $(this).attr("class");
		var srcImage = $(this).attr("src");
		$("#visuel img#"+element).attr("src", srcImage);
	});
});
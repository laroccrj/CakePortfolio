var startID = 0;
var selected = 0;
$(function(){
	setMainPicture(jsVars[0]["Art"]);
});

function setMainPicture(source) {
	$("#image").attr("src", "/img/" + source["image"]);
	$('#title').html(source["name"]);
	$('#description').html(source["description"]);
}

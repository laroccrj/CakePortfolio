var size = 0;
var selected = 0;

$(function(){
    size = jsVars.length - 1;
    setMainPicture(jsVars[0]["Art"]);
    $('#leftArrow').on('click', function(move) {
        if(selected - 1 < 0) return;
        selected--;
        setMainPicture(jsVars[selected]["Art"]);
    });
    $('#rightArrow').on('click', function(move) {
        if(selected + 1 > size) return;
        selected++; 
        setMainPicture(jsVars[selected]["Art"]);
    });
});

function setMainPicture(source) {
    $("#image").attr("src", "/img/uploads/" + source["image"]);
    $('#title').html(source["name"]);
    $('#number').html((selected + 1) + '/' + (size + 1)); 
}



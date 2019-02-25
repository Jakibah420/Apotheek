// Slider Code //
var i = 0;
var images = [];
var time = 3000;
// Image List
images[0] = "/Apotheek/assets/img/nieuws/news1.png";
images[1] = "/Apotheek/assets/img/nieuws/news2.png";
images[2] = "/Apotheek/assets/img/nieuws/news3.png";
// Change Image
function changeImg(){
    document.slide.src = images[i];
    if(i < images.length - 1){
      i++;
    } else {
        i = 0;
    }
    // timer
    setTimeout("changeImg()", 5000);
}
window.onload=changeImg;

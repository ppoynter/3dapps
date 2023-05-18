

$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

//function for playing the audio when corresponding slide is selected
function playAudio() {
    var slide1 = document.getElementById('pour');
    var audio;

    if (slide1.classList.contains('active'))
    {
        audio = document.getElementById('canAudio');
        audio.play();
    } 
    else 
    {
        audio = document.getElementById('canPour');
        audio.play();
    }
}
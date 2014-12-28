$(function(){
//Stop if HTML5 video tag is not supported
    if(!document.createElement('video').canPlayType){
        $("#video_controls").hide();
          }
var video = document.getElementById('vid');
    
    //add pause and play functionality
    
    $("#play_toggle").bind("click",function(){
        if(video.paused){
            video.play();
            $(this).html("Pause");
        }
        else{
            video.pause();
            $(this).html("Play");
        }
    
    });
    
    //add progress bar
    
    $(video).bind("timeupdate",function(){
        var timePercent = (this.currentTime/this.duration)*100;
        $("#play_progress").css({width:timePercent + "%" })
                                
                                });
    
    //Time display
    $(video).bind("timeupdate",function(){
        $("#current_time").html(formatTime(this.currentTime));
    });
    
    $(video).bind("durationchange", function(){
        $("#duration").html(formatTime(this.duration));
    });
function formatTime(seconds) {
  var seconds = Math.round(seconds);
  var minutes = Math.floor(seconds / 60);
  // Remaining seconds
  seconds = Math.floor(seconds % 60);
  // Add leading Zeros
  minutes = (minutes >= 10) ? minutes : "0" + minutes;
  seconds = (seconds >= 10) ? seconds : "0" + seconds;
  return minutes + ":" + seconds;
}
    
    
});
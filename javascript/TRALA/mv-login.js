var vid = document.getElementById("bgvid");

var pauseButton = document.querySelector("#content1 #pause-button");

var movie_url = ["343731697.mp4"];

 // "nc132174.mp4"http://demosthenes.info/assets/videos/lake.mp4", "http://demosthenes.info/assets/videos/mountain.mp4"

var index = [0]

// pauseButton.addEventListener("click", function() {
//   vid.classList.toggle("fade");
//   if (vid.paused) {
//     vid.play();
//     pauseButton.innerHTML = "Pause";
//   } else {
//     vid.pause();
//     pauseButton.innerHTML = "Paused";
//   }
// });


  vid.addEventListener('ended', function(){
    if (index >= 1){
      index = 0;
    } else {
      index++;
    };
  vid.src = movie_url[index];
    vid.load();
    vid.play();
  });


  $(function(){
    var imageArr = ["TRALA-logo (1).png", "TRALA-logo.png"];
    var now_image_count = 0;

    $("#trala-logo").attr("src", imageArr[now_image_count]);

    $("#change-image").click(function(){
      if(now_image_count == imageArr.length -1){
      now_image_count = 0;
    } else {
      now_image_count++;
    }

    $("#trala-logo").attr("src", imageArr[now_image_count]);
  });
});

  $(function(){
    var movieArr = ["343731697.mp4", "nc132174.mp4", "http://demosthenes.info/assets/videos/lake.mp4", "http://demosthenes.info/assets/videos/mountain.mp4"];
    var now_movie_count = 0;

    $("#bgvid").attr("src", movieArr[now_movie_count]);

    $("#change-movie").click(function(){
      if(now_movie_count == movieArr.length -1){
        now_movie_count = 0;
      } else {
        now_movie_count++;
      }

      $("#bgvid").attr("src", movieArr[now_movie_count]);
    });
  });
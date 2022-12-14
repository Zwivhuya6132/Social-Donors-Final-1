const webcamElement = document.getElementById('webcam');
const canvasElement = document.getElementById('canvas');
const snapSoundElement = document.getElementById('snapSound');
const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);
webcam.start()

.then(result =>{
  console.log("webcam started");
})
.catch(err => {
  console.log(err);
});

let picture = webcam.snap();
document.querySelector('#download-photo').href = picture;

$('#cameraFlip').click(function() {
  webcam.flip();
  webcam.start();  
});

function takeAPicture(){
  let picture= webcam.snap();
  document.querySelector("a").href= picture;
  document.getElementById("webcam").style.display = "none";
  document.getElementById("snap").style.display = "none";
  webcam.stop();
 
}
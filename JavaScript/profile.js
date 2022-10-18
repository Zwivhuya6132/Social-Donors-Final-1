//declearing html elements

const imgDiv = document.querySelector('.profileCon');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');
const dropbtn = document.querySelector('.dropbtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
  dropbtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
  dropbtn.style.display = "none";
});

file.addEventListener('change', function(){
  //this refers to file
  const choosedFile = this.files[0];

  if (choosedFile) {

      const reader = new FileReader(); //FileReader is a predefined function of JS

      reader.addEventListener('load', function(){
          img.setAttribute('src', reader.result);
      });

      reader.readAsDataURL(choosedFile);

  }
});
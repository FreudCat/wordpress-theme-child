const galleryImage = document.querySelectorAll('.gallery-image'); 
let indexOfImage = "";
//use queryselector since it's more flexible versus getelementbywhatever. 
//index.js from wordpress main theme uses camelcase for variable and function names 
//QUESTION: is there a more efficient way to do this? 

for (let image of galleryImage) { 
  image.addEventListener("click", function() {
    indexOfImage = populateModal(image);
  })
}

function populateModal(selectedImage) {
  document.querySelector("figcaption").innerHTML = selectedImage.alt;
  document.querySelector("#image-for-modal").src = selectedImage.src;
  const imageIndex = galleryImage.indexOf(selectedImage.src);
  return imageIndex;
}

document.querySelector(".next").addEventListener("click", function() {
  newImage(indexOfImage+=1);
})
document.querySelector(".previous").addEventListener("click", function() {
  newImage(indexOfImage-=1);
})

function newImage(indexOfNewImage) {
  if (indexOfNewImage < 0) {
    indexOfImage = galleryImage.length-1;
    indexOfNewImage = galleryImage.length-1;
  }
  else if (indexOfNewImage >= galleryImage.length) {
    indexOfImage = 0;
    indexOfNewImage = 0;
  }
  else {
    newSelectedImage = galleryImage[indexOfNewImage];
    document.querySelector("figcaption").innerHTML = newSelectedImage.alt;
    document.querySelector("#image-for-modal").src = newSelectedImage.src;
  }
}
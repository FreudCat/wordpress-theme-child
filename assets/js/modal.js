const galleryImage = document.querySelectorAll('.gallery-image'); 
let indexOfImage = "";
let srcArray = [];
//use queryselector since it's more flexible versus getelementbywhatever. 
//index.js from wordpress main theme uses camelcase for variable and function names 
//QUESTION: is there a more efficient way to do this? 

for (let image of galleryImage) { 
  srcArray.push(image.src);
  image.addEventListener("click", function() {
    indexOfImage = populateModal(image);
  })
}

function populateModal(selectedImage) {
  document.querySelector("figcaption").innerHTML = `&nbsp;&nbsp;&nbsp;${selectedImage.alt}&nbsp;&nbsp;&nbsp;`;
  document.querySelector("#image-for-modal").src = selectedImage.src;
  indexOfImage=srcArray.indexOf(selectedImage.src);
  return indexOfImage;
}

document.querySelector(".next").addEventListener("click", function() {
  console.log(`index of image ${indexOfImage}`);
  newImage(indexOfImage+=1);
})
document.querySelector(".previous").addEventListener("click", function() {
  console.log(indexOfImage);
  newImage(indexOfImage-=1);
})

function newImage(indexOfNewImage) {
  console.log(`index of new image ${indexOfNewImage}`);
  console.log(`${indexOfImage} = ${galleryImage.length}`);
  if (indexOfNewImage < 0) {
    indexOfImage = galleryImage.length-1;
    indexOfNewImage = galleryImage.length-1;
    newSelectedImage = galleryImage[indexOfNewImage];
    console.log(`new selected image ${newSelectedImage.alt}`);
    document.querySelector("figcaption").innerHTML = `&nbsp;&nbsp;&nbsp;${newSelectedImage.alt}&nbsp;&nbsp;&nbsp;`;
    document.querySelector("#image-for-modal").src = newSelectedImage.src;
  }
  if (indexOfNewImage >= galleryImage.length) {
    indexOfImage = 0;
    indexOfNewImage = 0;
    newSelectedImage = galleryImage[indexOfNewImage];
    console.log(`new selected image ${newSelectedImage.alt}`);
    document.querySelector("figcaption").innerHTML = `&nbsp;&nbsp;&nbsp;${newSelectedImage.alt}&nbsp;&nbsp;&nbsp;`;
    document.querySelector("#image-for-modal").src = newSelectedImage.src;
  }
  else {
    newSelectedImage = galleryImage[indexOfNewImage];
    console.log(`new selected image ${newSelectedImage.alt}`);
    document.querySelector("figcaption").innerHTML = `&nbsp;&nbsp;&nbsp;${newSelectedImage.alt}&nbsp;&nbsp;&nbsp;`;
    document.querySelector("#image-for-modal").src = newSelectedImage.src;
  }
}
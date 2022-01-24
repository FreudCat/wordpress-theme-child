
function populateModal(selectedImage) {
  document.querySelectorAll("figcaption")[0].innerHTML = selectedImage.alt;
  document.querySelector("#image-for-modal").src = selectedImage.src ;
}

const galleryImage = document.querySelectorAll('.gallery-image'); //use queryselector since it's more flexible versus getelementbywhatever. 
  
for (let image of galleryImage) { 
  image.addEventListener("click", function() {
    populateModal(image);
  })
}
console.log("I'm in modal.js version 4");


function testModal(selectedImage) {
  const myJSON = JSON.stringify(selectedImage);
  console.log(`${myJSON} this thing workd`);
}
  function populateModal(selectedImage) {
    console.log(selectedImage.alt);
    document.getElementsByTagName("figcaption")[0].innerHTML = selectedImage.alt;
    document.getElementById("imageForModal").src = selectedImage.src ;
  }
  const galleryImage = document.querySelectorAll('.galleryImage'); //use queryselector since it's more flexible versus getelementbywhatever. 
  console.log(galleryImage);
  //console.log(`this is pick.length: ${galleryImage.length}`); should return zero since pick is an array-like object and not an array. .length property only works with arrays.
  console.log(`this is image 0: ${galleryImage[0]}`); 
  
  for (let image of galleryImage) { 
    console.log(image);
    console.log("I'm running in the loop");
    image.addEventListener("click", function() {
    populateModal(image);
    console.log("eventlistener fired");
  })
}

let testimonial_div=document.querySelector("#testimonial-div");

for (let testimonial of testimonial_array) {
  let new_div=document.createElement("div");
  let new_p_text=document.createElement("p");
  let new_p_name=document.createElement("p");
  let new_p_job=document.createElement("p");
  let new_img=document.createElement("img");
  console.log(testimonial.image);
  
  if (!testimonial.image) {
    testimonial.image=`${directory_uri}/assets/images/sunny-page-images/avatar.png`;
  }//the variable directory_uri came from functions.php
  
  new_div.className="col-sm-4 testimonial-container";
  new_img.className="client-image mx-auto d-block rounded-circle";
  new_img.src=testimonial.image;
  new_p_text.className="client-testimonial";
  new_p_text.innerHTML=testimonial.text;
  new_p_name.className="client-name";
  new_p_name.innerHTML=testimonial.name;
  new_p_job.className="client-job";
  new_p_job.innerHTML=testimonial.job;
  
  new_div.appendChild(new_img);
  new_div.appendChild(new_p_text);
  new_div.appendChild(new_p_name);
  new_div.appendChild(new_p_job);

  testimonial_div.appendChild(new_div);  
}
console.log("Shopping.js ran");

const shoeArray = document.querySelectorAll('.shoe-div'); 
console.log(document.querySelector(".shoe-div").innerHTML);
console.log(shoeArray);
let indexOfImage = "";
let srcArray = [];
const mainShoe = document.querySelector('.main-shoe');

for (let shoe of shoeArray) { 
  srcArray.push(shoe.innerHTML);
  shoe.addEventListener("click", function() {
    console.log("click");
    enlargeShoe(shoe);
  })
}
console.log(srcArray);

function enlargeShoe (clickedShoe) {
  console.log("clicked");
  mainShoe.src = clickedShoe.src; 
}




let amount = parseInt(document.querySelector(".number-holder").innerHTML);

document.querySelector(".plus-sign").addEventListener("click", function() {
  cartAmount(amount+=1);
})
document.querySelector(".minus-sign").addEventListener("click", function() {
  cartAmount(amount-=1);
})

function cartAmount(newAmount) {
  if (newAmount < 0) {
    console.log("User tried to add negative shoes");
    amount=0;
  }
  if (newAmount >= 0) {
    document.querySelector(".number-holder").innerHTML = newAmount;
  }
  else {
    console.log("Unsure what user did here");
  }
  
}



document.querySelector(".add-cart-button").addEventListener("click", function() {
  addToCart(amount);
})

function addToCart (cartAmount) {
  document.querySelector("#cart-amount").innerHTML = cartAmount;
  if (cartAmount == 0) {
    document.querySelector("#cart-amount").style.display = 'none';
  }
  if (cartAmount > 0) {
    document.querySelector("#cart-amount").style.display = 'inline';
  }
}
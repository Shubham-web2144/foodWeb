//  order placing javascript code

let form = document.querySelector(".productOrder__form");
let productOrderBtn = document.querySelector(".productOrder__btn");

form.addEventListener("submit", (e) => {
  e.preventDefault();
});

productOrderBtn.addEventListener("click", () => {
  let xml = new XMLHttpRequest();
  xml.open("POST", "../php/placeorder.php", true);
  xml.addEventListener("load", () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status === 200) {
        let data = xml.response;
        alert("Your order is placed you can check in Your Order section");
        window.location.href = "../pages/cart.php";
      } else {
        alert("Please enter valid input fields");
      }
    }
  });
  let formData = new FormData(form);
  xml.send(formData);
});

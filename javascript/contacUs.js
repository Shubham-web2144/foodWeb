//  contact us  form javascript code dynamically

let form = document.querySelector('.contact__form-form');
let contactBtn = document.querySelector('.contact__btn');
let contactInput = document.querySelectorAll('.contact__input');
let text = document.querySelector('.text');


form.addEventListener('click', (e) => {
    e.preventDefault();
});

contactBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/contact.php",true);
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === 'Done') {
                    alert("Thanks for contact us. We are get back to you soon");
                    text.innerHTML = "";
                    contactInput.forEach(ele => {
                        ele.innerHTML = "";
                    });
                }
                else {
                    alert(data);
                }
            }
        }
    });
    let formData = new FormData(form);
    xml.send(formData);
})
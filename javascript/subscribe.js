
// subcriber form code in javascript

let form = document.querySelector('.subForm');
let subsBtn = document.querySelector('.subForm__btn');
let result = document.querySelector('.result');

form.addEventListener('click', (e) => {
    e.preventDefault();
});


subsBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "php/subs.php", true);
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === 'DONE') {
                    result.style.display = "block";
                    result.textContent = "Thank You For Subscribing!!!";
                }
                else {
                    result.style.display = "block";
                    result.style.background = "rgba(255, 0, 0, 0.7)";
                    result.style.color = "white";
                    result.textContent = data;                }
            }
        }
    });
    let formData = new FormData(form);
    xml.send(formData);
})
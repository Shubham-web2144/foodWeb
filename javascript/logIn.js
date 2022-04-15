// login form javascript code

let form = document.querySelector('.signup');
let logBtn = document.querySelector('.signup__btn-sign');
let errorBox = document.querySelector('.errorBox');


form.addEventListener('submit', (e) => {
    e.preventDefault();
});

logBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/login.php",true);
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === "Login") {
                    window.location.href = "../home.php";
                }
                else {
                    errorBox.style.display = "block";
                    errorBox.textContent = data;
                }
            }
        }
    });

    let formData = new FormData(form);
    xml.send(formData);
});


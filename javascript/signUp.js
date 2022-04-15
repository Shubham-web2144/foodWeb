
// sign in form javasscript code

let form = document.querySelector('.signup');
let signBtn = document.querySelector('.signup__btn-sign');
let errorBox = document.querySelector('.errorBox');

form.addEventListener('submit', (e) => {
    e.preventDefault();
});

signBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open('POST', "php/signup.php", true);
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === 'success') {
                    window.location.href = "home.php";
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
})
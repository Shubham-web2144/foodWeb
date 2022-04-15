// showing all products dynamically using javascript
let productBox = document.querySelector('.productBox');
window.addEventListener('load', () => {
    let xml = new XMLHttpRequest();
    xml.open('GET', '../php/productsShow.php', true);
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                productBox.innerHTML = data;
            }
        }
    });

    xml.send();
})

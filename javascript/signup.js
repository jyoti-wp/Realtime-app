const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
    e.preventDefault();
}
continueBtn.onclick = () => {
    // Ajax section 
    let xhr = new XMLHttpRequest();
    xhr.open("POST",
        "signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            }
        }
    }

    // Lets send data from ajax to php 
    let formData = new formData(form);
    xhr.send(formData);
}
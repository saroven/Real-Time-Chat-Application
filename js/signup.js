const form = document.querySelector('.signup form'),
continueBtn = form.querySelector(".button input");
errorTxt = form.querySelector(".error-text");
form.onsubmit = (e)=>{
    e.preventDefault(); //preventing defaul form submit
}
continueBtn.onclick = () =>{

    // ajax part start

    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "../signup.php", true);
    xhr.onload = () =>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200){
                let data = xhr.response;
                if (data == 'success') {
                    location.href = '/users.php';

                }else{
                    errorTxt.style.display = "block";
                    errorTxt.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form); //create form object
    xhr.send(formData); //send form data
}

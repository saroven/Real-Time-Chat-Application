
const pswdField = document.querySelector(".form .field input[type='password']"),
toggleBtn = document.querySelector(".form .field i");
toggleBtn.onclick = ()=>{
    if(pswdField.type == 'password'){
        pswdField.type = 'text';
        toggleBtn.classList.add('active');

    }else{
        pswdField.type = 'password';
        toggleBtn.classList.remove('active');
    }
}

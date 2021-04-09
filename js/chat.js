const form = document.querySelector(".typing-area"),
input = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing defaul form submit
}
sendBtn.onclick = () =>{

    // ajax part start

    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "../send_msg.php", true);
    xhr.onload = () =>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200){
                input.value = ''; //claring input field old value
                scrollToBottom();
            }
        }
    }
    let formData = new FormData(form); //create form object
    xhr.send(formData); //send form data
}
chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}
setInterval(()=>{

    // ajax part start

let xhr = new XMLHttpRequest(); //creating XML object
xhr.open("POST", "../get_msg.php", true);
xhr.onload = () =>{
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){ //if active class not in class list
                scrollToBottom();
            }
        }
    }
}
let formData = new FormData(form); //create form object
xhr.send(formData); //send form data


}, 500);//refresh messages after 500ms

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}


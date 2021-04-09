const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search .btn"),
userList = document.querySelector(".users .users-list");
searchBtn.onclick = ()=>{
    searchBar.classList.toggle('active');
    searchBar.focus();
    searchBtn.classList.toggle('active');
    searchBar.value = '';

}
searchBar.onkeyup = ()=> {
    // ajax part start
    let searchTerm = searchBar.value;
   if(searchTerm != ''){
       searchBar.classList.add("active");
   }else{
    searchBar.classList.remove("active");
}
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "../search.php", true);
    xhr.onload = () =>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200){
                let data = xhr.response;
                userList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm= " + searchTerm);
}
setInterval(()=>{

    // ajax part start

let xhr = new XMLHttpRequest(); //creating XML object
xhr.open("GET", "../user_data.php", true);
xhr.onload = () =>{
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200){
            let data = xhr.response;
            if(!searchBar.classList.contains("active")){ //if searchbar is active
                userList.innerHTML = data;
            }
        }
    }
}

xhr.send();


}, 1000);//refresh messages after 500ms

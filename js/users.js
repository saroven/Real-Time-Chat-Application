const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search .btn");
searchBtn.onclick = ()=>{
    searchBar.classList.toggle('active');
    searchBar.focus();
    searchBtn.classList.toggle('active');

}

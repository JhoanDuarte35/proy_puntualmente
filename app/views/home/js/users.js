//const searchBar = document.querySelector(".search input"),
//searchIcon = document.querySelector(".search button"),
usersList = document.querySelector("#user-list");
//listagrupos = document.querySelector(".lista-grupos");

/*
searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}
*/

setInterval(() =>{
 /* let xhr2 = new XMLHttpRequest();
  xhr2.open("GET", "php/mostrar_grupos.php", true);
  xhr2.onload = ()=>{
    if(xhr2.readyState === XMLHttpRequest.DONE){
        if(xhr2.status === 200){
          let data2 = xhr2.response;
            listagrupos.innerHTML = data2;
        }
    }
  }
  xhr2.send();
  */
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "chat/users", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
            usersList.innerHTML = data;
        }
    }
  }
  xhr.send();

}, 1500);




function hola(id){
  contenidochat = document.querySelector("#contenidochat");
  headerchat = document.querySelector("#headerchat");

 

  console.log(id);

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "chat/getheader", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          headerchat.innerHTML = data;
          contenidochat.scrollTop = contenidochat.scrollHeight;


        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id_out=" + id);


  setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "chat/getchat", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          contenidochat.innerHTML = data;
          contenidochat.scrollTop = contenidochat.scrollHeight;

        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id_out=" + id);
}, 3000);
}



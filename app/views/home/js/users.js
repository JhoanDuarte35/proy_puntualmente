const searchBar = document.querySelector('#buscadorusuarios'),
usersList = document.querySelector("#user-list");
listagrupos = document.querySelector("#lista-grupos");






searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "chat/busqueda", true);
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


setInterval(() =>{
 let xhr2 = new XMLHttpRequest();
  xhr2.open("GET", "chat/mostrargrupos", true);
  xhr2.onload = ()=>{
    if(xhr2.readyState === XMLHttpRequest.DONE){
        if(xhr2.status === 200){
          let data2 = xhr2.response;
            listagrupos.innerHTML = data2;
        }
    }
  }
  xhr2.send();
  
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

}, 1000);


function hola(id){
  clearInterval(chat);
  contenidochat = document.querySelector("#contenidochat");
  headerchat = document.querySelector("#headerchat");
  

 

  console.log(id);

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "chat/getheader", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data2 = xhr.response;
          headerchat.innerHTML = data2;
       

        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id_out=" + id);


  chat=setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "chat/getchat", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          contenidochat.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id_out=" + id);
}, 500);
setTimeout(function(){
  document.getElementById('final').scrollIntoView(true);
}, 600);


}



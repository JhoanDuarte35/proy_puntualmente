
notyIcon=document.getElementById('notify');
notyMenuIcon=document.getElementById('notify2');


setInterval(() =>{
    let xhr = new XMLHttpRequest();
  xhr.open("GET", "notify", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
            notyIcon.innerHTML = data;
            if(data==0){
                notyMenuIcon.innerHTML= `No tienes mensajes nuevos`;
            }else{
                notyMenuIcon.innerHTML= `Tienes ${data} mensajes nuevos`;
            }
        }
    }
  }
  xhr.send();

}, 1000);
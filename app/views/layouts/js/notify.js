
notyIcon=document.getElementById('notify');

setInterval(() =>{
    let xhr = new XMLHttpRequest();
  xhr.open("GET", "notify", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
            notyIcon.innerHTML = data;
        }
    }
  }
  xhr.send();

}, 1000);
const form = document.querySelector("#loginform"),
continueBtn = document.querySelector("#buttoninput"),
errorText = document.querySelector("#error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "auth", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href = "home";
              }else{
                errorText.textContent = data;
                location.href = "home";

              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
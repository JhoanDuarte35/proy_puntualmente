//const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list"),
usersListGroup = document.querySelector("#list-grupo"),
buttonadd=document.querySelector(".btn btn-outline-success");

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
  xhr.open("POST", "php/busquedauser.php", true);
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

    var array=[];

function myfuncion(){
    id=document.getElementById('usuario').value;
    alert(id);
    let pos = array.indexOf(id);
    if(array[pos]==id){
        console.log(array); 
    }else{
        array.push(id);
        console.log(array); 
        //id.setAttribute('disabled', '');

        obj = [{ "id_user_group": `${id}`, "estado": false }];
        console.log(obj)
        dbParam = JSON.stringify(obj);
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "chat/busquedauser", true);
      xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            usersListGroup.innerHTML = usersListGroup.innerHTML + data;
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("x=" + dbParam);
    }

}


    function borraruser(id){
      let pos = 0;
      alert(id);
      pos = array.indexOf(id);
      if(array[pos]==id){
        array.splice(pos, 1);
        document.getElementById(id).remove();
        console.log(array);
        obj = [{ "id_user_group": `${id}`, "estado": true }];
        console.log(obj)
        dbParam = JSON.stringify(obj);
  
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/busquedauser.php", true);
        xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            usersList.innerHTML = usersList.innerHTML + data;
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("x=" + dbParam);
      }else{
        console.log(array); 
      }
      
    }
    const creargrupobar = document.getElementById("#nombre");
    botonguardar = document.querySelector('.btn-borde');

    if(creargrupobar != ""){
      searchBar.classList.add("active");
    }else{
      searchBar.classList.remove("active");
    }

    $(document).ready(function(){
      $("#crear").submit(function(event){
        event.preventDefault();
        
        $.ajax({
            dataType:"json",
            url:"php/grupos-guardar.php",
            type:"POST",
            data:{nombre:$("#nombre").val(), array: JSON.stringify(array)},
            success: function(data){
                if(data.success==false){
                    $("#mensaje").show();
                    $("#mensaje").html(data.msg);
                    $('.log-status').addClass('wrong-entry');
                    $('.alert').fadeIn(700);
                setTimeout( "$('.alert').fadeOut(1800);",1500 );
                }else{
                    window.location=data.link;
                }
            },
                error: function(response) {
                    $("#mensaje").show();
                    $("#mensaje").html(response.responseText);
                }
        });
    });
    $('.form-control').keypress(function(){
        $('.log-status').removeClass('wrong-entry');
    });
  })

  



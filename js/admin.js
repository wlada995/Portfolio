
if(localStorage.getItem('log') == null){
  location.replace("login.html");
}else{
  function hideMessage(e){
    let idMessage = e.target.getAttribute('data-id');
  
      $.ajax({
          type: "POST",
          url: "inc/hideMessage.php",
          data: {
            id: idMessage,
          },
        }).done(function (data) {
          location.reload();
          console.log(data);
        });
  }
}


function logOut(){
  localStorage.removeItem('log');
  location.replace("login.html");
}
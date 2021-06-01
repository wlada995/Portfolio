window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}


// Navigation

$('#sidebarCollapse').on('click', function () {
  $(".vertical-nav").css("display", "block")
  $('#sidebar').toggleClass('active');
  $("#fixedbutton").css("display", "none")
});

$('#hideNav').on('click', function () {
  $('#sidebar').toggleClass('active');
  $("#fixedbutton").css("display", "block")
});



$(".nav-item").on("click", function () {
  $(".vertical-nav").css("display", "none")
})

// bg-light - color za selektovan nav

// Navigation end


// OWL CAROUSEL
jQuery(document).ready(function ($) {
  "use strict";

  $('#customers-testionials').owlCarousel({
    loop: true,
    center: true,
    item: 3,
    margin: 0,
    autoplay: true,
    dots: true,
    autoplayTimeout: 5000,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      1170: {
        items: 5
      }
    }
  })

})
// OWL CAROUSEL END


// message 



let sendBtn = document.querySelector(".sendBtn")



sendBtn.addEventListener("click", test);


function test() {

  let nameInput = document.querySelector(".inputName").value;
  let emailInput = document.querySelector(".emailInput").value;
  let messageInput = document.querySelector(".messageInput").value;

  $.ajax({
    type: "POST",
    url: "inc/message.php",
    data: {
      name: nameInput,
      email: emailInput,
      message: messageInput,
    },
  }).done(function (data) {
    console.log(data);
  });


}
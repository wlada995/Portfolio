
let logBtn = document.getElementById("logBtn");
logBtn.addEventListener("click", login)

function login() {

    let username = document.querySelector("#name").value;
    let pass = document.querySelector("#pass").value;

    $.ajax({
        type: "POST",
        url: "inc/login.php",
        data: {
            name: username,
            pass: pass,
        },
    }).done(function (data) {
        let dataJSON = JSON.parse(data);
        localStorage.setItem("log", JSON.stringify(dataJSON));

        location.replace("admin.php");
    });

}

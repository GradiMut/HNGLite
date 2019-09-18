document.getElementById("email").addEventListener("blur", validateEmail);
document.getElementById("password").addEventListener("blur", validatePassword);
document.getElementById("switch").addEventListener("click", switchView);
document.getElementById("switch1").addEventListener("click", switchView1);
document.getElementById("signInLink").addEventListener("click", signView);

function switchView() {
    document.getElementById("view").style.display = "none";
    window.location.href = "#page1";

    document.getElementById("view1").style.display = "block";
}
function switchView1() {
    document.getElementById("view1").style.display = "none";
    window.location.href = "#page";
    document.getElementById("view").style.display = "block";
}
function signView(e) {
    document.getElementById("view1").style.display = "none";
    document.getElementById("view").style.display = "block";
    e.preventDefault();
}
function validateEmail() {
    const email = document.getElementById("email");
    const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if (!re.test(email.value)) {
        email.classList.add("is-invalid");
    } else {
        email.classList.remove("is-invalid");
    }
}

function validatePassword() {
    const pass = document.getElementById("password");
    if (pass.value.length < 8) {
        pass.classList.add("is-invalid");
    } else {
        pass.classList.remove("is-invalid");
    }
}

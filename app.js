document.getElementById("email").addEventListener("blur", validateEmail);
document.getElementById("password").addEventListener("blur", validatepassword);

function validateEmail() {
    const email = document.getElementById("email");
    const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if (!re.test(email.value)) {
        email.classList.add("is-invalid");
    } else {
        email.classList.remove("is-invalid");
    }
}


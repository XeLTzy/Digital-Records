const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon1"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if (password.type === "password") {
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        });
    });
});


const forms2 = document.querySelector(".forms"),
      pwShowHide2 = document.querySelectorAll(".eye-icon2"),
      links2 = document.querySelectorAll(".link");

pwShowHide2.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields2 = eyeIcon.parentElement.parentElement.querySelectorAll(".password2");
        
        pwFields2.forEach(password => {
            if (password.type === "password") {
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        });
    });
});

links.forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault(); // Preventing form submit
        if (link.classList.contains("signup-link")) {
            forms.classList.add("show-signup");
            forms.classList.remove("show-forgot-password");
        } else if (link.classList.contains("login-link")) {
            forms.classList.remove("show-signup", "show-forgot-password");
        } else if (link.classList.contains("link-forgot")) {
            forms.classList.add("show-forgot-password");
            forms.classList.remove("show-signup");
        }
    });
});
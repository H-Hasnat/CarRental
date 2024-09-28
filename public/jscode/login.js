async function Login() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email.length === 0) {
        error("email required");
    } else if (password.length == 0) {
        error("password required");
    } else {
        let res = await axios.post("/userLogin", {
            email: email,
            password: password,
        });
        console.log(res);
        if (res.data["status"] === "success") {
            success("login successfully");
            setTimeout(function () {
                window.location.href = "/Dashboard";
            }, 1000);
        } else {
            error("Information Incorrect");
        }
    }
}

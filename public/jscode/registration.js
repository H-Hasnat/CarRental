async function SubmitInformation() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phn_number = document.getElementById("phn_number").value;
    let password = document.getElementById("password").value;
    let role = document.getElementById("role").value;
    let address = document.getElementById("address").value;

    if (name.length === 0) {
        error("name required");
    } else if (email.length === 0) {
        error("email required");
    } else if (phn_number.length === 0) {
        error("phone number required");
    } else if (password.length === 0) {
        error("password required");
    } else if (address.length === 0) {
        error("address required");
    } else {
        let res = await axios.post("/createAccount", {
            name: name,
            email: email,
            phn_number: phn_number,
            password: password,
            role: role,
            Address: address,
        });
        if (res.status === 201) {
            success("Data Added successfully");

            setTimeout(function () {
                window.location.href = "/login";
            }, 1000);
        } else {
            window.location.href = "/signup";
        }
    }
}

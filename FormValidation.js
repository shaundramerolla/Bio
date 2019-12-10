var button = document.getElementById("submit");
    button.onclick = function validateForm() {
        var name = document.getElementById("name");
        var email = document.getElementById("email");
        var message = document.getElementsByName("message");

        if (name.value.length <=1) {
            alert("Name should contain at least 2 characters.");
            return false;
        } else {
            return true;}
        
        if (/[^@]+@[^@]+/.test(email)) {
            return true;
        } else {
            alert("You have entered and invalid email address.");
        }
        if (message.value === "") {
            alert ("You may not leave the message blank.");
        }
    };

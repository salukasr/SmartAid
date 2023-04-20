function Validation(){
    
    if(document.form.pass.value.length < 8){
        alert("Password must atleast consist 8 characters!");
        return;
    }
    if(document.form.cno.value.length < 10){
        alert("Please enter valid contact number!");
        return;
    }
    if(document.form.cno.value.length > 10){
        alert("Please enter valid contact number!");
        return;
    }
    if (document.form.pass.value.length != document.form.cpass.value.length) {
        alert("Passwords do not match. Please try again!");
        return;
    }

    if(!validateEmail(document.form.mail.value)){
        alert("Please enter a valid email address!");
        return;
    }
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validateUsername(username) {
        const usernameRegex = /^[a-zA-Z0-9_]+$/;
        return usernameRegex.test(username);
    }

    if(!validateUsername(document.form.uname.value)){
        alert("Username should only contain letters, numbers, and underscores!");
        return;
    }
    if(document.form.page.value.length < 110){
        alert("Please enter valid age!");
        return;
    }
    
    var selectBox = document.getElementById("mySelect");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == "") {
        alert("Please select an option.");
        return false;
    }
    return true;
}
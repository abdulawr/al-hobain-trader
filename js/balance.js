function Update() {
    var id = document.getElementById("id");
    var old_pass = document.getElementById("old_pass");
    var new_pass = document.getElementById("new_pass");
    var success = document.getElementById("success");
    var danger = document.getElementById("danger");

    if (id.value != "" && old_pass.value != "" && new_pass.value != "" && old_pass.value != new_pass.value) {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() == "success") {
                    id.value = null;
                    old_pass.value = null;
                    new_pass.value = null;
                    success.style.display = "block";
                    danger.style.display = "none";
                } else {
                    success.style.display = "none";
                    danger.style.display = "block";
                }
                console.log(this.responseText);
            }
        }
        obj.open("GET", "model/updatePassword.php?id=" + id.value + "&old_pass=" + old_pass.value + "&new_pass=" + new_pass.value, true);
        obj.send();
    } else {
        alert('Please fill all the input fields correctly');
    }
}
function show_Value() {
    var obj = new XMLHttpRequest();
    obj.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("fbr_rate").value = this.responseText;
        }
    }
    obj.open("GET ".trim(), "model/getFBRbageRage.php", true)
    obj.send();
}

window.onload = show_Value;

function Submit_Data() {
    var value = document.getElementById("location ").value;
    value = value.toLowerCase().charAt(0).toUpperCase() + value.slice(1).toLowerCase();
    if (value) {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() == "Successful ".trim()) {
                    document.getElementById("success ").style.display = "block ";
                    document.getElementById("danger ").style.display = "none ";
                    document.getElementById("location ").value = " ";
                    document.getElementById("location ").value = null;
                } else {
                    document.getElementById("danger ").style.display = "block ";
                    document.getElementById("success ").style.display = "none ";
                }
            }
        }
        obj.open("GET ".trim(), "model/addNewLocation.php?name=" + value, true)
        obj.send();
    } else {
        alert(" Plese enter value into field ");
    }

}

function Update() {
    var val = document.getElementById("fbr_rate").value;
    var obj = new XMLHttpRequest();
    obj.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("success ").style.display = "block ";
            document.getElementById("success ").innerText = "Successfully Updated";
        }
    }
    obj.open("GET ".trim(), "model/UpdateFBRRate.php?val=" + val, true)
    obj.send();

}
var id = 0;
var j = 0;

function Add_REC() {
    id++;
    var str = '<center> <div style="margin-top:8px;padding:0px 30px;"><input id="' + 'rn' + id + '" type="text" style="width: 48%; height:30px; padding-left:5px;" placeholder="Enter name" > <input id="' + 'rv' + id + '" type="number" style="width: 48%; margin-left:10px; height:30px; padding-left:5px;" placeholder="Enter value"></div></center>';
    var div = document.getElementById("rec_dev");
    div.insertAdjacentHTML("afterbegin", str);
}

function Add_FAR() {
    j++;
    var str = '<center> <div style="margin-top:8px;padding:0px 30px;"><input id="' + 'fn' + j + '" type="text" style="width: 48%; height:30px; padding-left:5px;" placeholder="Enter name" > <input id="' + 'fv' + j + '" type="number" style="width: 48%; margin-left:10px; height:30px; padding-left:5px;" placeholder="Enter value"></div></center>';
    var div = document.getElementById("far_dev");
    div.insertAdjacentHTML("afterbegin", str);

}

function Clear() {
    id = 0;
    j = 0;
    document.getElementById("rec_dev").innerHTML = null;
    document.getElementById("far_dev").innerHTML = null;
    document.getElementById("success").style.display = "none";
    document.getElementById("r_total").value = null;
    document.getElementById("f_total").value = null;
}

function Calculate() {
    var r_bal = 0;
    var f_bal = 0;

    for (i = 1; i <= id; i++) {
        if (document.getElementById("rv" + i).value != "") {
            r_bal += parseInt(document.getElementById("rv" + i).value);
        }
    }

    for (i = 1; i <= j; i++) {
        if (document.getElementById("fv" + i).value != "") {
            f_bal += parseInt(document.getElementById("fv" + i).value);
        }
    }

    if (r_bal === f_bal) {
        document.getElementById("success").style.display = "block";
        document.getElementById("sub_text").innerText = "Congrates both sides are equal (Now click submit button to save data)";
    }

    document.getElementById("r_total").value = r_bal;
    document.getElementById("f_total").value = f_bal;
}

function Submit_Record() {
    var r_bal = document.getElementById("r_total").value;
    var f_bal = document.getElementById("f_total").value;
    var date = new Date();
    var complete_date = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
    var json = [];
    if (r_bal != "" && f_bal != "") {
        for (i = 1; i <= id; i++) {
            if (document.getElementById("rn" + i).value != "" && document.getElementById("rv" + i).value != "") {
                var sub = { "name": document.getElementById("rn" + i).value, "value": document.getElementById("rv" + i).value, "type": "R" };
                json.push(sub);
            } else {
                window.alert("Please fill all the field correctly (some input field may empty such name or value");
                break;
            }
        }

        for (i = 1; i <= j; i++) {
            if (document.getElementById("fn" + i).value != "" && document.getElementById("fv" + i).value != "") {
                var sub = { "name": document.getElementById("fn" + i).value, "value": document.getElementById("fv" + i).value, "type": "F" };
                json.push(sub);
            } else {
                window.alert("Please fill all the field correctly (some input field may empty such name or value");
                break;
            }
        }

        if (json.length > 0) {
            var res = JSON.stringify(json);
            var obj = new XMLHttpRequest();
            obj.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == "successfull") {
                        window.alert("Data successfull submited");
                        Clear();
                    }
                }
            }
            obj.open("GET", "model/insertCash.php?json=" + res + "&date=" + complete_date + "&r_bal=" + r_bal + "&f_bal=" + f_bal, true);
            obj.send();
        }

    } else {
        window.alert("Plea se first calculate the result by clicking the calculate button");
    }
}
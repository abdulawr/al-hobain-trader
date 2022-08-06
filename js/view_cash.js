function Generate() {
    var date = document.getElementById("date").value;
    var r_div = document.getElementById("rec_dev");
    var f_div = document.getElementById("far_dev");
    if (r_div.innerHTML != null) {
        r_div.innerHTML = null;
    }
    if (f_div.innerHTML != null) {
        f_div.innerHTML = null;
    }
    if (date != "") {
        var d = date.split("-");
        document.getElementById("date_input").value = d[2] + "/" + d[1] + "/" + d[0];
        var send_date = d[0] + "-" + d[1] + "-" + d[2];

        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != "[]") {
                    var json = JSON.parse(this.responseText);
                    document.getElementById("r_total").value = json[0]['r_balance'];
                    document.getElementById("f_total").value = json[0]['f_balance'];
                    for (value of json) {
                        if (value['type'] == "R") {
                            var str = '<center> <div style="margin-top:8px;padding:0px 30px;"><input value="' + value["name"] + '" type="text" readonly style="width: 48%; height:30px; padding-left:5px;" placeholder="Enter name" > <input value="' + value['value'] + '" type="number" readonly style="width: 48%; margin-left:10px; height:30px; padding-left:5px;" placeholder="Enter value"></div></center>';
                            r_div.insertAdjacentHTML("afterbegin", str);
                        } else if (value['type'] == "F") {
                            var str = '<center> <div style="margin-top:8px;padding:0px 30px;"><input value="' + value["name"] + '" type="text" readonly style="width: 48%; height:30px; padding-left:5px;" placeholder="Enter name" > <input value="' + value['value'] + '" type="number" readonly style="width: 48%; margin-left:10px; height:30px; padding-left:5px;" placeholder="Enter value"></div></center>';
                            f_div.insertAdjacentHTML("afterbegin", str);
                        }
                    }
                } else {
                    alert('No data exist for this date');
                }
            }
        }
        obj.open("GET", "model/view_cashDate.php?date=" + send_date, true);
        obj.send();

    } else {
        alert('Please select the date');
    }

}
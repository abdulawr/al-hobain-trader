function showSelect() {
    var head = document.getElementById("select_option_header ");
    var obj = new XMLHttpRequest();
    obj.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);
            var os = obj['response'];
            for (key in os) {
                var opt = null;
                opt = document.createElement('option');
                opt.value = os[key]['id'].trim();
                opt.innerText = os[key]['name'].trim();
                head.appendChild(opt);
            }

        }
    }
    obj.open("GET ".trim(), "model/return_option_data_loc.php ".trim(), true);
    obj.send();
}
window.onload = showSelect;

function Submit_Dealer() {
    var name = document.getElementById("d_name ");
    var cnic = document.getElementById("d_cnic ");
    var add = document.getElementById("d_add ");
    var mobile = document.getElementById("d_mobile ");
    var select = document.getElementById("select_option_header ");
    var btn = document.getElementById("updatesubbutton");
    var ids = document.getElementById("ids");
    var loc_id = select.options[select.selectedIndex].value;
    var date = new Date();
    var nn = date.getFullYear() + "- ".trim() + (date.getMonth() + 1) + "- ".trim() + date.getDate();

    if (name.value && cnic.value && add.value && mobile && loc_id) {
        var path = "model/addDealer.php?name=".trim() + name.value + " &cnic=".trim() + cnic.value + " &add=".trim() + add.value + " &mobile=".trim() + mobile.value + " &date=".trim() + nn + " &loc=".trim() + loc_id + "&ids=" + ids.value.trim() + "&submit=" + btn.innerText.trim();

        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                if (this.responseText.trim() == "Successful".trim()) {
                    document.getElementById("success ").style.display = "block ";
                    document.getElementById("danger ").style.display = "none ";
                    name.value = null;
                    mobile.value = null;
                    add.value = null;
                    cnic.value = null;
                    if (btn.innerText == "Update") { btn.innerText = "Submit"; }
                } else {
                    document.getElementById("danger ").style.display = "block ";
                    document.getElementById("success ").style.display = "none ";

                }
            }
        }
        obj.open("GET ".trim(), path, true);
        obj.send();
    } else {
        alert("Please fill all data or field ");
    }


}

document.getElementsByTagName("body")[0].addEventListener("click", () => {
    var div = document.getElementById("livesearch");
    var input = document.getElementById("search_suggest");
    input.value = null;
    div.innerHTML = '';

});

function User_Suggestion() {
    var input = document.getElementById("search_suggest");
    var div = document.getElementById("livesearch");
    div.innerHTML = '';
    if (input.value.trim() != " ".trim()) {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                div.innerHTML = '';
                var objs = JSON.parse(this.responseText);
                let os = objs['response'];
                if (os.length > 0) {
                    for (value of os) {
                        div.style.display = "block";
                        var link = document.createElement("a");
                        link.classList.add("link_css");
                        link.setAttribute("rel", value['id'] + "," + value['name'] + "\xa0\xa0\xa0\xa0\xa0( " + value['loc'] + " )");
                        div.appendChild(link);
                        link.innerText = value['name'] + "\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0" + "( " + value['loc'] + " )";
                        link.setAttribute("onclick", "suggest_link(this.rel)");
                        //link.setAttribute("href","journal.php?id="+value['id']+"&name="+value['name']); 
                    }
                } else {
                    div.style.display = "block";
                    div.innerText = "No suggestion";
                }
            }
        }
        obj.open("POST ".trim(), "model/suggest.php?name=" + input.value, true);
        obj.send();
    } else {
        div.style.display = "none";
    }

}

function suggest_link(value) {

    var input = document.getElementById("search_suggest");
    var div = document.getElementById("livesearch");
    input.value = null;
    div.innerHTML = '';
    var arr = value.split(",");
    var name = document.getElementById("d_name ");
    var cnic = document.getElementById("d_cnic ");
    var add = document.getElementById("d_add ");
    var mobile = document.getElementById("d_mobile ");
    var btn = document.getElementById("updatesubbutton");
    var ids = document.getElementById("ids");

    var obj = new XMLHttpRequest();
    obj.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var json = JSON.parse(this.responseText);
            if (json['id'] != "" && json["name"] != "") {
                name.value = json["name"];
                cnic.value = json["cnic"];
                add.value = json["address"];
                mobile.value = json["mobile"];
                btn.innerText = "Update";
                ids.value = json['id'];
            } else {
                window.alert("The System does not find the record");
            }
        }
    }
    obj.open("GET".trim(), "model/getDealerData.php?id=" + arr[0], true);
    obj.send();
}
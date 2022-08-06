function showSelect() {
    var head = document.getElementById("select_option_header");
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

var dates = new Date();
var nn = dates.getDate() + "-" + (dates.getMonth() + 1) + "-" + dates.getFullYear();
var todaydate = document.getElementById("for_date");
todaydate.value = nn;

function Print() {
    var print_div = document.getElementById("print_div");
    window.print();
}

function Generate() {
    if (document.getElementById('table_head') !== null) {
        document.getElementById('table_head').outerHTML = null;
    }
    var select = document.getElementById("select_option_header");
    var loc_id = select.options[select.selectedIndex].value;
    document.getElementById("for_month").value = select.options[select.selectedIndex].innerText;
    if (loc_id != "Select One.....") {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var i = 1;
                var json_object = JSON.parse(this.responseText);
                if (this.responseText != "[]") {
                    var table_head_div = document.createElement("tbody");
                    table_head_div.setAttribute('id', 'table_head');
                    var table = document.getElementById("table_data");
                    table.appendChild(table_head_div);

                    for (var value in json_object) {
                        var tr = document.createElement('tr');
                        var seq_no = document.createElement("td");
                        var name = document.createElement("td");
                        var balance = document.createElement("td");
                        var contact = document.createElement("td");
                        var credit = document.createElement("td");

                        seq_no.innerText = i;
                        name.innerText = json_object[value]['name'];
                        balance.innerText = json_object[value]['balance'];
                        contact.innerText = json_object[value]['mobile'];
                        credit.innerText = "";

                        seq_no.classList.add("basithan");
                        name.classList.add("basithan");
                        balance.classList.add("basithan");
                        contact.classList.add("basithan");
                        credit.classList.add("basithan");

                        tr.appendChild(seq_no);
                        tr.appendChild(name);
                        tr.appendChild(balance);
                        tr.appendChild(contact);
                        tr.appendChild(credit);


                        table_head_div.append(tr);

                        i++;
                    }
                } else {
                    alert('No dealer exist in this location');
                }

            }
        }
        obj.open("GET", "model/search_loc.php?id=" + loc_id, true);
        obj.send();
    } else {
        window.alert("Please select one location");
    }
}
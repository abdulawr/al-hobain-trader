function Print() {
    var print_div = document.getElementById("print_div");
    window.print();
}

function Generate() {

    var obj = new XMLHttpRequest();
    obj.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == '[]') {
                alert('No data exist for this month');
            } else {
                var table_head_div = document.createElement("tbody");
                table_head_div.setAttribute('id', 'table_head');
                var json_object = JSON.parse(this.responseText);
                var table = document.getElementById("table_data");
                table.appendChild(table_head_div);
                var i = 1;
                for (var row in json_object) {
                    var tr = document.createElement('tr');
                    var seq_no = document.createElement("td");
                    var name = document.createElement("td");
                    var cnic = document.createElement("td");
                    var mobile = document.createElement("td");
                    var address = document.createElement("td");
                    var city = document.createElement("td");
                    var date = document.createElement("td");

                    seq_no.innerText = i;
                    name.innerText = json_object[row]['name'];
                    cnic.innerText = json_object[row]['cnic'];
                    mobile.innerText = json_object[row]['mobile'];
                    address.innerText = json_object[row]['address'];
                    city.innerText = json_object[row]['loc'];;
                    date.innerText = json_object[row]['date'];

                    seq_no.classList.add("basithan");
                    name.classList.add("basithan");
                    cnic.classList.add("basithan");
                    mobile.classList.add("basithan");
                    address.classList.add("basithan");
                    city.classList.add("basithan");
                    date.classList.add("basithan");

                    tr.appendChild(seq_no);
                    tr.appendChild(name);
                    tr.appendChild(cnic);
                    tr.appendChild(mobile);
                    tr.appendChild(address);
                    tr.appendChild(city);
                    tr.appendChild(date);
                    table_head_div.append(tr);
                    i++;
                }
            }
            document.getElementById("date").valueAsDate = null;
        }
    }
    obj.open("GET", "model/getDealerList.php", true);
    obj.send();

}

window.onload = Generate;
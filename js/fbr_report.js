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
    var date = document.getElementById("date").value;
    var for_month = document.getElementById("for_month");
    if (date.trim() != " ".trim()) {
        var datevalue = date.split('-');
        var i = 1;
        for_month.value = Months(datevalue[1] - 1) + " - " + datevalue[0];

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

                    for (var row in json_object) {
                        var tr = document.createElement('tr');
                        var seq_no = document.createElement("td");
                        var name = document.createElement("td");
                        var cnic = document.createElement("td");
                        var bag_price = document.createElement("td");
                        var qty = document.createElement("td");
                        var amount = document.createElement("td");
                        var datesss = document.createElement("td");

                        if (json_object[row]['check'] == "true") {

                            tr.style.backgroundColor = "yellow";
                        } else {
                            tr.style.backgroundColor = "#ffffff";
                        }

                        seq_no.innerText = i;
                        name.innerText = json_object[row]['name'];
                        cnic.innerText = json_object[row]['cnic'];
                        bag_price.innerText = json_object[row]['b_price'];
                        qty.innerText = json_object[row]['p_ton'];
                        amount.innerText = json_object[row]['totals'];;
                        datesss.innerText = json_object[row]['date'];

                        seq_no.classList.add("basithan");
                        name.classList.add("basithan");
                        cnic.classList.add("basithan");
                        bag_price.classList.add("basithan");
                        qty.classList.add("basithan");
                        amount.classList.add("basithan");
                        datesss.classList.add("basithan");

                        name.contentEditable = "true";
                        cnic.contentEditable = "true";
                        bag_price.contentEditable = "true";
                        qty.contentEditable = "true";
                        amount.contentEditable = "true";
                        datesss.contentEditable = "true";

                        tr.appendChild(seq_no);
                        tr.appendChild(name);
                        tr.appendChild(cnic);
                        tr.appendChild(bag_price);
                        tr.appendChild(qty);
                        tr.appendChild(amount);
                        tr.appendChild(datesss);
                        table_head_div.append(tr);
                        i++;
                    }
                }
                document.getElementById("date").valueAsDate = null;
            }
        }
        obj.open("GET", "model/fbr_report.php?mm=" + datevalue[1] + "&yyyy=" + datevalue[0], true);
        obj.send();

    } else {
        alert('Please enter month and year (mm/dd/yyyy)');
    }

}

function Months(value) {
    var array = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];
    return array[value];
}
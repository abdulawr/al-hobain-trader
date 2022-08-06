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

    if (date.trim() != " ".trim()) {
        var datevalue = date.split('-');
        document.getElementById("for_month").value = Month(datevalue[1]) + "-" + datevalue[0];

        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var json_object = JSON.parse(this.responseText);
                var table_head_div = document.createElement("tbody");
                table_head_div.setAttribute('id', 'table_head');

                var table = document.getElementById("table_data");
                table.appendChild(table_head_div);
                var i = 1;
                for (var row in json_object) {
                    var tr = document.createElement('tr');
                    var seq_no = document.createElement("td");
                    var name = document.createElement("td");
                    var cnic = document.createElement("td");
                    var bag_price = document.createElement("td");
                    var qty = document.createElement("td");
                    var amount = document.createElement("td");

                    seq_no.innerText = i;
                    name.innerText = json_object[row]['name'];
                    cnic.innerText = json_object[row]['ton'];
                    bag_price.innerText = json_object[row]['total'];
                    qty.innerText = json_object[row]['credit'];
                    amount.innerText = json_object[row]['mobile'];

                    seq_no.classList.add("basithan");
                    name.classList.add("basithan");
                    cnic.classList.add("basithan");
                    bag_price.classList.add("basithan");
                    qty.classList.add("basithan");
                    amount.classList.add("basithan");

                    tr.appendChild(seq_no);
                    tr.appendChild(name);
                    tr.appendChild(cnic);
                    tr.appendChild(bag_price);
                    tr.appendChild(qty);
                    tr.appendChild(amount);

                    table_head_div.append(tr);

                    i++;
                }
                document.getElementById("date").valueAsDate = null;
            }
        }
        obj.open("GET", "model/monthly_report_generator.php?mm=" + datevalue[1] + "&yyyy=" + datevalue[0], true);
        obj.send();


        var sum_tons = document.getElementById("sum_tons");
        var sum_tons_rupees = document.getElementById("sum_tons_rupees");
        var sum_credit = document.getElementById("sum_credit");
        var sum_profit = document.getElementById("sum_profit");
        var sum_lose = document.getElementById("sum_lose");
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var json = JSON.parse(this.responseText);
                sum_lose.value = json["lose"];
                sum_profit.value = json["profit"];
                sum_tons.value = json["ton"];
                sum_credit.value = json["credit"];
                sum_tons_rupees.value = json["total_rupee"];
            }
        }
        obj.open("GET", "model/sumDataOfMonthlyReport.php?mm=" + datevalue[1] + "&yyyy=" + datevalue[0], true);
        obj.send();

    } else {
        alert('Please enter month and year (mm/dd/yyyy)');
    }

}

function Month(index) {
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
    return array[index - 1]
}
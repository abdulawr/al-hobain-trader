function Print() {
    var print_div = document.getElementById("print_div");
    window.print();
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
    var date = new Date();
    var name = document.getElementById("dealer_name");
    var generate = document.getElementById("generate_on");
    var dealer_id = document.getElementById("dealer_id");
    getContact(arr[0]);
    Balance(arr[0]);
    dealer_id.value = arr[0];
    var nn = arr[1].split("(");
    name.value = nn[0];
    var d = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
    generate.value = d;


}

function getContact(id) {
    var dealer_contact = document.getElementById("dealer_contact");
    if (id != "") {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                dealer_contact.value = this.responseText;
            }
        }
        obj.open("GET".trim(), "model/getdealerContact.php?id=" + id, true);
        obj.send();
    }
}

function Generate() {
    if (document.getElementById('table_head') !== null) {
        document.getElementById('table_head').outerHTML = null;
    }
    var id = document.getElementById("dealer_id");
    var dates = document.getElementById("date");
    var for_month = document.getElementById("for_month");

    if (id.value != "" && dates.value != "") {
        var nn = dates.value.split("-");
        for_month.value = Months(nn[1] - 1) + "  (" + nn[0] + ")";

        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != "[]") {
                    var json = JSON.parse(this.responseText);
                    var table_head_div = document.createElement("tbody");
                    table_head_div.setAttribute('id', 'table_head');
                    var table = document.getElementById("table_data");
                    table.appendChild(table_head_div);
                    for (value of json) {

                        var tr = document.createElement('tr');
                        var date = document.createElement('td');
                        var bage_price = document.createElement("td");
                        var Tons = document.createElement("td");
                        var Truck_price = document.createElement("td");
                        var Debit = document.createElement("td");
                        var time = document.createElement("td");
                        var credit = document.createElement("td");
                        var total = document.createElement("td");

                        date.innerText = value["date"];
                        bage_price.innerText = value["b_price"];
                        Tons.innerText = value["p_ton"];
                        Truck_price.innerText = value["s_truck"];
                        Debit.innerText = value["s_total"];
                        credit.innerText = value["credit"];
                        time.innerText = value["time"];
                        total.innerText = value["total_balance"];

                        date.classList.add("basithan");
                        bage_price.classList.add("basithan");
                        Tons.classList.add("basithan");
                        Truck_price.classList.add("basithan");
                        Debit.classList.add("basithan");
                        credit.classList.add("basithan");
                        time.classList.add("basithan");
                        total.classList.add("basithan");

                        tr.appendChild(date);
                        tr.appendChild(time);
                        tr.appendChild(bage_price);
                        tr.appendChild(Tons);
                        tr.appendChild(Truck_price);
                        tr.appendChild(Debit);
                        tr.appendChild(credit);
                        tr.appendChild(total);

                        table_head_div.append(tr);

                    }
                } else {
                    window.alert("No record exist for this month");
                }

            }
        }
        obj.open("GET".trim(), "model/getDealerMonthlyReport.php?id=" + id.value + "&mm=" + nn[1] + "&yy=" + nn[0], true);
        obj.send();
    } else {
        window.alert("Please Search Dealer First And Select Date And Month");
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

function Balance(id) {
    var balance = document.getElementById("dealer_bal");
    if (id.trim() != " ".trim()) {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var js = JSON.parse(this.responseText);
                if (js['response'] != null) {
                    balance.value = js['response']['balance'];
                } else {
                    balance.value = null;
                    console.log("Null");
                }


            }
        }
        obj.open("GET", "model/getBanance.php?id=" + id, true);
        obj.send();
    }

}
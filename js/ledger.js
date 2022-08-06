var date = new Date();
//var nn=date.getFullYear()+"- ".trim()+(date.getMonth()+1)+"- ".trim()+date.getDate();
document.getElementById("s_date").value = date.getDate() + '/' + (date.getMonth() + 1) + "/ " + date.getFullYear();

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
                        link.setAttribute("onclick", "link_click(this.rel)");
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

function link_click(value) {
    var input = document.getElementById("search_suggest");
    var div = document.getElementById("livesearch");
    input.value = null;
    div.innerHTML = '';
    var arr = value.split(",");
    document.getElementById("dealer_id").value = arr[0];
    document.getElementById("dealer_name").value = arr[1];
    Balance(arr[0]);

}

function Balance(id) {
    var balance = document.getElementById("balance");
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

function On_Submitt_Data() {
    var date = new Date();
    var nn = date.getFullYear() + "- ".trim() + (date.getMonth() + 1) + "- ".trim() + date.getDate();
    var dealer_id = document.getElementById("dealer_id");
    var part = document.getElementById("part");
    var credit = document.getElementById("credit");
    var balance = document.getElementById("balance");

    if (balance.value.trim != " ".trim() && dealer_id.value.trim() != " ".trim() && credit.value.trim() != " ".trim() && part.value.trim() != " ".trim()) {
        var total = balance.value - credit.value;
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                if (this.responseText.trim() == "Successful ".trim()) {
                    document.getElementById("success").style.display = "block ";
                    document.getElementById("danger").style.display = "none ";
                    dealer_id.value = null;
                    part.value = null;
                    credit.value = null;
                    balance.value = null;
                    document.getElementById("dealer_name").value = null;
                } else {
                    document.getElementById("danger").style.display = "block ";
                    document.getElementById("success").style.display = "none ";
                }
            }
        }
        obj.open("GET", "model/ledger_insert.php?id=" + dealer_id.value + "&date=" + nn + "&part=" + part.value + "&credit=" + credit.value + "&total=" + total + "&bal=" + balance.value, true);
        obj.send();
    } else {
        window.alert("Fill all the input or the user account may not exist");
    }
}


function Submit_Add_Balance() {

    var dealer_id = document.getElementById("dealer_id").value;
    var bal = document.getElementById("bal").value;
    var na = document.getElementById("dealer_name").value;

    if (dealer_id != "" && bal != "") {
        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                if (this.responseText.trim() == "Successful ".trim()) {
                    document.getElementById("success").style.display = "block ";
                    document.getElementById("danger").style.display = "none ";
                    document.getElementById("dealer_id").value = null;
                    document.getElementById("bal").value = null;
                    document.getElementById("dealer_name").value = null;

                } else {
                    document.getElementById("danger").style.display = "block ";
                    document.getElementById("success").style.display = "none ";
                }
            }
        }
        obj.open("GET", "model/InsertNewBalance.php?id=" + dealer_id + "&bal=" + bal, true);
        obj.send();
    } else {
        alert('Please search the dealer or insert balance for dealer');
    }
}
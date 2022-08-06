var date = new Date();
//var nn=date.getFullYear()+"- ".trim()+(date.getMonth()+1)+"- ".trim()+date.getDate();
document.getElementById("s_date").value = date.getDate() + '/' + (date.getMonth() + 1) + "/ " + date.getFullYear();

function P_Section_Calaculation() {
    var p_ton = document.getElementById("p_ton").value;
    var p_truck = document.getElementById("p_truck").value;
    var p_total = document.getElementById("p_total");
    var pp_total = document.getElementById("s_total");
    var lose = document.getElementById("lose");
    var profit = document.getElementById("profit");

    var truck_prin = (p_ton * 20);
    var calculation = (p_truck / 200)
    p_total.value = Math.round(calculation * truck_prin);

    var s_truck = document.getElementById("s_truck").value;
    var s_total = document.getElementById("s_total");

    var s_truck_prin = (p_ton * 20);
    var s_calculation = (s_truck / 200)
    s_total.value = Math.round(s_calculation * s_truck_prin);


    var result = pp_total.value - p_total.value;

    if (result > 0) {
        profit.value = result;
        lose.value = null;
    } else if (result < 0) {
        lose.value = Math.abs(result);
        profit.value = null;
    }

}

function S_Section_Calaculation() {
    var b_price = document.getElementById("bag_price");
    var carrage = document.getElementById("carrage");
    var s_truck = document.getElementById("s_truck");
    var tons = document.getElementById("p_ton");
    var s_total = document.getElementById("s_total");
    var lose = document.getElementById("lose");
    var profit = document.getElementById("profit");
    var p_total = document.getElementById("s_total");
    var pp_total = document.getElementById("p_total");

    var s_truck_total = (b_price.value * 200) - carrage.value;
    s_truck.value = s_truck_total;

    var s_total_price = (s_truck_total / 200) * (tons.value * 20);
    s_total.value = s_total_price;

    var result = p_total.value - pp_total.value;

    if (result > 0) {
        profit.value = result;
        lose.value = null;
    } else if (result < 0) {
        lose.value = Math.abs(result);
        profit.value = null;
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
    if (input.value.trim() != "".trim()) {
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


}


function On_Journal_Submit() {
    var dealer_id = document.getElementById("dealer_id");
    var dealer_name = document.getElementById("dealer_name");
    var qty_ton = document.getElementById("p_ton");
    var p_total = document.getElementById("p_total");
    var p_truck = document.getElementById("p_truck");
    var bag_price = document.getElementById("bag_price");
    var carrage = document.getElementById("carrage");
    var s_truck = document.getElementById("s_truck");
    var s_total = document.getElementById("s_total");
    var profit = document.getElementById("profit");
    var lose = document.getElementById("lose");
    var date = new Date();
    var nn = date.getFullYear() + "- ".trim() + (date.getMonth() + 1) + "- ".trim() + date.getDate();

    if (dealer_id.value.trim() != " ".trim() && qty_ton.value.trim() != " ".trim() && p_total.value.trim() != " ".trim() && s_total.value.trim() != " ".trim() && bag_price.value.trim() != " ".trim() && carrage.value.trim() != "".trim()) {

        var obj = new XMLHttpRequest();
        obj.onreadystatechange = function() {

            if (this.responseText.trim() == "Successful".trim()) {
                document.getElementById("success").style.display = "inline-block ";
                document.getElementById("danger").style.display = "none ";
                dealer_id.value = null;
                dealer_name.value = null;
                qty_ton.value = null;
                p_total.value = null;
                p_truck.value = null;
                bag_price.value = null;
                carrage.value = null;
                s_truck.value = null;
                s_total.value = null;
                profit.value = null;
                lose.value = null;

            } else if (this.responseText.trim() == "Faild".trim()) {

                document.getElementById("danger").style.display = "inline-block";
                document.getElementById("success").style.display = "none ";

            }
        }
        obj.open("GET", "model/journal_insert.php?id=" + dealer_id.value + "&qty_ton=" + qty_ton.value + "&p_total=" + p_total.value + "&p_truck=" + p_truck.value + "&bag_price=" + bag_price.value + "&carrage=" + carrage.value + "&s_truck=" + s_truck.value + "&s_total=" + s_total.value + "&profit=" + profit.value + "&lose=" + lose.value + "&date=" + nn, true);
        obj.send();
    } else {
        alert("Fill all inputs data");
    }

}
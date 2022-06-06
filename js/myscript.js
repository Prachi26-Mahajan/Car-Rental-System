function getAreas(city_id) {

    // alert(city_id);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("output").innerHTML = this.responseText;
        } else {
            document.getElementById("output").innerHTML = "<h1 class='text-center'>Please Wait.......</h1>";
        }
    };
    xhttp.open("GET", "sendcity_id.php?city_id=" + city_id, true);
    xhttp.send();
}

// alert(areaid);


function storeAreaid(areaid) {
    if (areaids.indexOf(areaid + "") == -1) {
        areaids = areaids + areaid + ",";
    } else {
        areaids = areaids.replace(areaid + ",", "");
    }
    alert(areaids);
    document.getElementById('tbareaid').value = areaids;
}

function add_rental_areas() {
    var city_id = document.getElementById("city_id").value;
    // alert(city_id);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('ajaxoutput').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "areas_choose_action.php?area_ids=" + areaids + "&city_id=" + city_id, true);
    xhttp.send();
}

function get_public_area() {
    var cityname, xhttp;
    cityname = document.getElementById('cityname').value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('areaname_in_div').innerHTML = this.responseText;
        } else {
            document.getElementById('areaname_in_div').innerHTML = "Getting Areas Please Wait........";
        }
    };
    xhttp.open("GET", "get_area.php?cityname=" + cityname, true);
    xhttp.send();
}

function getRental(areaid) {
    var cityid = document.getElementById('cityid').value;


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("showavailablerental").innerHTML = this.responseText;
        }

    };
    xhttp.open("GET", "getRental.php?areaid=" + areaid + "&cityid=" + cityid, true);
    xhttp.send();
}

function getReports() {
    var start_date = document.getElementById('start_date').value;
    var end_date = document.getElementById('end_date').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("showreport").innerHTML = this.responseText;
        }
    };
    if (start_date == '' && end_date == '') {
        xhttp.open("GET", "getReport.php", true);
    } else {
        xhttp.open("GET", "getReport.php?start_date=" + start_date + "&end_date=" + end_date, true);
    }
    xhttp.send();

}

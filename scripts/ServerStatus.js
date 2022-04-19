function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

var mc1 = document.querySelector("#mc1-zyalp-status");
var scp1 = document.querySelector("#scp1-zyalp-status");
var logmc1 = document.querySelector("#mc1-zyalp-logging");
var logscp1 = document.querySelector("#scp1-zyalp-logging");

readTextFile("../files/test.json", function(text){
    var data = JSON.parse(text);;
    checkStatus(data);
})

function checkStatus(data) {
    server0on = Object.values(data['servers'][0]);
    server1on = Object.values(data['servers'][1]);
    console.log(data['servers'][1])
    console.log('Server 1: ' + server0on)
    console.log('Server 2: ' + server1on)
    

    logmc1.innerHTML = 'Enabled';
    logscp1.innerHTML = 'Enabled';
    logmc1.setAttribute('class', 'true');
    logscp1.setAttribute('class', 'true');

    if (server0on == "true") {
        mc1.innerHTML = "Active";
        mc1.setAttribute("class", "true");
    }
    else {
        mc1.innerHTML = "Inactive";
        mc1.setAttribute("class", "false");
    }
    if (server1on == "true") {
        scp1.innerHTML = "Active";
        scp1.setAttribute("class", "true");
    }
    else {
        scp1.innerHTML = "Inactive";
        scp1.setAttribute("class", "false");
    }
}
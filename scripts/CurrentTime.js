window.addEventListener("load", startTime); //makes the function startTime run when the window loads

function startTime() { //function for loading the time
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var dd = today.getUTCDate();
    var mm = today.getUTCMonth() +1; //add one because January is 0, and there
    var yy = today.getUTCFullYear();
    m = checkTime(m); //calls for it to be checked with checkTime
    s = checkTime(s); 
    dd = checkTime(dd); 
    mm = checkTime(mm); 
    yy = checkTime(yy); 
    document.getElementById('hhmmss').innerHTML = //insertion to replace the tag marked with the end result of the script
    h + ":" + m + ":" + s;
    document.getElementById('ddmmyyyy').innerHTML =
    dd + "/" + mm + "/" + yy;
    var t = setTimeout(startTime, 1000); //gives the function a 1 second break
  }
function checkTime(i) { //checks all the values to see if they are less than 10, if they are it will add a zero in front of it
    if (i < 10) {i = "0" + i}; 
    return i;
}

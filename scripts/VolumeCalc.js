// Connecting to the input fields
var volField1El = document.querySelector("#volField1");
var volField2El = document.querySelector("#volField2");
var volField3El = document.querySelector("#volField3");

// Connecting to the submit field
var volButtonEl = document.querySelector("#volSubmit");

// Connecting to the result field
var volResultEl = document.querySelector("#volResult");

// Listening for the button being clicked, triggers a function
volButtonEl.addEventListener("click", mainFunc);

function mainFunc(){
    var x = Number(volField1El.value);
    var y = Number(volField2El.value);
    var z = Number(volField3El.value);
    var result = x * y * z;

    volResultEl.innerHTML = "Result: " + result;

    console.log(typeof(x))
    console.log(x)
    console.log(typeof(y))
    console.log(y)
    console.log(typeof(z))
    console.log(z)
}
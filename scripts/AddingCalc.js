      // Vi må koble oss til tekstfelt1 og 2
      var calcField1El = document.querySelector("#calcField1");
      var calcField2El = document.querySelector("#calcField2");

      // Vi må koble oss til knappen 
      var calcButtonEl = document.querySelector("#calcSubmit");

      // Vi må koble oss til resultat-elementet
      var calcResultEl = document.querySelector("#calcResult");

      // Vi må ha en lytter som venter på at vi trykker på knappen
      calcButtonEl.addEventListener("click", mainFunc);

      // Vi må ha en funksjon som utfører 

      // oppgave 1 
      function mainFunc(){
        var x = Number(calcField1El.value);
        var y = Number(calcField2El.value);
        var result = x + y;
        
        calcResultEl.innerHTML = "Result: " + result;

        console.log(typeof(x))
        console.log(x)
        console.log(typeof(y))
        console.log(y)
      }


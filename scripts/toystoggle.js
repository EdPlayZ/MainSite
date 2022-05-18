wfmselectorbtn = document.querySelector("#wfmselector");
wfmElement = document.querySelector(".WarframeSelector");
otherElement = document.querySelector(".Other");
otherbtn = document.querySelector("#Other");
array = [wfmElement, otherElement]

wfmselectorbtn.addEventListener("click", function(){toggleVis(0)});
otherbtn.addEventListener("click", function(){toggleVis(1)});

function toggleVis(num){
    console.log("Set active toy to: " + num);
    array[num].style.display = "";
    for (let i = 0; i < array.length; i++){
        if(i != num){
            array[i].style.display = "none"
        }
    }
}
window.addEventListener("load", function(){
    console.log("Page Loaded: Set active toy to wfmselector")
    for (let i = 0; i < array.length; i++){
        if(i != 0){
            array[i].style.display = "none"
        }
    }
})

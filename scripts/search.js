var uuidButton = document.querySelector(".MC-UUID-Button");
uuidButton.addEventListener("click", showUUID);
var searchBar = document.querySelector(".searchbar");


function showUUID() {
  var uuidDisplay = document.querySelector(".MC-UUID");
    if (uuidDisplay.style.display === "") {
        uuidDisplay.style.display = "inherit";
      } else {
        uuidDisplay.style.display = "";
      }
}

searchBar.addEventListener("keyup", function(e) {
  var searchTerm = e.target.value.toLowerCase();

  var wrapper = document.querySelectorAll(".wrapper")
  let array = Array.from(wrapper)
  array.forEach(function(item){
    if (item.innerText.toLowerCase().includes(searchTerm)) {
      item.style.display = ""
    } else {
      item.style.display = "none"
    }
  })
})  

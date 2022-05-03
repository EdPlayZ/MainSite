const warframelist = ["Ash Prime", "Atlas Prime", "Banshee Prime", "Baruuk", "Chroma Prime", "Ember Prime", "Equinox Prime", "Excalibur Umbra", "Frost Prime", "Gara", "Garuda", "Gauss", "Grendel", "Harrow", "Hildryn", "Hydroid Prime", "Inaros", "Ivara Prime", "Khora", "Limbo Prime", "Loki Prime", "Mag Prime", "Mesa Prime", "Mirage Prime", "Nekros Prime", "Nezha", "Nidus", "Nova Prime", "Nyx Prime", "Oberon Prime", "Octavia", "Revenant", "Rhino Prime", "Saryn Prime", "Titania Prime", "Trinity Prime", "Valkyr Prime", "Vauban Prime", "Volt Prime", "Wisp", "Wukong Prime", "Zephyr Prime"];

var selectButton = document.querySelector(".wfmSelectButton")

selectButton.addEventListener("click", warframeSelector)
console.log("Array length: " + warframelist.length)

function warframeSelector(){
    var target = document.querySelector(".selectedwarframe")
    const random = Math.floor(Math.random() * warframelist.length);
    target.innerHTML = "Selected warframe: " + warframelist[random];
}
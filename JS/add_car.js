const name_gui = document.getElementById("guitar_name").textContent;
const price_gui = document.getElementById("infoprice").textContent;
const id_gui = document.getElementById("number").textContent;
let invGuitar = {}

function AddGuitar(id, name, price){
    this.id = id;
    this.name = name;
    this.price = price;
}

let guitarAdded = new AddGuitar(id_gui, name_gui, price_gui);
console.log(guitarAdded)
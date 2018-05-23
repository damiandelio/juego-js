//Objeto tablero
var tablero = {
  ficha: document.getElementById("ficha"),
  casilla01: document.getElementById("casilla01"),
  casilla02: document.getElementById("casilla02"),
  casilla03: document.getElementById("casilla03"),
  casilla04: document.getElementById("casilla04"),
  casilla05: document.getElementById("casilla05"),
  casilla01: document.getElementById("casilla01"),
  casilla06: document.getElementById("casilla06"),
  casilla07: document.getElementById("casilla07"),
  casilla08: document.getElementById("casilla08"),
  casilla09: document.getElementById("casilla09"),
  casilla10: document.getElementById("casilla10"),
  casilla11: document.getElementById("casilla11"),
  casilla12: document.getElementById("casilla12"),
  casilla13: document.getElementById("casilla13"),
  casilla14: document.getElementById("casilla14"),
  casilla15: document.getElementById("casilla15"),
  casilla16: document.getElementById("casilla16"),
  comparar: true,

  //Mueve la ficha
  mover: function (casilla) {
    casilla.appendChild(ficha);
  },

  startGame: function () {
    if (this.comparar == true) {
      var d = document.createElement("div");
      d.setAttribute("id", "ficha");
      casilla01.appendChild(d);
      this.comparar = false;
    }
  },
}
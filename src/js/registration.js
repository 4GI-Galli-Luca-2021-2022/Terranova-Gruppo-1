window.onload = function () {
  insertNations();
};

function createAlertMessage(callingElement) {
  const parentDiv = callingElement.parentNode;

  var existingDiv = parentDiv.querySelector(".divInfo");
  if (existingDiv) {
    parentDiv.removeChild(existingDiv);
  }

  if (callingElement.value == 0) {
    var divInfo = document.createElement("div");
    divInfo.classList.add("divInfo");
    var testoAvviso = document.createElement("p");
    testoAvviso.classList.add("avviso");

    switch (callingElement.id) {
      case "nome":
      case "cognome":
      case "ragione-sociale":
      case "indirizzo":
      case "civico":
      case "cap":
        testoAvviso.innerHTML = "Inserisci un parametro valido";
        break;
      case "nazione":
        testoAvviso.innerHTML = "Seleziona una nazione";
        break;
      case "codice-fiscale":
        checkCodiceFiscale(callingElement.value, callingElement);
        break;
    }

    callingElement.style.borderColor = "red";
    divInfo.appendChild(testoAvviso);
    parentDiv.appendChild(divInfo);
  } else {
    callingElement.style.borderColor = "#73e371";
  }
}

function insertNations() {
  select = document.getElementById("nazione");
  var opt = document.createElement("option");
  fetch("../../data/nations.json")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      const paesi = data["paesi"];
      paesi.forEach((country) => {
        var opt = document.createElement("option");
        opt.value = country;
        opt.innerHTML = country;
        select.appendChild(opt);
      });
    })
    .catch((error) => {
      console.error("Error fetching JSON:", error);
    });
}

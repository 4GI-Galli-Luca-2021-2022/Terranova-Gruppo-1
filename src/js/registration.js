window.onload = function () {
  var inputs = document.querySelectorAll("input");
  inputs.forEach(function (input) {
    input.setAttribute("onfocusout", "createAlertMessage(this)");
  });
  const selects = document.querySelectorAll("select");

  selects.forEach((select) => {
    select.setAttribute("onclick", "createAlertMessage(this)");
  });
  insertNations();

  // Seleziona tutti gli elementi label nella pagina
  var labels = document.querySelectorAll("label");

  // Itera su ciascun label a partire dal sesto
  for (var i = 5; i < labels.length; i++) {
    // Imposta lo stile display su "none" solo per il sesto label in poi
    labels[i].style.display = "none";
  }
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

function checkCodiceFiscale(codice, elemento) {
  if (elemento.value.length < 16) {
    elemento.style.borderColor = "red";
    const parentDiv = elemento.parentNode;
    parentDiv.appendChild(document.createElement("br"));

    var divInfo = document.createElement("div");
    divInfo.classList.add("divInfo");

    var testoAvviso = document.createElement("p");
    testoAvviso.innerHTML = "Inserisci un codice fiscale valido ";
    testoAvviso.classList.add("avviso");
    divInfo.appendChild(testoAvviso);

    var bottoneInfo = document.createElement("button");
    bottoneInfo.addEventListener("mouseover", () => {
      showTooltip(bottoneInfo);
    });
    bottoneInfo.addEventListener("mouseout", () => {
      hideTooltip(bottoneInfo);
    });

    var img = document.createElement("img");
    img.src = "../../img/question mark.svg";
    img.style.width = "25px";
    bottoneInfo.appendChild(img);

    divInfo.appendChild(testoAvviso);
    divInfo.appendChild(bottoneInfo);
    parentDiv.appendChild(divInfo);
  } else {
    var alfabeto = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    var numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    var mesi_nascita = ["A", "B", "C", "D", "E", "H", "L", "M", "P", "R", "S", "T"];
    regole_codice = {
      0: alfabeto,
      1: alfabeto,
      2: alfabeto,
      3: alfabeto,
      4: alfabeto,
      5: alfabeto,
      6: numeri,
      7: numeri,
      8: mesi_nascita,
    };
    for (let index = 0; index < codice.length; index++) {
      const element = array[index];
    }
  }
}

function showTooltip(buttonElement) {
  var tooltipText =
    "Il codice fiscale è un codice utilizzato ai fini fiscali ed amministrativi per identificare in modo univoco i cittadini italiani. \
    E' un codice alfanumerico di 16 caratteri, generato da un semplice algoritmo ed introdotto nel 1973 da un decreto del Presidente della Repubblica (Decreto 605 del 29/09/1973) \
  Per il calcolo del codice fiscale si procede solitamente in questo modo: - le prime tre lettere del codice fiscale sono prese dal cognome (solitamente prima, seconda e terza consonante)\
  - le seconde tre dal nome (solitamente prima, terza e quarta consonante)\
  - le ultime due cifre dell'anno di nascita\
  - una lettera per il mese (A = Gennaio, B, C, D, E, H, L, M, P, R, S, T = Dicembre)\
  - il giorno di nascita: in caso di sesso femminile si aggiunge 40 per cui è chiaro che se si trova scritto, ad esempio, 52, non può che trattarsi di una donna nata il 12 del mese.\
  - Codice del comune (quattro caratteri)\
  - Carattere di controllo, per verificare la correttezza del codice fiscale.";

  var tooltipDiv = document.createElement("div");
  tooltipDiv.innerHTML = tooltipText.split("-").join("<br>-");
  tooltipDiv.style.position = "absolute";
  tooltipDiv.style.backgroundColor = "rgba(255, 255, 255, 0.9)";
  tooltipDiv.style.border = "1px solid black";
  tooltipDiv.style.padding = "5px";
  tooltipDiv.style.borderRadius = "5px";
  tooltipDiv.style.zIndex = "9999";

  var buttonRect = buttonElement.getBoundingClientRect();
  var scrollY = window.scrollY || window.pageYOffset;
  if (scrollY > window.innerHeight / 2) {
    tooltipDiv.style.top = `${buttonRect.bottom}px`;
  } else {
    tooltipDiv.style.top = `${buttonRect.top - tooltipDiv.offsetHeight}px`;
  }
  tooltipDiv.style.left = `${buttonRect.right}px`;

  document.body.appendChild(tooltipDiv);
  buttonElement._tooltipDiv = tooltipDiv;
}

function hideTooltip(buttonElement) {
  if (buttonElement._tooltipDiv) {
    buttonElement._tooltipDiv.remove();
    buttonElement._tooltipDiv = null;
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
function createCompanyInputs() {
  var checkBox = document.getElementById("check");
  var labelIva = document.getElementById("labelIva");
  var inputIva = document.getElementById("partita-iva");
  var labelRagione = document.getElementById("labelRagione");
  var inputRagione = document.getElementById("ragione-sociale");
  var labelNazione = document.getElementById("labelnazione");
  var selectNazione = document.getElementById("nazione");
  if (checkBox.checked == true) {
    labelIva.style.display = "block";
    inputIva.style.display = "block";
    labelRagione.style.display = "block";
    inputRagione.style.display = "block";
    labelNazione.style.display = "block";
    selectNazione.style.display = "block";
  } else {
    labelIva.style.display = "none";
    inputIva.style.display = "none";
    labelRagione.style.display = "none";
    inputRagione.style.display = "none";
    labelNazione.style.display = "none";
    selectNazione.style.display = "none";
  }
  const form = document.getElementById("login-form");
  const excludedNames = ["nome", "cognome", "email", "password"];

  // Ottieni tutti gli elementi del form
  const allElements = form.querySelectorAll("input");

  // Ciclo per ogni elemento
  for (const element of allElements) {
    // Controlla se il nome dell'elemento è escluso
    if (!excludedNames.includes(element.name)) {
      // Nascondi l'elemento
      element.style.display = "none";
    }
  }
}
function nextStep() {
  var nome = document.getElementById("nome").value;
  var cognome = document.getElementById("cognome").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confermapassword").value;

  if (password !== confirmPassword) {
    alert("Le password non corrispondono. Si prega di controllare e riprovare.");
    return;
  }

  // Se le password corrispondono, controlla la validità del modulo
  if (document.getElementById("login-form").checkValidity()) {
    document.getElementById("nome").style.display = "none";
    document.getElementById("cognome").style.display = "none";
    document.getElementById("email").style.display = "none";
    document.getElementById("password").style.display = "none";
    document.getElementById("confermapassword").style.display = "none";

    var labels = document.querySelectorAll("label");

    labels.forEach(function (label) {
      label.style.display = "none";
    });
    document.querySelector(".btn-login").textContent = "Registrati";
    // Seleziona tutti gli elementi label nella pagina
    var labels = document.querySelectorAll("label");

    // Itera su ciascun label a partire dal sesto
    for (var i = 5; i < labels.length; i++) {
      // Imposta lo stile display su "none" solo per il sesto label in poi
      labels[i].style.display = "block";
    }

    document.getElementById("codice-fiscale").style.display = "block";
    document.getElementById("civico").style.display = "block";
    document.getElementById("cap").style.display = "block";
    document.getElementById("localita").style.display = "block";
    document.getElementById("provincia").style.display = "block";
    document.getElementById("nazione").style.display = "block";
    document.getElementById("numero-telefonico").style.display = "block";
    document.getElementById("indirizzo").style.display = "block";
  } else {
    alert("Please fill in all required fields.");
  }
  // document.getElementById("login-form").submit();
}

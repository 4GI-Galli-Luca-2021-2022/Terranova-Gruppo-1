function submitFormRegister() {
  let nome = document.getElementById("nome").value;
  let cognome = document.getElementById("cognome").value;
  let email = document.getElementById("email").value;

  setCookie("user_info", email, nome, cognome, 1);
}
function setCookie(cname, email, name, surname, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  let cookieValue = `${cname}=${email}&name=${name}&surname=${surname};${expires};path=/`;
  document.cookie = cookieValue;
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function displayUserInfo() {
  // Retrieve user information from cookie
  let userInfo = getCookie("user_info");
  console.log("User Info:", userInfo); // Log user info for debugging
  if (userInfo) {
    let infoArr = userInfo.split("&");
    console.log("Info Array:", infoArr); // Log info array for debugging

    // Extract email, name, and surname from infoArr
    let email = infoArr[0];
    let name = infoArr[1].split("=")[1];
    let surname = infoArr[2].split("=")[1];

    // Display user information
    console.log("Email:", email); // Log email for debugging
    console.log("Name:", name); // Log name for debugging
    console.log("Surname:", surname); // Log surname for debugging

    document.getElementById("userName").innerText = name + " " + surname;
    document.getElementById("userEmail").innerText = email;
    let fullname = name + " " + surname;
    document.getElementById("userInfos").innerText = fullname;
  }
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function clearCookie() {
  document.cookie = "user_info=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.href = "../php/index.php";
}

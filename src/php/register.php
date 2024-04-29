<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/style_register.css" />
    <link rel="stylesheet" href="../css/style_components.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
      />
    <link href="https://fonts.cdnfonts.com/css/mona-sans" rel="stylesheet">
    <script src="../js/cookie.js"></script>
    <script src="../js/registration.js"></script>
  </head>
  <body>
    <div class="pageContainer">
      <img
        id="regWallpaper"
        src="../../img/registration wallpaper.jpg"
        alt=""
        />
      <div class="full-login-container">
        <div class="topnav">
          <?php require('./components/headerUs.php');?>
        </div>
        <div class="login-container">
          <div class="descrizioneSito">
            <div class="testo">
              <h2>Crea il tuo portale ClearPay</h2>
              <p style="text-align:left;">
                Inserisci i tuoi <b>dati personali</b>, e clicca su <b>"Continua"</b> <br> per
                continuare il processo di registrazione
              </p>
              <p>Con il tuo <b>nuovo account</b> potrai: </p>
            </div>
            <?php require('./components/whatCanYouDo.php');?>
          </div>
          <!-- <label for="azienda" style="margin-top: 15px"
            ><b>Sei un'azienda?</b></label
            > -->
          <!-- <input
            type="checkbox"
            name="azienda"
            id="check"
            onclick="createCompanyInputs()"
            style="margin-bottom: 30px"
            /> -->
          <script src="../js/registration.js"></script>
          <div class="form-container">
            <form
              id="login-form"
              action="../php/insert_new_users.php"
              method="post"
              >
              <div class="input-group">
                <label for="nome">Nome *</label>
                <input
                  placeholder="Mario"
                  type="text"
                  id="nome"
                  name="nome"
                  required
                  />
              </div>
              <div class="input-group">
                <label for="cognome">Cognome *</label>
                <input
                  placeholder="Rossi"
                  type="text"
                  id="cognome"
                  name="cognome"
                  required
                  />
              </div>
              <div class="input-group">
                <label for="email">Email *</label>
                <input
                  placeholder="esempio@gmail.com"
                  type="email"
                  id="email"
                  name="email"
                  required
                  />
              </div>
              <div class="input-group">
                <label for="password">Password *</label>
                <input
                  placeholder="Crea Password"
                  type="password"
                  id="password"
                  name="password"
                  required
                  />
              </div>
              <div class="input-group">
                <label for="confirmpassword">Conferma Password *</label>
                <input
                  placeholder="Conferma Password"
                  type="password"
                  id="confermapassword"
                  name="confirmpassword"
                  required
                  />
              </div>
              
              <!-- <div class="input-group">
                <label for="codice-fiscale" style="padding-right: 20px"
                  >Codice Fiscale</label
                  >
                <input
                  type="text"
                  id="codice-fiscale"
                  name="codice-fiscale"
                  maxlength="16"
                  required
                  />
              </div>
              <div class="input-group">
                <label for="indirizzo" style="padding-right: 20px">Indirizzo</label>
                <input type="text" id="indirizzo" name="indirizzo" required />
              </div>
              <div class="input-group">
                <label for="civico" style="padding-right: 20px">Civico</label>
                <input type="text" id="civico" name="civico" required />
              </div>
              <div class="input-group">
                <label for="cap" style="padding-right: 20px">CAP</label>
                <input type="text" id="cap" name="cap" required />
              </div>
              <div class="input-group">
                <label for="localita" style="padding-right: 20px">Località</label>
                <input type="text" id="localita" name="localita" required />
              </div>
              <div class="input-group">
                <label for="provincia" style="padding-right: 20px">Provincia</label>
                <input type="text" id="provincia" name="provincia" required />
              </div>
              <div class="input-group">
                <label id="labelnazione" style="padding-right: 20px">Nazione</label>
                <select id="nazione" name="nazione"></select>
              </div>
              <div class="input-group">
                <label for="numero-telefonico" style="padding-right: 20px"
                  >Numero Telefonico</label
                  >
                <input
                  type="text"
                  id="numero-telefonico"
                  name="numero-telefonico"
                  required
                  />
              </div>
              <div class="input-group">
                <label
                  id="labelIva"
                  for="partita-iva"
                  style="display: none; padding-right: 20px"
                  >Partita IVA</label
                  >
                <input
                  type="text"
                  id="partita-iva"
                  name="partita-iva"
                  style="display: none"
                  required
                  />
              </div>
              <div class="input-group">
                <label
                  for="ragione-sociale"
                  id="labelRagione"
                  style="display: none; padding-right: 20px"
                  >Ragione Sociale</label
                  >
                <input
                  type="text"
                  id="ragione-sociale"
                  name="ragione-sociale"
                  style="display: none"
                  required
                  />
              </div> -->
                
            </form>
            <button
              onclick="nextStep()"
              type="submit"
              id="submitButton"
              class="btn-login"
              >
            Continua →
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
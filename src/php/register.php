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
          <?php require('./components/headerLoggedProfile.php');?>
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
                <label for="provincia" style="padding-right: 20px">Provincia</label>
                <input type="text" id="provincia" name="provincia" placeholder="Roma" required />
              </div>
              <div class="input-group">
                <label id="labelnazione" style="padding-right: 20px">Nazione</label>
                <select id="nazione" name="nazione" style="width:270px"></select>
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
              <button
              onclick="nextStep()"
              type="submit"
              id="submitButton"
              class="btn-login"
              >
            Registrati →
            </button>
            </form>     
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
   $user_cookie_exists = isset($_COOKIE['user_info']) && !empty($_COOKIE['user_info']);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>My Profile</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link rel="stylesheet" href="../../src/css/style_myprofile.css" />
      <link rel="stylesheet" href="../css/style_components.css" />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Readex+Pro:wght@160..700&family=Source+Code+Pro&display=swap" rel="stylesheet">
      <link href="https://fonts.cdnfonts.com/css/mona-sans" rel="stylesheet">
      <script src="../js/cookie.js"></script>
      <script src="../js/myProfile.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
           displayUserInfo();
         });
      </script>
   </head>
   <body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.0.2/chartjs-plugin-annotation.min.js"></script>
      <script src="../js/smallgraph.js"></script>
      <div class="bodyContainer">
         <div class="profileandboxes">
            <?php require('./components/headerLoggedProfile.php');?>
            <div class="welcomePar">
               <div class="welcomeText">
                  <h1>Welcome <span id="userName"></span></h1>
                  <p>to your ClearPay portal, here, you can check your active plans and consumes.</p>
               </div>
               <div class="userInfo">
                  <div class="userText">
                     <p id="userEmail">lucagalli05@gmail.com</p>
                     <div class="flagtext">
                        <img src="../../img/italy.png" alt="">
                        <p id="userLocation"><span id="city">Verona, </span> <span id="country">Italia</span></p>
                     </div>
                  </div>
                  <div class="imgContainer">
                     <img src="../../img/persone/Luca Galli.png"></img>
                  </div>
               </div>
            </div>
            <div class="menuContainer">
               <div class="menuItems">
                  <h1 style="margin-top:40px;">Menu</h1>
                  <div class="topSection">
                     <div class="contractDetails">
                        <h1>Contract Details</h1>
                        <div class="blackSeparator"></div>
                        <?php require('./components/contract.php');?>
                        <div class="arrowContainer">
                           <button>←</button>
                           <button>→</button>
                        </div>
                        <div class="ButtonContainer">
                           <button class="selectContract">Select Contract</button>
                           <button class="deleteContract">Delete Contract</button>
                           <div class="graphContainer">
                           </div>
                        </div>
                     </div>
                     <div class="contractInfo">
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>20/03/2024</h1>
                           <h2>Signed</h2>
                           <p>Expiring: <span>20/06/2026</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>£15</h1>
                           <h2>Last Instalment</h2>
                           <p>Previous: <span>£20</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>40 KW/H</h1>
                           <h2>Last Consumption</h2>
                           <p>Previous Month: <span>30 KW/H</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>400 KW/H</h1>
                           <h2>Total Consumption</h2>
                           <p>Provider: <span>Eni</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>1932743943</h1>
                           <h2>Migration Code</h2>
                           <p>Provider: <span>Eni</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>£0.25 - 60 min</h1>
                           <h2>Migration Code</h2>
                           <p>Provider: <span>Eni</span></p>
                        </div>
                     </div>
                  </div>
                  <h2 style="margin-top:40px">Sign a new Contract</h2>
                  <div class="newContract">
                     <h2>Dati Intestatario</h2>
                     <div class="parameterContainer">
                        <form action="newContract.php">
                           <div class="input-group">
                              <label for="nomeIntestatario">Nome Intestatario</label>
                              <input type="text" class="input-group" name="nomeIntestatario" required>
                           </div>
                           <div class="input-group">
                              <label for="cognomeIntestatario">Cognome Intestatario</label>
                              <input type="text" class="input-group" name="cognomeIntestatario" required>
                           </div>
                           <div class="input-group">
                              <label for="codiceFiscale">Codice Fiscale</label>
                              <input type="text" class="input-group" name="codiceFiscale" required>
                           </div>
                           <div class="input-group">
                              <label for="start-date">Start Date:</label>
                              <input type="text" id="start-date" name="start-date" placeholder="Select Date" required>

                              <label for="end-date">End Date:</label>
                              <input type="text" id="end-date" name="end-date" placeholder="Select Date" required>
                              <input type="hidden" name="nomeContratto" id="nome-contratto" value="">
                           </div>
                        </form>
                     </div>
                     <div class="whiteLine"></div>
                     <div class="servicesContainer">
                        <div class="service">
                           <h4>Base Agsm</h4>
                           <img src="../../img/agsm.png" alt="">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                           <div class="calendar-container"></div>
                        </div>
                        <div class="service">
                           <h4>Base Eni</h4>
                           <img src="../../img/eni.svg" alt="">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                        <div class="service">
                           <h4>Base Engie</h4>
                           <img src="../../img/engie.svg" alt="">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                        <div class="service">
                           <h4>Base Iren</h4><br>
                           <img src="../../img/iren.png" style="width:70px; height:45px">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                     </div>
                     <div class="servicesContainer2">
                     <div class="service">
                           <h4>Advanced Agsm</h4>
                           <img src="../../img/agsm.png" alt="">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                        <div class="service">
                           <h4>Advanced Eni</h4>
                           <img src="../../img/eni.svg" alt="">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                        <div class="service">
                           <h4>Advanced Engie</h4>
                           <img src="../../img/engie.svg" alt="">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                        <div class="service">
                           <h4>Advanced Iren</h4>
                           <img src="../../img/iren.png" style="width:70px; height:45px">
                           <p style="margin-top:20px">Cost per min: <b>0.60£</b></p>
                           <p><b>Type:</b> Gas & Energy</p>
                           <button class="sign-button">Sign</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <script>
            $(function() {
               $("#start-date").datepicker({
                  dateFormat: 'yy-mm-dd',
                  onSelect: function(selectedDate) {
                  $("#end-date").datepicker("option", "minDate", selectedDate);
                  }
               });
               $("#end-date").datepicker({
                  dateFormat: 'yy-mm-dd',
                  onSelect: function(selectedDate) {
                  $("#start-date").datepicker("option", "maxDate", selectedDate);
                  }
               });
            });
         </script>
      </div>
   </body>
</html>
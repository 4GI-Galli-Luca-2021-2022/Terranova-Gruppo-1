<?php
   $user_cookie_exists = isset($_COOKIE['user_info']) && !empty($_COOKIE['user_info']);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link rel="stylesheet" href="../../src/css/style_home.css" />
      <link rel="stylesheet" href="../css/style_components.css" />
      <link href="https://fonts.cdnfonts.com/css/mona-sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
   </head>
   <body>
      <div class="firstPage">
         <div class="navandbanner">
            <?php if ($user_cookie_exists): ?>
            <?php require('./components/headerLoggedIndex.php');?>
            <?php else: ?>
            <?php require('./components/headerHome.php');?>
            <?php endif; ?>
            <div class="banner">
               <h1 class="title"><span class="clear">Clear</span>Pay</h1>
               <h3 class="subtitle">
                  Italy's <span class="clear">1#</span> Leading Gas & <br />
                  Energy Provider
               </h3>
               <h3 class="subtitle2">
                  We are <b>ClearPay SRL</b>, with more than 20 years of experience,<br />
                  every year, we are able to deliver the best provision of gas and<br />
                  energy across the entire Italian region.
               </h3>
               <div class="collaborators">
                  <img id="eni" src="../../img/eni.svg" alt="" />
                  <img src="../../img/agsm.png" alt="" />
                  <img src="../../img/engie.svg" alt="" />
                  <img src="../../img/wekiwi.png" alt="" />
                  <img src="../../img/sorgenia.svg" alt="" />
                  <img src="../../img/iren.png" alt="" />
               </div>
            </div>
         </div>
         <img id="people1" src="../../img/people collaborating home (1).png" alt="" />
      </div>
      <div class="second-content" id="second-content">
         <h1 class="goal">
            The <span class="highlight">Greener</span> The <span class="highlight">Better</span>
         </h1>
         <p id="goal_p">
            Our company is committed to promoting green energy solutions and <br />
            actively participating in the global effort to mitigate emissions,<br />
            promoting a sustainable future for generations to come.
         </p>
      </div>
      <div class="services-container">
         <div class="third-content">
            <a id="services">Our Services</a>
            <p id="subservice">Don't worry, everything you need <span>is <b>right here.</b></span></p>
         </div>
         <div class="threeBoxContainer">
            <div class="cardContainer" id="card1">
               <h1 class="cardTitle">Provision</h1>
               <p class="cardParagraph">
                  Energizing Futures:
                  <br>Your Trusted Gas and Energy Provider.
               </p>
               <div class="bottomPart">
                  <p class="from">From 15£ KW/h</p>
                  <p class="providers" >Providers :</p>
               </div>
            </div>
            <div class="cardContainer" id="card2">
               <h1 class="cardTitle">Provision</h1>
               <p class="cardParagraph">
                  Energizing Futures:
                  <br>Your Trusted Gas and Energy Provider.
               </p>
               <div class="bottomPart">
                  <p class="from">From 15£ KW/h</p>
                  <p class="providers" >Providers :</p>
               </div>
            </div>
            <div class="cardContainer" id="card3">
               <h1 class="cardTitle">Provision</h1>
               <p class="cardParagraph">
                  Energizing Futures:
                  <br>Your Trusted Gas and Energy Provider.
               </p>
               <div class="bottomPart">
                  <p class="from">From 15£ KW/h</p>
                  <p class="providers" >Providers :</p>
               </div>
            </div>
         </div>
         <div class="whiteLine">
         </div>
         <div class="goalSection">
            <div class="gradient">
            </div>
            <div class="goals">
               <h1>You thought we forgot about<br>  Global Goals 2030? <br> <span>Absolutely not.</span></h1>
               <p>
                  As a leading provider of energy solutions, our company offers <br> comprehensive gas and energy provision services,
                  ensuring reliable <br> access to essential resources for our customers' needs. <br>
                  Energizing Futures: Your Trusted Gas and Energy Provider.
               </p>
               <a href="https://www.globalgoals.org/goals/">Learn More</a>
            </div>
            <img src="../../img/agenda.jpg" alt="">
         </div>
      </div>
      <div class="cards">
      </div>
      <div id="div_contacts">
         <div class="contactsParagraph">
            <h1 class="title2"><span class="clear">Clear</span>Pay</h1>
            <!-- <h2 class="contacts">Have a request? <br> Use our enquiry system to send us a message!</h2> -->
         </div>
         <div class="enquiryandteam">
            <!-- <form action="sendEnquiry.php" class="enquiryForm">
               <div class="firstEnquiry">
                  <label for="nomeE">Name *</label>
                  <input type="text" name="nomeE"></input>
                  <label for="cognomeE">Surname *</label>
                  <input type="text" name="cognomeE"></input>
                  <label for="emailE">Email *</label>
                  <input type="text" name="emailE"></input>
                  <label for="emailE">Phone Number*</label>
                  <input type="text" name="emailE"></input>
                  <button type="submit"> Send </button>
               </div>
               <div class="secondEnquiry">
                  <label for="textE">Message *</label>
                  <textarea name="messageE" maxlength="500" rows="5" cols="50"></textarea>
               </div>
            </form> -->
            <div class="teamContainer">
               <h2>Our Team</h2>
               <div class="team">
                  <div class="team_member">
                     <div class="memberPicture">
                        <img src="../../img/persone/Luca Galli.png" alt="">
                     </div>
                     <div class="memberInfo">
                        <h2>Luca Galli</h2>
                        <p><b>Role:</b> Project Manager</p>
                     </div>
                  </div>
                  <div class="team_member">
                     <div class="memberPicture">
                        <img src="../../img/persone/user to add.svg" alt="">
                     </div>
                     <div class="memberInfo">
                        <h2>Gabriele Massella</h2>
                        <p><b>Role:</b> ProductManager</p>
                     </div>
                  </div>
                  <div class="team_member">
                     <div class="memberPicture">
                        <img src="../../img/persone/user to add.svg" alt="">
                     </div>
                     <div class="memberInfo">
                        <h2>Alessandro Bonfante</h2>
                        <p><b>Role:</b> Application Architecture Design </p>
                     </div>
                  </div>
                  <div class="team_member">
                     <div class="memberPicture">
                        <img src="../../img/persone/user to add.svg" alt="">
                     </div>
                     <div class="memberInfo">
                        <h2>Riccardo Sporis</h2>
                        <p><b>Role:</b> Software Development</p>
                     </div>
                  </div>
                  <div class="team_member">
                     <div class="memberPicture">
                        <img src="../../img/persone/user to add.svg" alt="">
                     </div>
                     <div class="memberInfo">
                        <h2>Amir Pecora</h2>
                        <p><b>Role:</b> Test & Development</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <p>&copy; 2024 ClearPay Srl. All rights reserved. | Verona, 37138 </p>
      </footer>
   </body>
</html>
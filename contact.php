<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="shortcut icon" href="img/illustraties/png/Sunny_socks_green.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactpagina.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <?php
        require_once 'components/header.html';
        require_once 'components/chatbox/chatbox-component.php';
        renderChatbox();
    ?>
    <body>
    
        <?php
        require_once 'components/header.html'
        ?>
    
    <div class="banner">
        <h1>Neem contact met ons op</h1>
        <p>Heeft u een vraag of opmerking? Schrijf ons gewoon een bericht!</p>
    </div>
    <div class="content">
        <div class="formulier">
            <div class="contactblok">
                <div class="goedeinvoer">
                  <div class="naam">
                  <div class="voornaam">
                    <label for="voornaam">Voornaam</label>
                    <input type="text" placeholder="|" name="voornaam" id="voornaam">
                  </div>
                  <div class="achternaam">
                    <label for="achternaam">Achternaam</label>
                    <input type="text" placeholder="doe" name="achternaam" id="achternaam">
                 </div>
                </div>
                <div class="overig">
                 <div class="email">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                 </div>
                 <div class="telefoonnummer">
                    <label for="telefoonnummer">Telefoon Nummer</label>
                    <input type="tel" placeholder="+31 6 53254352" name="telefoonnummer" id="telefoonnummer">
                 </div>
                </div>
                    <h3><b>Onderwerp Selecteren?</b></h3>
                <div class="onderwerp">
                    <div class="betaling">
                        <input type="radio" name="onderwerp" id="betaling">
                        <label for="betaling">Betaling</label>
                    </div>
                    <div class="bezorging">
                        <input type="radio" name="onderwerp" id="bezorging">
                        <label for="bezorging">Bezorging</label>
                    </div>
                    <div class="overige">
                        <input type="radio" name="onderwerp" id="overige">
                        <label for="overige">Overige</label>
                    </div>
                    <div class="overigen">
                        <input type="radio" name="onderwerp" id="overigen">
                        <label for="overige">Overige</label>
                    </div>
                </div>
                    <div class="opmerking">
                        <label for="opmerking">Opmerking</label>
                        <input type="text" placeholder="Schrijf uw bericht hier" id="opmerking" name="opmerking">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Verstuur Bericht">
                    </div>
                </div>
        </div>
            

            <div class="informatie">
                <h2>Contactgegevens</h2>
                <p>Heeft u een vraag? We helpen u graag verder.</p>
                <div class="sunnygegevens">
                    <div class="contactinfo">
                        <img src="../sunny_socks_web_development/img/contact/bxs_phone-call.png">
                        <p>+31-6-12345678</p>
                    </div>
                    <div class="contactinfo">
                        <img src="../sunny_socks_web_development/img/contact/ic_sharp-email.png">
                        <p>email@gmail.com</p>
                    </div>
                    <div class="contactinfo">
                        <img src="../sunny_socks_web_development/img/contact/carbon_location-filled.png">
                        <p>Emmen, 1111AA</p>
                    </div> 
                </div>
                <div class="platform-imgs">
                    <div class="socials">
                    <img src="../sunny_socks_web_development/img/contact/Group 27.png">
                    <img src="../sunny_socks_web_development/img/contact/Group 26.png">
                    <img src="../sunny_socks_web_development/img/contact/Group 25.png">
                    </div>
                    <div class="eclipse">
                    <img src="../sunny_socks_web_development/img/contact/beter.png">
                    </div>
                </div>                           
            </div>            
        </div>
    </div>
    
<footer class= "site-footer">
    
        <div class= "footer-content">
            <div class="footerlogo">
                <img src="../sunny_socks_web_development/img/Logos/png/sunny_logos_blue.png" alt="Logo blue"> 
         

            <div class= "socialmedia">

                <ul class="social-icons">
                    <li class="active"><a href="https://www.facebook.com/register/?lang=nl"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://x.com/"><i class="fab fa-x-twitter"></i></a></li>
                    <li><a href="https://nl.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

            </div>

            <div class=" Snellelinks">
                
                <ul class="links">
                    <h3>Snelle links</h3>
                    <li>Home</li>
                    <li><a href="duurzaamheid.php">Duurzaamheid</a></li>
                    <li><a href="overzicht.php">Collectie</a></li>
                    <li><a href="over_ons.php">Over ons</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="campagne.php">Campagne</a></li>
                    <li><a href="media.zip" download>Downloadbare Media</a></li>
                </ul>

            </div>


            <div class="Helpcentrum">
                
                <ul class="centrum">
                    <h3>Helpcentrum</h3>
                    <li>Betalingen</li>
                    <li>Verzending</li>
                    <li>Productretouren</li>
                    <li>FAQs</li>
                    <li>Afrekenen</li>  
                </ul>

            </div>


            <div class="Onzenieuwsbrief">
                <h3>Onze Nieuwsbrief</h3>
                <p>Schrijf u in voor onze nieuwsbrief en blijf op de hoogte van onze fantastische aanbiedingen.</p>

                <div class="email-wrapper">
                    <input type="email" placeholder="Voer uw e-mailadres in"></i>
                    <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                </div>


            </div>

        </div>

        <hr>

        <p class="footercopy">
         2025 Sunny Socks. All rights reserved.
        </p>


</footer>

</body>
</html>
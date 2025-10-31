<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpagina</title>
    <link rel="shortcut icon" href="img/illustraties/png/Sunny_socks_green.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/stylefooter.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <?php
        require_once 'components/header.html';
    ?>
     <main>

        <div class="carrousel">
            <div class="carrousel-track">
                <div class="blauwstukje" id="blauw">
                    <div class="image">
                        <img src="./img/catalogus/catalogus/Sunny_socks_blue.jpg" alt="blueimg">
                    </div>
                    <div class="info">
                        <p class="procent">BESPAAR 10 - 20%</p>
                        <p>Beste Verkochte <br> Sokken.</p>
                        <button class="check">BEKIJK HIER<img src="./img/index-img/arrow-sm-rightwhite-svgrepo-com.svg" alt="pijl"></button>
                    </div>
                </div>
                <div class="Rozestukje" id="Roze">
                    <div class="image">
                        <img src="./img/catalogus/catalogus/Sunny_socks_pink.jpg" alt="pinkimg">
                    </div>
                    <div class="info">
                        <p class="procent">BESPAAR 10 - 20%</p>
                        <p>Beste Verkochte <br> Sokken.</p>
                        <button class="check">BEKIJK HIER<img src="./img/index-img/arrow-sm-rightwhite-svgrepo-com.svg" alt="pijl"></button>
                    </div>
                </div>
                <div class="Roodstukje" id="rood">
                    <div class="image">
                        <img src="./img/catalogus/catalogus/Sunny_socks_red.jpg" alt="redimg">
                    </div>
                    <div class="info">
                        <p class="procent">BESPAAR 10 - 20%</p>
                        <p>Beste Verkochte <br> Sokken.</p>
                        <button class="check">BEKIJK HIER<img src="./img/index-img/arrow-sm-rightwhite-svgrepo-com.svg" alt="pijl"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="categorie">
            <div class="categorieën">
                <p>Categorieën</p>
            </div>
            <div class="Soortensokken">
                <div class="blauw">
                    <img src="./img/illustraties/png/Sunny_socks_Blue.png" alt="blauwesok">
                    <p>Korte Sokken</p>
                </div>
                <div class="groen">
                    <img src="./img/illustraties/png/Sunny_socks_Green.png" alt="groenesok">
                    <p>Sneakersokken</p>
                </div>
                <div class="oranje">
                    <img src="./img/illustraties/png/Sunny_socks_Orange.png" alt="oranjesok">
                    <p>Sportsokken</p>
                </div>
                <div class="roze">
                    <img src="./img/illustraties/png/Sunny_socks_Pink.png" alt="rozesok">
                    <p>Kniekousen</p>
                </div>
                <div class="geel">
                    <img src="./img/illustraties/png/Sunny_socks_Yellow.png" alt="gelesok">
                    <p>Beenwarmers</p>
                </div>
            </div>
        </div>

        <div class="Topdeals">
            <div class="selectie">
                <div class="title">
                    <h2>Topdeals</h2>
                </div>
                <div class="bekijkhier">
                    <button class="bekijk">BEKIJK HIER<img src="./img/index-img/arrow-sm-right-svgrepo-com.svg" alt="pijl"></button>
                </div>
                <div class="selectie1">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel1-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie2">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel2-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie3">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel3-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie4">
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_green.png" alt="imgsocksgreen">
                </div>
                <div class="sel4-content">
                    <p>Groene sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
            </div>
        </div>

        <div class="MeestVerkocht">
            <div class="selectie">
                <div class="title">
                    <h2>Meest verkocht</h2>
                </div>
                <div class="bekijkhier">
                    <button class="bekijk">BEKIJK HIER<img src="./img/index-img/arrow-sm-right-svgrepo-com.svg" alt="pijl"></button>
                </div>
                <div class="selectie1">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel1-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie2">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel2-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie3">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel3-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie4">
                    <button class="Nieuw">Nieuw</button>
                   <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel4-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepo-com.svg" alt="favorietimg"></button>
                </div>
            </div>
        </div>

        <div class="PopulaireProducten">
            <div class="selectie">
                <div class="title">
                    <h2>Populaire Producten</h2>
                </div>
                <div class="bekijkhier">
                    <button class="bekijk">BEKIJK HIER<img src="./img/index-img/arrow-sm-right-svgrepo-com.svg" alt="pijl"></button>
                </div>
                <div class="selectie1">
                    <button class="Nieuw">Nieuw</button>
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_blue.png" alt="imgsocksblue">
                </div>
                <div class="sel1-content">
                    <p>Blauwe sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepoblack-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie2">
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_green.png" alt="imgsocksgreen">
                </div>
                <div class="sel2-content">
                    <p>Groene sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepoblack-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie3">
                    <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_green.png" alt="imgsocksgreen">
                </div>
                <div class="sel3-content">
                    <p>Groene sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepoblack-com.svg" alt="favorietimg"></button>
                </div>
                <div class="selectie4">
                   <img src="./img/verpakking/packaging/png/catalogus_sokken_uni_green.png" alt="imgsocksgreen">
                </div>
                <div class="sel4-content">
                    <p>Groene sokken</p>
                    <img src="img/index-img/Schermafbeelding 2025-10-28 092333.png" class="sterimg"alt="sterrenimg">
                    <p class="price">€7.99</p>
                    <button class="winkelwagen">+ WINKELWAGEN</button>
                    <button class="favorite"><img src="./img/index-img/heart-svgrepoblack-com.svg" alt="favorietimg"></button>
                </div>
            </div>
        </div>

    <div class='index-election-container'>
        <p class='index-election-title'>Limited Edition Sokkenverkiezing 2025</p>
        <p class='index-election-subtext'>Jij bepaalt welk ontwerp we uitbrengen! 
            Stem op jouw favoriete Limited Edition ontwerp en help ons het volgende iconische sokkendesign te kiezen.</p>
        <div class='index-election-countdown-container'>
            <p class='index-election-countdown-text'>Stemmen eindigt over:</p>
            <div class='timer-box-days'>
                <p class='timer-days' id='timer-days'></p>
                <p class='timer-time-text'>DAGEN</p>
            </div>
            <div class='timer-box-hours'>
                <p class='timer-hours' id='timer-hours'></p>
                <p class='timer-time-text'>UREN</p>
            </div>
            <div class='timer-box-minutes'>
                <p class='timer-minutes' id='timer-minutes'></p>
                <p class='timer-time-text'>MIN</p>
            </div>
            <div class='timer-box-seconds'>
                <p class='timer-seconds' id='timer-seconds'></p>
                <p class='timer-time-text'>SEC</p>
            </div>
        </div>
    </div>

        <div class="quotes">
            <div class="imagequotes">
                <img src="./img/index-img/quotes-svgrepo-com.svg" alt="imgquotes">
            </div>
            <div class="quotes-content">
                <p>Positivity is part of our DNA. Sunny likes to look on the brightside. Every problem is an opportunity to come up with a solution. </p>
                <h6>- Sunny Socks</h6>
            </div>
        </div>

        <div class="korting"> 
            <div class="imagesun">
                <img src="../sunny_socks_web_development/img/index-img/sun-svgrepo-com.svg" alt="imagesun">
            </div>
            <div class="contentkorting">
                <p>Ontvang 20% Korting</p>
                <p>Op</p>
                <p>Uw Eerste Aankoop</p>
                <div class="input">
                    <form class='form-index'>
                        <label for="email"></label>
                        <input type="text" name="email" placeholder="Voer Uw Emailadres in"><br>
                        <label for="password"></label>
                        <input type="password" name="password" placeholder="Maak een Wachtwoord aan"><br>
                        <label for="password repeat"></label>
                        <input type="password" name="password repeat" placeholder="Wachtwoord Herhalen"><br>
                        <input type="submit" id="register" name="register" Value="REGISTREER HIER">
                    </form>
                </div>
            </div>
            <div class="imageshop">
                <img src="../sunny_socks_web_development/img/index-img/shopsale.png" alt="imageshop">
            </div>
        </div>

        <div class="Info">
            <div class="contentinfo">
                <div class="Verzending"> 
                    <div class="Verzendingimg">
                        <img src="../sunny_socks_web_development/img/index-img/verzending.png" alt="verzendingimg">
                    </div>
                    <h3>Gratis Verzending</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="Comfort"> 
                    <div class="Comfortimg">
                        <img src="../sunny_socks_web_development/img/index-img/comfort.png" alt="Comfortimg">
                    </div>
                    <h3>Comfort Dat Houdt</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="Kwaliteitsgarantie">
                    <div class="Kwaliteitimg">
                        <img src="../sunny_socks_web_development/img/index-img/kwaliteit.png" alt="Kwaliteitimg">
                    </div> 
                    <h3>Kwaliteitsgarantie</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="Duurzaam"> 
                    <div class="Duurzaamimg">
                        <img src="../sunny_socks_web_development/img/index-img/duurzaam.png" alt="Duurzaamimg">
                    </div>
                    <h3>Duurzame Materialen</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>  
            </div>
        </div>

        <div class="reviews-content">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
        </div>

    </main>

    <?php
        require_once 'components/footer.html';
    ?>
</body>
    <script src="js/campagne/vote-timer.js"></script>
</html>
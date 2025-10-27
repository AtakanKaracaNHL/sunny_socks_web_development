<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpagina</title>
    <link rel="shortcut icon" href="img/illustraties/png/Sunny_socks_green.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/stylefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <?php
        require_once 'components/header.html';
    ?>
    
     <main>

        <div class="korting"> 
            <div class="imagesun">
                <img src="../sunny_socks_web_development/img/index-img/sun-svgrepo-com.svg" alt="imagesun">
            </div>
            <div class="contentkorting">
                <p>Ontvang 20% Korting</p>
                <p>Op</p>
                <p>Uw Eerste Aankoop</p>
                <div class="input">
                    <form>
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

    </main>

    <?php
        require_once 'components/footer.html';
    ?>
</body>
</html>
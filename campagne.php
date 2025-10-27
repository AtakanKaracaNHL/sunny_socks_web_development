<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campagne</title>
    <link rel="shortcut icon" href="img/illustraties/png/Sunny_socks_green.png"/>
    <link rel="stylesheet" href="./css/stylefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="css/campagne.css">
</head>
<body>
    <?php
        require_once 'components/header.html';
    ?>

    <main>
        <div class='title-container'> 
            <div class='title-content'>
                <p class='title'>Sokkenverkiezing 2025</p>
                <p class='title-text'> Welkom bij onze jaarlijkse Limited Edition Sokkenverkiezing!
                                       Jouw stem bepaalt welk unieke ontwerp wij uitbrengen als onze exclusieve 2025 collectie.
                                       Elk ontwerp is zorgvuldig ontworpen door onze community. 
                </p>
            </div>
        </div>
        <div class='timer-container'>
            <div class='timer-title'>Stemmen eindigt over:</div>
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
        <div class='election-container'>
            <div class='election-content'>
                <img class='election-vector' src="img/campagne/Vector.png" alt="Info.png">
                <p class='election-text-title'>Hoe werkt de verkiezing?</p>
                <p class='election-text-step-1'>1. Bekijk de ontwerpen</p>
                <p class='election-text-step-1-desc'>Scroll door alle unieke sokontwerpen hieronder en bekijk de details van elk ontwerp.</p>
                <p class='election-text-step-2'>2. Stem op je favoriet</p>
                <p class='election-text-step-2-desc'>Scroll door alle unieke sokontwerpen hieronder en bekijk de details van elk ontwerp.</p>                
                <p class='election-text-step-3'>3. Deel met je vrienden</p>
                <p class='election-text-step-3-desc'>Scroll door alle unieke sokontwerpen hieronder en bekijk de details van elk ontwerp.</p>                
                <p class='election-text-step-4'>4. Krijg korting</p>    
                <p class='election-text-step-4-desc'>Wie stemt krijgt 15% korting op de pre-order van het winnende ontwerp!</p>                                                            
            </div>
        </div> 
        <div class='vote-container'>
            <div class='vote-content'>
                <p class='vote-title'>ALLE ONTWERPEN</p>
            </div>
        </div>
    </main>
    <script src="js/campagne/vote-timer.js"></script>

    <?php
        require_once 'components/footer.html';
    ?>
</body>
</html>
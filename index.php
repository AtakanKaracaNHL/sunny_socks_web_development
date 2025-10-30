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
</head>
<body>
    <?php
        require_once 'components/header.html';
    ?>

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
    
    <?php
        require_once 'components/footer.html';
    ?>
</body>
    <script src="js/campagne/vote-timer.js"></script>
</html>
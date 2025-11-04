<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="./css/404.css">
    <link rel="shortcut icon" href="img/404-img.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/stylefooter.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <?php
        require_once 'components/header.html';
        require_once 'components/chatbox/chatbox-component.php';
        renderChatbox(); 
    ?>

    <main>
        <h1>Helaas is de pagina niet gevonden</h1>
        <img src="./img/404-img.png" alt="404 img">
        <div class="home-link">
            <a href="index.php"><i class="fa-solid fa-backward"></i> Ga terug naar de home pagina</a>
        </div>
    </main>

    <?php
        require_once 'components/footer.html';
    ?>
</body>
</html>
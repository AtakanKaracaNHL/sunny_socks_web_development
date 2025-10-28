<?php
    $color = filter_input(INPUT_GET, "color");
    $uni = filter_input(INPUT_GET, "uni");
    $price = filter_input(INPUT_GET, "price");
    $translateColor = ["blue" => "Blauwe","green" => "Groene","pink" => "Roze","red" => "Rode","yellow" => "Gele"];
    $translateColor2 = ["blue" => "Blauw","green" => "Groen","pink" => "Roze","red" => "Rood","yellow" => "Geel"];
    $size = "S";

    if(empty($color)){
        $color = "blue";
        $uni = 1;
        $price = 9.99;
    }

    $src = "img\catalogus\catalogus\cut\Sunny_socks_";
    $name = $translateColor[$color];
    if($uni == 1){
        $src .= "uni_";
        $name .= " Uni";
    }
    $src .= $color;
    $src .= ".jpg";
    $name .= " Sokken";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <link rel="shortcut icon" href="img/illustraties/png/Sunny_socks_green.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-detail.css">
</head>
<body>
    <?php
        require_once 'components/header.html';
    ?>
    <div class="title">
        <h1>
            product
        </h1>
    </div>
    <div class="grid-5">
        <img src="<?php echo $src;?>" alt="hi" class=display_img>
        <div class="info">
            <h2>Sunny socks</h2>
            <div class="spacebetween">
                <h1><?php echo $name;?></h1>
                <div>
                    <img src="img\illustraties\png\Heart.png" alt="">
                </div>
            </div>
            <img src="img/sterren.png" alt="Sterren">
            <h3>€ <?php echo $price;?></h3>
            <div class="maat">
                <h3 class="light">Maat: <?php echo $size;?></h3>
                <button>S</button>
                <button>M</button>
                <button>L</button>
                <button>XL</button>
            </div>
            <div class="colors">
                <h3 class="light">Kleur: <?php echo $translateColor2[$color];?></h3>
                <a href="detail.php?color=blue&uni=<?php echo $uni;?>&price=<?php echo $price;?>"><button class="blue"></button></a>
                <a href="detail.php?color=green&uni=<?php echo $uni;?>&price=<?php echo $price;?>"><button class="green"></button></a>
                <a href="detail.php?color=pink&uni=<?php echo $uni;?>&price=<?php echo $price;?>"><button class="pink"></button></a>
                <a href="detail.php?color=red&uni=<?php echo $uni;?>&price=<?php echo $price;?>"><button class="red"></button></a>
                <a href="detail.php?color=yellow&uni=<?php echo $uni;?>&price=<?php echo $price;?>"><button class="yellow"></button></a>
            </div>
            <div class="amount">
                <h3 class="light">Hoeveelheid</h3>
                <div class="spacebetween">
                    <button class="amountButton">
                        <h2 class="thin">-</h2>
                        <h2 class="thin">1</h2>
                        <h2 class="thin">+</h2>
                    </button>
                    <button class="Winkelwagen"><h3 class="thin">Voeg toe aan winkelwagen</h3></button>
                </div>
            </div>
            <div>
                <p><img src="img\illustraties\png\Truck.png" alt="Truck" class="small_Img"><b>Geschatte levering:</b> 1 tot 2 werkdagen</p>
                <b><img src="img\illustraties\png\Box.png" alt="Box" class="small_Img">Gratis verzending en retourneren: op alle bestellingen boven de € 30</b>
            </div>
        </div>
    </div>
    <div class="spacearound">
        <div>
            <div class="round-border"><img src="img\illustraties\png\shopping-cart.png" alt="Shopping-cart"></div>
            <h1 class="thin">Gratis verzending</h1>
            Lorem ipsum dolor sit amet, consectetur adipi elit.
        </div>
        <div>
            <div class="round-border"><img src="img\illustraties\png\sock.png" alt="Sock"></div>
            <h1 class="thin">Comfort dat houdt</h1>
            Lorem ipsum dolor sit amet, consectetur adipi elit.
        </div>
        <div>
            <div class="round-border"><img src="img\illustraties\png\Star.png" alt="Star"></div>
            <h1 class="thin">Kwaliteitsgarantie</h1>
            Lorem ipsum dolor sit amet, consectetur adipi elit.
        </div>
        <div>
            <div class="round-border"><img src="img\illustraties\png\recycle.png" alt="Recycle"></div>
            <h1 class="thin">duurzame Materialen</h1>
            Lorem ipsum dolor sit amet, consectetur adipi elit.
        </div>
    </div>
    <link rel="stylesheet" href="./css/stylefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/header.css">
    <?php
        require_once 'components/footer.html';
    ?>
</body>
</html>
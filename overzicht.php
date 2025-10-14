<?php
    $color = ["blue","green","pink","red","yellow","blue","green","pink","red","yellow"];
    $src = ["\Sunny_socks_blue","\Sunny_socks_green","\Sunny_socks_pink","\Sunny_socks_red","\Sunny_socks_yellow","\Sunny_socks_uni_blue","\Sunny_socks_uni_green","\Sunny_socks_uni_pink","\Sunny_socks_uni_red","\Sunny_socks_uni_yellow"];
    $name = ["Blauwe sokken","Groene sokken","Roze sokken","Rode sokken","Gele sokken","Blauwe uni sokken","Groene uni sokken","Roze suni okken","Rode uni sokken","Gele uni sokken"];
    $price = ["7,99","9,99","4,99","5,99","8,99","9,99","6,99","7,99","8,99","5,99"];
    $uni = [0,0,0,0,0,1,1,1,1,1];
    $filterColor = filter_input(INPUT_GET,"color")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overzicht</title>
    <link rel="shortcut icon" href="img/illustraties/png/Sunny_socks_green.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-overzicht.css">
</head>
<body>
    <div class="grid-7">
        <div class="title">
            <h1>
                Alle producten
            </h1>
        </div>
        <div class="filters">
            <h2>Filters</h2>
            <h3>Maat</h3>
            <div class="maat">
                <button>S</button>
                <button>M</button>
                <button>L</button>
                <button>XL</button>
            </div>
            <h3>kleuren</h3>
            <div class="colors">
                <a href="overzicht.php?color=blue"><button class="blue"></button></a>
                <a href="overzicht.php?color=green"><button class="green"></button></a>
                <a href="overzicht.php?color=pink"><button class="pink"></button></a>
                <a href="overzicht.php?color=red"><button class="red"></button></a>
                <a href="overzicht.php?color=yellow"><button class="yellow"></button></a>
            </div>
            <h3>collections</h3>
            <p><a href="overzicht.php">Alle Producten</a></p>
            <p>Best Verkocht</p>
            <p>Nieuwe Sokken</p>
        </div>
        <div class="col-3_span-3">
            <?php
                for($i = 0; $i < count($color); $i++){
                    //first image links to detail.php?color=blue&uni=0, use get on detail page
                    if(empty($filterColor) || $color[$i] == $filterColor){
                        echo '
                            <div class="overzicht">
                                <a href="detail.php?color=' . $color[$i] . '&uni=' . $uni[$i] . '">
                                <img src="img\catalogus\catalogus\cut' . $src[$i] . '.jpg" alt="hello">
                                </a>
                                <h3>' . $name[$i] . '</h3>
                                <p>€ ' . $price[$i] . '</p>
                            </div>
                    ';
                    }
                    
                }
            ?>
        <a href=""></a>
    </div>


</body>
</html>
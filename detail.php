<?php
    $color = filter_input(INPUT_GET, "color");
    $uni = filter_input(INPUT_GET, "uni");
    $price = filter_input(INPUT_GET, "price");
    $translateColor = ["blue" => "Blauwe","green" => "Groene","pink" => "Roze","red" => "Rode","yellow" => "Gele"];

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
    <div class="title">
        <h1>
            product
        </h1>
    </div>
    <div class="grid-5">
        <img src="<?php echo $src;?>" alt="hi" class=display_img>
        <div class="info">
            <h2>Sunny socks</h2>
            <h1><?php echo $name;?></h1>
        </div>
    </div>
    
</body>
</html>
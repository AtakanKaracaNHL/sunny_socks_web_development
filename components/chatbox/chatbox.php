<?php
    $input = filter_input(INPUT_POST, 'chat-input');
    $searchData = 'searchData.json';

    if($input == null){
        $input = "eerste bericht";
    }
?>
<head>
    <link rel="stylesheet" href="../../css/chat-interface.css">
</head>

<form action="./chatbox.php" method="post">
    <input type="text" name="chat-input" id="chat-input">
</form>

<?php
    function getValueFromJsonFile($searchData){
        $jsonString = file_get_contents($searchData);
        $result_searchData = json_decode($jsonString, true);
        return $result_searchData;
    }

    function formatInput($input){
        $lowered_input = strtolower($input);
        $formatted_input = $lowered_input;
        return $formatted_input;
    }

    function createResponse($searchData, $input){
        $result_searchData = getValueFromJsonFile($searchData);
        $formatted_input = formatInput($input);

        if(array_key_exists($formatted_input, $result_searchData)){
            return $result_searchData[$formatted_input];
        }else{
            return "Helaas begrijp ik uw bericht niet. Ik advisseer om contact op te nemen met de klantenservice.";
        }
    }

    echo (createResponse($searchData, $input));
?>
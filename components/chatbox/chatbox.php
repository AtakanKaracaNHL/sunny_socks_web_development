<?php
    session_start();

    $input = filter_input(INPUT_POST, 'chat-input');
    $searchData = 'searchData.json';
?>
<head>
    <link rel="stylesheet" href="../../css/chat-interface.css">
</head>

<body>
    <div class="chat-history">
        <?php 
            createChat($searchData, $input);
        ?>
    </div>
    <form action="./chatbox.php" method="post">
        <input type="text" name="chat-input" id="chat-input" placeholder="vul hier uw vraag in.">
    </form>
</body>

<?php
    function getValueFromJsonFile($searchData){
        $jsonString = file_get_contents($searchData);
        $result_searchData = json_decode($jsonString, true);
        return $result_searchData;
    }

    function formatInput($input){
        if($input != null){
            $lowered_input = strtolower($input);
            $formatted_input = $lowered_input;
            return $formatted_input;
        }
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

    function createChat($searchData, $input){
        $userInput = formatInput($input);
        $botResponse = createResponse($searchData, $input);

        $_SESSION['chatHistory'][$userInput] = $botResponse;

        echo "
            <div class='bot-response message'>
                Hoi! Waarmee kan ik je helpen?
            </div>
        ";

        foreach($_SESSION['chatHistory'] as $userInput => $botResponse){
            echo "
                <div class='user-input message'>
                    $userInput
                </div>
                <div class='bot-response message'>
                    $botResponse
                </div>
            ";
        };
    }
?>
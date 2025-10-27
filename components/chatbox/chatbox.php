<?php
    $searchData = 'searchData.json';
    $response_message = 'Hoi! Waarmee kan ik je helpen?';
    $input = "";

    function getValueFromJsonFile($searchData){
        $jsonString = file_get_contents($searchData);
        $result_searchData = json_decode($jsonString, true);
        return $result_searchData;
    }

    function formatInput($input){
        $lowered_input = strtolower($input);
        return $lowered_input;
    }

    function createResponse($searchData, $input){
        $result_searchData = getValueFromJsonFile($searchData);
        $formatted_input = formatInput($input);


    }

    function getResponse($response_message){
        echo '
            <div class="response-item">' . $response_message . '</div>
        ';
    }

    getResponse($response_message);
?>
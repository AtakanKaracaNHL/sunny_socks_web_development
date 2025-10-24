<?php
    $response_message = 'Hoi! Waarmee kan ik je helpen?';

    function getResponse($response_message){
        echo '
            <div class="response-item">' . $response_message . '</div>
        ';
    }

    getResponse($response_message);
?>
<?php
    $id = $_POST['id']; 
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer 116|pTN5crFqyUdeRFjBMQJvbAX0l5ANVdshRfEFXfvA'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

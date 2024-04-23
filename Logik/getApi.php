<?php


function hentApi(){
// API endpoint
$url = 'https://api.adviceslip.com/advice';

// Hent data fra API
$response = file_get_contents($url);

// Se om der er fejl i data
if ($response === false) {
    // Hvis der er fejl, udskriv fejlbesked
    $data = "Desværre er der ingen gode råd lige nu.";
} else {
    // lav data om til JSON
    $data = json_decode($response, true);
    $data = json_encode($data['slip']['advice']);

}

  return $data;
}
?>

<?php

include('pages/head.php');

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://v2.jokeapi.dev/joke/Any?lang=fr&format=json",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
// $err = curl_error($curl);

if ($response === false) {
    var_dump(curl_error($curl));
} else {
?>

    <body class="d-flex">
        <main class="d-flex w-100">
            <div class="column d-flex w-25 justify-content-start">
                <div class="d-flex justify-content-between pattern-container-start w-25">
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                </div>
            </div>
            <div class="column d-flex flex-column w-50 jokes-column">
                <h1 class="logo align-self-center">CARAMBLAGUES!</h1>
                <div id="joke">
                    <div id="setup" class="joke-row text-center">
                        <?php
                        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
                            $response = json_decode($response, true);
                            echo ($response['setup']);
                        ?>
                    </div>
                    <div id="delivery" class="joke-row text-center">
                    <?php
                            echo ($response['delivery']);
                        }
                    ?>
                    </div>
                </div>

                <div class="btn-container d-flex w-100">
                    <button id="turn-around" type="button" class="btn turn-around">
                        <svg id="turn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M5.463 4.433A9.961 9.961 0 0 1 12 2c5.523 0 10 4.477 10 10 0 2.136-.67 4.116-1.81 5.74L17 12h3A8 8 0 0 0 6.46 6.228l-.997-1.795zm13.074 15.134A9.961 9.961 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.136.67-4.116 1.81-5.74L7 12H4a8 8 0 0 0 13.54 5.772l.997 1.795z" fill="rgba(255,255,255,1)" />
                        </svg>
                    </button>

                    <button id="next-joke" type="button" class="btn next-joke">
                        <svg id="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" fill="rgba(255,255,255,1)" />
                        </svg>
                    </button>
                </div>

            </div>
            <div class="column d-flex w-25 justify-content-end">
                <div class="d-flex justify-content-between pattern-container-end w-25">
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                    <div class="pattern"></div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>

<?php
}
curl_close($curl);
?>
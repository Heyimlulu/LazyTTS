<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["webhook"])) {
        return;
    } else {
        $webhookurl = $_POST["webhook"];
    }

    if (empty($_POST["username"])) {
        return;
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["message"])) {
        return;
    } else {
        $message = $_POST["message"];
    }

    // Text-To-Speech is disabled by default
    $tts = false;

    // Enable TTS if checked
    if (isset($_POST['tts'])) {
        $tts = true;
    }

    // https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c by Mo45

    //=======================================================================================================
    // Compose message. You can use Markdown
    // Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
    //========================================================================================================

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        
        // Message
        "content" => $message,

        // Username
        "username" => $username,

        // Avatar URL.
        // Uncoment to replace image set in webhook
        //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

        // Text-to-speech
        "tts" => $tts,

        // File upload
        // "file" => "",

    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

    $ch = curl_init( $webhookurl );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec( $ch );

    // If you need to debug, or find out why you can't send message uncomment line below, and execute script.
    // echo $response;
    curl_close( $ch );

    // Print success message
    print("Message has been sent!");
        
    unset($_POST);
}
?>
<?php
session_start();
if(isset($_SESSION['name'])){
    /*cookies*/
 $cookieParams = session_get_cookie_params();
    $cookieParams[samesite] = "None";
    session_set_cookie_params($cookieParams);
    $text = $_POST['text'];
     
    $text_message = "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span> <b class='user-name'>".$_SESSION['name']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
    file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>

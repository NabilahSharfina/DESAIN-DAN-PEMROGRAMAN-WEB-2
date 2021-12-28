<?php
// Message berupa text, type, icon pada formulir
function create_message($text, $type, $icon){
    session_start();
    
    $_SESSION["message"]['text'] = $text; 
    $_SESSION["message"]['type'] = $type;
    $_SESSION["message"]['icon'] = $icon;
    $_SESSION["message"]['show'] = "show";
}
?>

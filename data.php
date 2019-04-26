<?php
//Bad words filter example
$data = $_POST['data'];

$replace="";
$notallowed = array("Idiot", "Mist", "Dummkopf");

for($i = 0; $i < count($notallowed); $i++){
    if($data == $notallowed[$i]) {
        for($j = 0; $j < strlen($data); $j++) {
            $replace .= '*';
        };
        $data = str_replace($data, $replace, $data);
    }
};
echo $data;
?>
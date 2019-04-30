<?php
/**
 * Created by PhpStorm.
 * user: Jonas Kruse
 */
if($_POST['action'] == 'insert_chat') {
	$chat->insertChat($_POST['empfaenger_id'], $_SESSION['userid'], $_POST['message']);
}

if($_POST['action'] == 'update_user_chat') {
	$conversation = $chat->getUserChat($_SESSION['userid'], $_POST['empfaenger_id']);
	$data = array(
		"conversation" => $conversation			
	);
	echo json_encode($data);
}

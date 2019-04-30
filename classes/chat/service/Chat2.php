<?php
/**
 * Created by PhpStorm.
 * user: Jonas Kruse
 */
class Chat2{
	public function getUserAvatar($userid){
		$sqlQuery = ""; // Query zum Select des Avatars
		$userResult = $this->getData($sqlQuery);
		$userBild = '';
		foreach ($userResult as $user) {
            $userBild = $user['bild'];
		}	
		return $userBild;
	}	

	public function insertChat($empfaenger_id, $user_id, $nachricht) {
		$sqlInsert = ""; // Query um alle Daten fuer einen Chat zu schreiben
		$result = mysqli_query($this->dbConnect, $sqlInsert);
		if(!$result){
			return ('Error in query: '. mysqli_error());
		} else {
			$conversation = $this->getUserChat($user_id, $empfaenger_id);
			$data = array(
				"conversation" => $conversation
			);
			echo json_encode($data);
		}
	}

    public function getUserChat($user_id, $empfaenger_id) {
        $sqlInsert = ""; // Query um alle Daten fuer den Aufbau des Chats zu laden
        $result = mysqli_query($this->dbConnect, $sqlInsert);

        return $result;
    }
}

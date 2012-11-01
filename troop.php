<?php
include("scout.php");

class Troop {

	private $LeaderName;
	private $LeaderPhone;
	private $LeaderEmail;
	private $TroopNumber;
	private $ScoutList;

	public function Troop($LeaderNameNew, $LeaderPhoneNew, $LeaderEmailNew, $TroopNumberNew)
	{
		$this->LeaderName = $LeaderNameNew;
		$this->LeaderPhone = $LeaderPhoneNew;
		$this->LeaderEmail = $LeaderEmailNew;
		$this->TroopNumber = $TroopNumberNew;
	}

	//Getters and Setters
	public function getLeaderName() {
		return $this->LeaderName;
	}

	public function setLeaderName($leaderNameNew) {
		$this->LeaderName = $leaderNameNew;
	}

	public function getLeaderPhone() {
		return $this->LeaderName;
	}

	public function setLeaderPhone($leaderPhoneNew) {
		$this->LeaderPhone = $leaderPhoneNew;
	}

	public function getLeaderEmail() {
		return $this->LeaderEmail;
	}

	public function setLeaderEmail($leaderEmailNew) {
		$this->LeaderEmail = $leaderEmailNew;
	}

	public function getTroopNumber() {
		return $this->TroopNumber;
	}

	public function setTroopNumber($troopNumberNew) {
		$this->TroopNumber = $troopNumberNew;
	}

	public function getScoutList() {
		return $this->ScoutList;
	}

	public function setScoutList($scoutList) {
		$this->ScoutList = $scoutList;
	}

	//Functions
	function addScout($newScout){
		array_push($this->ScoutList, $newScout);
	}

	//For testing
	/*
	public function displayVar() {
		print_r($this->ScoutList);
	}
	*/


}

/*
$s1 = new Scout("Jamie", "DOB", "NYC");
$s2 = new Scout("Marie", "DOB", "NYC");
$s3 = new Scout("Anne", "DOB", "NYC");
$scouts = array($s1, $s2);

//print_r($scouts);

$obj1 = new Troop("Name", "Phone", "Email", "Number");
$obj1->setScoutList($scouts);
$obj1->addScout($s3);
$obj1->displayVar();
*/

?>
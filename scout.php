<?php
class Scout {

	private $scoutName;
	private $dateOfBirth;
	private $city;

	// method declaration
	public function scout($scoutNameNew, $dateOfBirthNew, $cityNew) {
		$this->scoutName = $scoutNameNew;
		$this->dateOfBirth = $dateOfBirthNew;
		$this->city = $cityNew;
	}

	//Getters and Setters
	public function getScoutName() {
		return $this->scoutName;
	}

	public function setScoutName($scoutNameNew) {
		$this->scoutName = $scoutNameNew;
	}

	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	public function setDateOfBirth($dateOfBirthNew) {
		$this->dateOfBirth = $dateOfBirthNew;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity($cityNew) {
		$this->city = $cityNew;
	}
	
	//For testing
	/*
	public function displayVar() {
		echo $this->getScoutName();
	}
	*/

}


?>




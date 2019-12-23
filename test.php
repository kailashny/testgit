 
<?php

abstract class absEmployee{
	
	protected $emplname;
	protected $empladdress;
	protected $calculatedvalue;
	protected $classname;
	
	
	abstract public function setEmployeeDetails($employeename, $employeeaddress);
	
	public function getEmployeeDetails(){
		
	  echo "Employe Details ".$this->classname." :: ".$this->emplname." ".$this->empladdress." ".$this->calculatedvalue;
		
	}
	abstract public function CalculateSalary($incentive);
}


class clsWorker extends absEmployee {

	private $basicsalary = 5000;
	
	public function setEmployeeDetails($name, $address){
		
		$this->emplname = $name;
		$this->empladdress = $address;
		$this->classname="clsWorker";
		
		
	}
	
	public function CalculateSalary($incentives){
		
		$this->calculatedvalue = $this->basicsalary + $incentives;
	}

}

class clsManager extends absEmployee {

	private $basicsalary = 10000;

	
	public function setEmployeeDetails($name, $address){
		
		$this->emplname = $name;
		$this->empladdress = $address;
		$this->classname="clsManager";
		
		
	}
	
	public function CalculateSalary($incentives){
		
		$this->calculatedvalue = $this->basicsalary + $incentives;
	}

}


class clsSeniorOfficers extends absEmployee {

	private $basicsalary = 9000;

	
	public function setEmployeeDetails($name, $address){
		
		$this->emplname = $name;
		$this->empladdress = $address;
		$this->classname="clsSeniorOfficers";
		
		
	}
	
	public function CalculateSalary($incentives){
		
		$this->calculatedvalue = $this->basicsalary + $incentives;
	}
	

}

class clsRetired extends absEmployee {

	private $basicsalary = 2000;

	
	public function setEmployeeDetails($name, $address){
		
		$this->emplname = $name;
		$this->empladdress = $address;
		$this->classname="clsRetired";
		
		
	}
	
	public function CalculateSalary($incentives){
		
		$this->calculatedvalue = $this->basicsalary + $incentives;
	}

}


$obj = new clsSeniorOfficers();

$obj->setEmployeeDetails('guru','Mumbai');
$obj->CalculateSalary(51000);

$obj->getEmployeeDetails();

?>
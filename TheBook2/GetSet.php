<?php

class GetSet
{

	private $dataWarehouse;
	//pravim edna private promenliva,
	//constructor//
	function __construct()
	{
		$this-> setter(300); //podavame stoynostta na settera- 300, kato e setnem, tryabva da e getnem
		$got = $this->getter();//getter = nova promenliva $got - i printni got! da ama 
		echo $got;
		
	}
	
	private function getter()   //getter-a kydeto govori s $dataWarehouse;
	{
		return $this -> dataWarehouse;
	}
	
	private function setter($setValue)
	{
		$this->dataWarehouse = $setValue;
	}	
}
$person = new GetSet();
?>

/*
	private $dataHome;
	
	function __construct()
	{
		$this-> setter(240);
		$got = $this->getter();
		echo $got;
	}
	
	private function getter()
	{
		return $this->dataHome;
	}
	
	private function setter($setValue)
	{
		$this->dataHome = $setValue;
	}
}
$person = new GetSet();



	private $money;
	
	function __construct()
	{
		$this ->setter(50);
		$got = $this->getter();
		echo $got;
	}
	
	private function getter()
	{
		return $this -> money;
	}
	
	private function setter($setValue)
	{
		$this->money = $setValue;
	}
}
$smyatay = new GetSet();
//The getter/setter functions are private, and so access is encapsulated. Further, in this
//implementation, the setter value is inside the class and so it functions as a rather large
//data holder.

<?php
include_once 'EuroAdapter.php';
include_once 'DollarCalc.php';

class Client
{
	private $requestNow;
	private $requestDollar;
	
	public function __construct()
	{
		$this -> requestNow = new EuroAdapter();
		$this -> requestDollar = new DollarCalc();
		$euro = " &#8364; ";//ei tva gram ne znam kvo e!!!
		echo "Euros : $euro " . $this-> makeAdapterRequest( $this-> requestNow)
		. "<br/>";
		
		echo "Dollars: $" . $this -> makeDollarRequest ( $this -> dollarRequest );
		
	}
	
	private function makeAdapterRequest( ITarget $reg)
	{
		return $req -> requestCalc(40,50);
	}
	
	private function makeDollarRequest( DollarCalc $req )
	{
		return $req -> requestCalc(40, 50);
	}
}

$worker = new Client();
?>

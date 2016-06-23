<?php

class ObjectCreation
{
	protected $name;
	protected $favoriteFood;
	protected $sound;
	protected $id;
	
	public static $numberOfAnimals = 0;
	
	const Pi = 3.14159;
	
	function getName() //encapsulation getName
	{
		return $this ->name;//encapsulirame go s $this;/tozi specific object
	}
	
	function __construct() //inizializira, kato izbirame ID
							//v slu4aya $this - id, s random i ogranichenieto;
							//i go printirame
	{
		$this->id = rand( 100, 100000000 );
		echo $this -> id . " Has been assigned ";
		
		Derek::$numberOfAnimals++;
		
		
	}
	
	public function __destruct()//unishtojavame obekta, koyto suzdadohme;
	{
		echo $this  -> name . " is being destroyed ";
	}
	
	function __get( $name ) //kato suzdadem obekta, pravim kato getter
							//setter;
	{
		echo " Asked for ". $name; //get Anything i slagame imeto na atributa
									// koyto iskame;
		return $this -> $name;//vrushtame imeto na atributa, koyto iskame.
	} 
	
	function __set( $name, $value ) //sega setvame value-to na atributa;
	{								//v slu4aya izbroyame s case-to atributite;
		switch ( $name )
		{
			case "name" :
				$this -> name = $value;
				break;
				
			case "favoriteFood" : 
			$this -> favoriteFood = $value;
			break;
			
			case "sound" :
				$this -> sound = $value;
				break;
				
			default :
				echo $name . " Not Found ";
				
		}
		
		echo "Set" . $name . " to " . $value ;
		
	}
	
	//overWrite kak se pravi - tuk suzdava functiya, koyato da kopira vsi4ko
	// i posle e pastvame v drugiya klass, interesno, neyasno...
	
	function run()
	{
		echo $this -> name ;
	}
	//znachi vsyaka functiya, koyato suzdadem tuk, moje da se nasledi tam;
	// ili kato podadem imeto, kakvoto i da e, to go overWrite i se poluchava
	//krasivo.
	
}


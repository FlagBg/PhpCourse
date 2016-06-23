<?php

class Entree
{
	public $name;
	public $ingredients = array();
	
	public function __construct( $name, $ingredients )
		{
			$this->name = $name;
			$this->ingredients = $ingredients;
		}
		
	public function hasIngredient($ingredient)
	{
		return in_array($ingredient, $this->ingredients);
	}
	
}


//object soup plus name as string and array by $ingredients = array()
$soup = new Entree('Chicken Soup', array('chicken', 'water'));

//object sandwich with same name and ingredients
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));

//trygna, ama posle pak shte go zatrugna vkushti... :P tezi raboti oshte ne sa mi na 110% yasni.


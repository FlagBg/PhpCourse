<?php

class OnAndOff
{
	private $offState;
	private $onState;
	private $currentState;
	
	public function __construct()
	{
		$this -> offState = new OffState( $this );
		$this -> onState = new OnState( $this );
	//we are starting with offState
		$this -> currentState = $this -> offState;
	}
	//Call State Methods - TRIGGERS!
	public function turnOnLight()
	{
		$this->currentState -> turnLightOn();
	}
	
	public function turnOffLight()
	{
		$this->currentState -> turnLightOff();
	}
	//Set the current state
	public function setState( IState $state)
	{
		$this -> currentState = $state;
	}
	
	//get The state;
	public function getOnState()
	{
		return $this ->onState;
	}
	
	public function getOffState()
	{
		return $this ->offState;
	}
}

$this ->offState = new OffState( $this );
$this ->onState  = new OnState( $this );

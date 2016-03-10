<?php

class CustomException extends Exception {
	
	public function __construct($e){
		parent::__construct($e->getMessage(), $e->getCode());
		
		//log knowledge
		$msg = "-----------------------------------\n";
		$msg .= __CLASS__ . ": [{$this->code}]: {$this->message}\n";
		$msg .= $e->getTraceAsString() . "\n";
		error_log($msg);
	}
	
	//overloading to string()
	
	public function __toString(){
		return $this->printMessage();
	}
	
	public function printMessage(){
		
		$usermsg = '';
		$code = $this->getCode();
		
		switch ($code) {
			case someDefinedErrorCode:
				$usermsg = 'OOOPS! Sorry about that.';
				break;
			
			case otherDefinedCode:
				$usermsg = 'Works';
				break;
				
			default:
				$usermsg = file_get_contents('/asdf/asfa/error.html');
				break;
		}
		
		return $usermsg;
	}
	
	public static function exceptionHandler($exception){
		throw new CustomException($exception);
	}
	
}
	set_exception_handler('CustomException::exception_handler');
	
		try{
			$obj = new CoolThirdPartyPackage();
		}
		catch (CustomException $e) {
			echo $e;
	}

	try {
		$obj = new CoolThing();
	}
	catch (CustomException $e){
		print $e;
		
	}catch (PossibleException $e){
		print "<!-- caught exception $e! -->";
		$obj = PlanB();
	}catch (AnotherPossibleException $e){
		print "<! --aha! caught another exception $e -->";
		$obj = new PlanC();
	}catch (CustomException $e){
		$e->cleanUp();
		$e->bailOut();
	}
	
/*
if isset($userFirstName){
	print "Angel, $userFirstName!";	
}	else{
	print "Hola!";
}
//hahaha


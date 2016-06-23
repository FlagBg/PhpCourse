<?php

include_once 'Jet.php';
include_once 'Car.php';
include_once 'Person.php';
include_once 'PolyInterface.php';


$f29 = new Jet();
$jetSlow = $f29->slow();
$jetStop = $f29->stop();
$jetCruise = $f29->cruise();
$jetFast = $f29->fast();

echo "My jet can take off at $jetSlow mph and cruises at $jetCruise, 
		the fastest speed is $jetFast and than could $jetStop.";

$subaru = new Car();
$subaruSlow   = $subaru->slow();
$subaruCruise = $subaru->cruise();
$subaruFast   = $subaru->fast();
$subaruStop   = $subaru->stop();

echo "Kolata djutka s $subaruSlow i izvednuj usili do $subaruCruise, 
kato maximalnata skorost e $subaruFast i izvednuj $subaruStop";


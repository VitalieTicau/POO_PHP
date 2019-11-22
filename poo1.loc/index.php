<?
	require 'PC.php';
	$hardware = [
		'ram' => '8GB', 
		'cpu' => 'Core i7'
	];
	$pc = new PC('123', $hardware);
	try {
		$pc->runBios();
		if($pc->login('123')) {
			$pc->startOS();
		}
	}
	catch (Exception $ex) {
    	echo $ex->getMessage();
	}
	
?>
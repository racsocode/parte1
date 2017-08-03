<?php
require_once('ChangeString.php');
require_once('CompleteRange.php');
require_once('ClearPar.php');


/*
	$in = '123 abcd*3';
	$changeString = new ChangeString();
	$primer = $changeString->build($in);
	echo $primer;

	$in2 = array(1, 2, 4, 5, 8);
	$completeRange = new CompleteRange();
	$result2 = $completeRange->build($in2);
	echo $result2;

	$in3 = "()(()))))))()(";
	$clearPar = new ClearPar();
	$result3 = $clearPar->build($in3);
	echo $result3;
*/
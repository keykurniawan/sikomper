<?php 

function read_excel(){
	require_once "phpExcel/PHPExcel.php";
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	return $objReader;
}

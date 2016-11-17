<?php

//1. make an excel file
//2. save it in .csv format
//3. run this file


$csvFileHandle = fopen('super_paper.csv', 'r'); //replace

$csvRowNumber =1;
$questionsDataObject = array();

while(($data = fgetcsv($csvFileHandle)) != false)
{
	if($csvRowNumber > 1)
	{
		$questionsDataObject[] = array(
		"question" => $data[0],
		"answers" => array($data[1], $data[2], $data[3]),
		"correctAnswer" => $data[4]
		);

		// var_dump($questionsDataObject);
		 json_encode($questionsDataObject);
		file_put_contents('super_paper.js', "var questions =".json_encode($questionsDataObject).";"); //replace

	}

	$csvRowNumber++;
}

echo "success!";
?>

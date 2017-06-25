<?php 
	//configuration
	include("includes/config.php");

	//GET method
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		render("home.php", ["title" => "Calculator"]);
	}
	//POST method
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//check for inputs
		//calculate functions
		$VAL_1 = 0;
		$VAL_2 = 0;
		$result = 0;
		if(empty($_POST["display"]))
		{
			$_POST["display"] = 0;
			echo "Error!";
		}
		else
		{
			$VAL_1 = $_POST["value1"];
			$VAL_2 = $_POST["display"];
		}
		//echo "{$VAL_1}";
		//echo "{$VAL_2}";

		//apply function
		if($_POST["function"] == "+")
		{
			$result = CALC_sum($VAL_1, $VAL_2);
		}
		else if($_POST["function"] == "-")
		{
			$result = CALC_substract($VAL_1, $VAL_2);
		}
		else if($_POST["function"] == "*")
		{
			$result = CALC_product($VAL_1, $VAL_2);
		}
		else if($_POST["function"] == "/")
		{
			$result = CALC_division($VAL_1, $VAL_2);
		}

		//trim result
		//$length = 12;
		//$result = substr($result, 0, $length);

		$CALC_result = array("result" => $result);
		echo json_encode($CALC_result);
		//render("home.php", ["result" => $result]);
	}

?>
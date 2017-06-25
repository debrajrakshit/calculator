<?php
	//configuration
	require_once("config.php");


	//error reporting
	function reporterror($message, $message2='')
	{
		render("report_error.php", ["message" => $message, "message2" => $message2]);
	}

	//render view
	function render($view, $values=[])
	{
		if(file_exists("views/{$view}"))
		{
			//extract values into equal scope
			extract($values);
			require("views/header.php");
			require("views/{$view}");
			require("views/footer.php");
			exit();
		}
		else
		{
			trigger_error("Invalid View!{$view}", E_USER_ERROR);
		}
	}

	//sum
	function CALC_sum($value_1, $value_2)
	{
		return($value_1 + $value_2);
	}
	//substraction
	function CALC_substract($value_1, $value_2)
	{
		return($value_1 - $value_2);
	}
	//product
	function CALC_product($value_1, $value_2)
	{
		return($value_1 * $value_2);
	}
	//division
	function CALC_division($value_1, $value_2)
	{
		return($value_1 / $value_2);
	}

?>
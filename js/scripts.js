$(document).ready(function(){
	//global variables
	//any function is active i.e. +, -, /, *
	var CALC_func_active = false;
	//decimal point counter
	var DOT_count = 0;
	//result is on display
	var CALC_result = false;

	//digit inputs
	function CALC_input(trigger, value, display){
		$(trigger).on("click", function(){
			if(CALC_func_active == false && CALC_result == false){
				var data = $(display).val();
				//alert(data);
				if(data.length < 12){
					$(display).val(data + value);
				}
				else{
					alert("Max 12 digit allowed.");
				}
			}
			else{
				$(display).val(value);
				CALC_func_active = false;
				CALC_result = false;
			}
			
		});
	}
	CALC_input("#1",1, "#display");
	CALC_input("#2",2, "#display");
	CALC_input("#3",3, "#display");
	CALC_input("#4",4, "#display");
	CALC_input("#5",5, "#display");
	CALC_input("#6",6, "#display");
	CALC_input("#7",7, "#display");
	CALC_input("#8",8, "#display");
	CALC_input("#9",9, "#display");
	CALC_input("#0",0, "#display");

	//decimal point input
	function CALC_decimal(trigger, value, display){
		$(trigger).on("click", function(){
			var data = $(display).val();
			if(data.length < 12 && DOT_count == 0){
				$(display).val(data + value);
				DOT_count++;
			}
			else{
				alert("Sorry! Function not allowed!");
			}
		});
	}
	CALC_decimal("#dot", ".", "#display");

	//calculations
	
	//sum
	function CALC_sum(trigger, value, display){
		$(trigger).on("click", function(){
			CALC_func_active = true;
			//save value into value1
			$("#value1").val($("#display").val());
			$("#function").val(value);
			$(display).html(value);
			//reset dot counter
			DOT_count = 0;
		});
	}
	CALC_sum("#plus", "+", "#calc-function");

	//substract
	function CALC_substract(trigger, value, display)
	{
		$(trigger).on("click", function(){
			CALC_func_active = true;
			//save value into value1
			$("#value1").val($("#display").val());
			$("#function").val(value);
			$(display).html(value);
			//reset dot counter
			DOT_count = 0;
		});
	}
	CALC_substract("#substract", "-", "#calc-function");

	//division
	function CALC_division(trigger, value, display)
	{
		$(trigger).on("click", function(){
			CALC_func_active = true;
			//save value into value1
			$("#value1").val($("#display").val());
			$("#function").val(value);
			$(display).html(value);
			//reset dot counter
			DOT_count = 0;
		});
	}
	CALC_division("#division", "/", "#calc-function");

	//product
	function CALC_product(trigger, value, display)
	{
		$(trigger).on("click", function(){
			CALC_func_active = true;
			//save value into value1
			$("#value1").val($("#display").val());
			$("#function").val(value);
			$(display).html(value);
			//reset dot counter
			DOT_count = 0;
		});
	}
	CALC_product("#product", "*", "#calc-function");

	//clear field
	$("#clear").on("click", function(){
		$("#display").val("");
		$("#calc-function").html("");
		DOT_count = 0;
	});

	//backspace
	$("#back").on("click", function(){
		//TODO
		$("#display").val($("#display").val().substring(0, $("#display").val().length - 1));
	});

	//submit with AJAX
	$("#calc").on("submit", function(event){
		//stop form from submitting normally
		event.preventDefault();
		//get the values from form
		var $form = $(this);
		var CACL_values = $form.serialize();

		$.ajax({
			type: $form.attr("method"),
			url: $form.attr("action"),
			data: CACL_values,
			dataType: 'json'
			// success: function(result){
			// 	alert(result["result"]);
			// }
		})
		.done(function(result){
			//alert(result["ajax"]);
			var result = result["result"];
			$("#display").val(result);
			//calculator input and function sign
			CALC_result = true;
			$("#calc-function").html("");

		})
		.fail(function(){
			$("#error").html("Ops! Something went wrong.");
		})

		
	});
	// $("#calc").on("submit", function(){
	// 	if($("#display").val() != "")
	// 	{
	// 		CALC_result = true;
	// 	}
			
	// });
});
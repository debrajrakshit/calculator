<section>
	<div id="error" class="error"></div>
	<div class="calc-body">
		<form id="calc" action="calculate.php" method="post" class="calc-form">
		<input type="hidden" name="value1" value="" id="value1" class="">
		<input type="hidden" name="function" value="" id="function" class="">
		<div class="calc-display">	
			<div class="calc-lcd">
				<div id="calc-function" class="calc-function"></div>
				<div class="calc-digit">
					<?php
						if(empty($result))
						{
							echo "<input type='text' name='display' id='display' class='display' editable='false' value='' maxlength='12' placeholder='0' readonly>";
						}
						else
						{
							echo "<input type='text' name='display' id='display' class='display' editable='false' value='".$result."' maxlength='12' placeholder='0' readonly>";
						}


					 ?>
					 	
					 </div>
			</div>
		</div>
		<div class="calc-keys">
			<div class="row">
				<div class="col-03 key-normal"><a href="#" id="clear" class="button">C</a></div>
				<div class="col-03 key-normal"><a href="#" id="division" class="button">/</a>
</div>
				<div class="col-03 key-normal"><a href="#" id="product" class="button"><i class="fa fa-times" aria-hidden="true"></i></a>
</div>
				<div class="col-03 key-normal"><a href="#" id="back" class="button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
</div>
			</div>
			<div class="row">
				<div class="col-03 key-normal"><a href="#" id="7" class="button">7</a></div>
				<div class="col-03 key-normal"><a href="#" id="8" class="button">8</a></div>
				<div class="col-03 key-normal"><a href="#" id="9" class="button">9</a></div>
				<div class="col-03 key-normal"><a href="#" id="substract" class="button"><i class="fa fa-minus" aria-hidden="true"></i></a>
</div>
			</div>
			<div class="row">
				<div class="col-03 key-normal"><a href="#" id="4" class="button">4</a></div>
				<div class="col-03 key-normal"><a href="#" id="5" class="button">5</a></div>
				<div class="col-03 key-normal"><a href="#" id="6" class="button">6</a></div>
				<div class="col-03 key-normal"><a href="#" id="plus" class="button"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
			</div>
			<div class="row">
				<div class="col-03 key-normal"><a href="#" id="1" class="button">1</a></div>
				<div class="col-03 key-normal"><a href="#" id="2" class="button">2</a></div>
				<div class="col-03 key-normal"><a href="#" id="3" class="button">3</a></div>
				<div class="col-03 key-normal">  </div>
			</div>
			<div class="row">
				<div class="col-03 key-normal"><a href="#" id="0" class="button">0</a></div>
				<div class="col-03 key-normal"><a href="#" id="dot" class="button">.</a></div>
				<div class="col-03 key-normal"><button name="result" value="result" id="result" class="button result">=</button></div>
				<div class="col-03 key-normal">  </div>
			</div>
		</div>
		</form>
	</div>
</section>
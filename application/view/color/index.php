		<main>
			<form method="post" action="<?php echo Config::get('URL'); ?>color/addColor" >
				
				<!-- this is where all the color are created -->
				<section class="color-section" >

					<!-- this is the color selector (what do you want to change?) -->
					<label class="color-label color-label-left" >Primary Color » </label>
						<input type="button" onclick="selectThisColor('color-1');" id="color-1" class="color-button" >
						<input type="button" onclick="selectThisColor('color-2');" id="color-2" class="color-button" >
					<label class="color-label color-label-right" > « Secondary Color</label><br>
					<label class="color-label color-label-left" >Tint Color 1 » </label>
						<input type="button" onclick="selectThisColor('color-3');" id="color-3" class="color-button" >
						<input type="button" onclick="selectThisColor('color-4');" id="color-4" class="color-button" >
					<label class="color-label color-label-right" > « Tint Color 2</label><br>
					<label class="color-label color-label-left" >Text Color » </label>
						<input type="button" onclick="selectThisColor('color-5');" id="color-5" class="color-button" >
						<input type="button" onclick="selectThisColor('color-6');" id="color-6" class="color-button" >
					<label class="color-label color-label-right" > « Background Color</label><br>

					<!-- this is where you can choose the ammount of red, green and blue -->
					<input type="range" onchange="setRangeColor('color-range-red');" id="color-range-red" class="color-range" value="255" min="0" max="255" ><br>
					<input type="range" onchange="setRangeColor('color-range-green');" id="color-range-green" class="color-range" value="255" min="0" max="255" ><br>
					<input type="range" onchange="setRangeColor('color-range-blue');" id="color-range-blue" class="color-range" value="255" min="0" max="255" ><br>

					<!-- this is where you can use your hex code to change the color -->
					<label class="color-label color-label-#" >#</label>
					<input type="text" id="color-text-hex" class="color-text color-text-hex" maxlength="6" placeholder="a3d90f - The Hex code must be 6 digets long">
					<input type="button" onclick="setHexCode();" class="color-button-hex" value="Set Hex Code"><br>
					<p hidden="true" id="color-p" class="color-p" >Oops! this is an invalid hex code.<br>Maybe you used the wrong digets or the code is not long enough.</p>

					<!-- javascript saves all the data in this hidden input -->
					<input type="hidden" id="color-data" name="data" value="ffffff.dddddd.bbbbbb.999999.777777.555555" >
				</section>

				<!-- loads the sample page. this is a litle website inside that will be changed realtime -->
				<?php view::renderWithoutHeaderAndFooter('color/sample'); ?>

				<input type="submit" value="Create Color"> 
			</form>
		</main>
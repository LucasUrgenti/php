<?php
include 'utils.inc.php';
start_page('Formulaire');
end_page('Fromulaire');
echo '<form action="data-processing.php" method="post" >
				<input type="text" name="identifiant" value="identifiant"/> <br>
				<input type="radio" name="civilité" value="homme"/> homme 
				<input type="radio" name="civilité" value="femme"/> femme 
				<input type="radio" name="civilité" value="autre"/> autre<br>
				<input type="text" name="Email" value="email"/> <br>
				<input type="password" name="password" value="password"/> password <br>
				<input type="password" name="verif" value="verif" /> verification <br>
				<input type="text" name="telephone" value="telephone" /> <br>
				<select name="pays">
						<option value="France"> France </option>
						<option value="Tchetchenie"> Tchetchenie</option>
						<option value="Maroc">Maroc</option>
						<option value="Arcachon">Arcachon</option>
				</select> <br>	
				<input type="checkbox" name="checkbox" value="checkbox"/> conditions <br>
				<input type="submit"   name="action"   value="mailer"/> <br>
          </form>';
?>

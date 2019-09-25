<?php
function start_page($title) {
    echo '<!doctype html>
			<html lang="fr">
				<head>
					<title>' . $title . '</title>
				</head>';
}
function end_page($title){
    echo '		<body> 
					<hr></br>
						<strong>' . $title . '</strong> </br>
					<hr></br>	
					
			       	</body>
		      </html>';
}
?>
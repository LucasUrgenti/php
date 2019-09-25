<?php
function start_page($title)
{
    echo'<!DOCTYPE html> 
                <html>
                    <head> 
                        <title>' .  $title  . '</title>
                     </head>';
}
function end_page()
{
    echo'    <body>
                <hr></br>
                    <strong> calculatrice </strong></br>
                 <hr></br>
 			                
                 <form action="calcul.php" method="post">
                 
                        
                     <input type="text" name="op1" required="required" > op1 </br>
                     <input type="text" name="op2" required="required"> op2 </br>';
    $operateur = '*+-/';
    for ($cpt = 0; $cpt < 4; ++$cpt)
    {
        echo '<input type="submit" name="action" value="' . $operateur[$cpt] . '"/>';
    }
    echo '
                 </form>
             </body>
	 </html>';
}
start_page('calculatrice');
end_page();
phpinfo();
?>

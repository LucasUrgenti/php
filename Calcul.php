<?php
function start_page()
{
    echo'<DOCTYPE html>
                <html>  
                    <head> 
                        <title> calcul </title>
                     </head>';
}
function end_page()
{
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $action = $_POST['action'];
    echo '<body>';
    if ($action == '*')
    {
        echo  $op1  *  $op2;
    }
    elseif ($action == '+')
    {
        echo  $op1  +  $op2;
    }
    elseif('-' == $action)
    {
        echo $op1 - $op2;
    }
    elseif('/'== $action )
    {
        if($op2 == 0)
            throw new Exception('division par 0');
        else
            echo $op1 / $op2;
    }
    echo '</body> 
           </html>';
}
start_page();
try{
    end_page();
}catch(Exception $e) {
    echo $e->getMessage();
}
?>


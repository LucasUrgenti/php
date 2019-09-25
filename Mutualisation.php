<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};
start_page('tittre');
function start_page2()
{
    echo'<DOCTYPE html> <html> <head> <title> test </title></head>';
}
function end_page()
{
    echo'<body> <hr/><br/><strong>test</strong></body></br><hr/></body></html>';
}
start_page2();
end_page();
//date
$test = date('l F d, y');
$jour = date('d/m/Y', strtotime($test));
echo  $jour . '<br/>';
$jour = date('F d, Y , h : i a');
echo  $jour . '</br>';
?>

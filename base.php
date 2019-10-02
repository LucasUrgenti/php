<?php
$dbLink = mysqli_connect('mysql-lucas-urgenti.alwaysdata.net', '189631','tdphp13')
or die('Erreur de connexion au serv' . mysqli_connect_error());
mysqli_select_db($dbLink,'lucas-urgenti_db')
or die('Erreur de connexion au serveur : '. mysqli_error($dbLink));
$query = 'select id, email, date  from my_user';
if(!($dbResult = mysqli_query($dbLink,$query)))
{
    echo 'Erreur de query 2 <br>' ;
    echo 'Erreur :' . mysqli_error($dbLink) . '<br>';
    echo 'Requête : ' . $query . '<br>';
    exit();
}
$array = array('ID','CIVILITE','EMAIL','PWD','TEL','PAYS');
$dbRow = mysqli_fetch_assoc($dbResult);
//echo $array[1];
while($dbRow)
{
    for ($i = 0; $i < 5; ++$i)
    {
        echo $dbRow[$array[$i]] . '<br>';
        echo '<br></br>';
    }
}
?>

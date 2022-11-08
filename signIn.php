<?php
if(isset($_POST['submit'])){
    $brukernavn = $_POST['brukernavn'];
    $passord = $_POST['passord'];

    $dbc = mysqli_connect('localhost', 'root', '', 'adminbrukere')
        or die('Error connecting to MySQL server');

    $query = "SELECT brukernavn, passord from adminuser where brukernavn='$brukernavn' and passord='$passord'";

    $result = mysqli_query($dbc, $query)
        or die('Error querying database.');

    mysqli_close($dbc);

    // var_dump($result);

    if($result->num_rows > 0){
        header('location: bra.html');
        var_dump('bra');
    }else{
        header('location: ikkeBra.html');
        var_dump('ikke bra');
    }
}
?>
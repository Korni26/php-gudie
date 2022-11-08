<?php
    if(isset($_POST['submit'])){
        //Gjøre om POST-data til variabler
        $fornavn = $_POST['fornavn'];
        $etternavn = $_POST['etternavn'];
        $telefonnummer = $_POST['telefonnummer'];
        
        //Koble til databasen
        $dbc = mysqli_connect('localhost', 'root', '', 'telefondb')
          or die('Error connecting to MySQL server.');
        
        //Gjøre klar SQL-strengen
        $query = "INSERT INTO telefonkatalog (fornavn, etternavn, telefonnummer) VALUES ('$fornavn','$etternavn','$telefonnummer')";
        
        //Utføre spørringen
        $result = mysqli_query($dbc, $query)
          or die('Error querying database.');
        
        //Koble fra databasen
        mysqli_close($dbc);

        //Sjekke om spørringen gir resultater
        if($result){
            //Gyldig login
            echo "Takk for at du lagde en ny kontakt! Trykk <a href='index.php'>her</a> for å gå tilbake";
        }else{
            //Ugyldig login
            echo "Noe gikk galt, prøv igjen!";
        }
    }
?>
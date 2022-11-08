<?php                       
                    //Koble til databasen
                    $dbc = mysqli_connect('localhost', 'root', '', 'telefondb')
                        or die('Error connecting to MySQL server.');
                    
                    //Gjøre klar SQL-strengen
                    $query = "SELECT id,fornavn,etternavn,telefonnummer from telefonkatalog";
                    
                    //Utføre spørringen
                    $result = mysqli_query($dbc, $query)
                        or die('Error querying database.');
                    
                    //Koble fra databasen
                    mysqli_close($dbc);

                    //Skriv ut en rad per oppføring
                    foreach($result as $row){
                        echo "<tr>";

                        echo "<td>";
                        echo $row['id'];
                        echo "</td>";

                        echo "<td>";    
                        echo $row['fornavn'];
                        echo "</td>";
                        
                        echo "<td>";
                        echo $row['etternavn'];
                        echo "</td>";
                        
                        echo "<td>";
                        echo $row['telefonnummer'];
                        echo "</td>";

                        echo "</tr>";
                    }
                ?>
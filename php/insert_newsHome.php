<?php
function shorter($testo, $limiteCaratteri) {
    if (strlen($testo) > $limiteCaratteri) {
        $nuovo_testo = substr($testo, 0, $limiteCaratteri);
        $nuovo_testo = trim($nuovo_testo);
        return $nuovo_testo . "...";
    } else {
    return $testo;
    }
}

/*
    function shorter($testo, $limiteCaratteri) {
        $parole = explode(" ", $testo);

        $testoFinale = "";
        $index = 0;

        while(strlen($testoFinale) <= $limiteCaratteri) {
            $testoFinale = $testoFinale . " " . $parole[$index];
            $index++;
        }

        $testoFinale = $testoFinale . " [...]";

        return $testoFinale;
    }
*/

    function getAllNewsHome(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulife";

        $connection = new mysqli($servername, $username, $password, $dbname);
        $connection->query("SET NAMES 'utf8'");

        // Controllo della connessione
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $rsNewsHome = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
        $newsHome = mysqli_fetch_all($rsNewsHome, MYSQLI_ASSOC);
        mysqli_close($connection);

        $limiteCaratteriTitolo = 30;
        $limiteCaratteriContenuto = 255;

        for($i = 0; $i < count($newsHome); $i++) {
            echo "
            <a class='col-sm-12 col-md-4' href='pages/show.php?table=news&id=".$newsHome[$i]['id']."'>
                <div >
                    <h6 class='scritte_home'>" . shorter($newsHome[$i]['titolo'], $limiteCaratteriTitolo) . "
                    </h6>
                    <p style='color:#000'>" . shorter($newsHome[$i]['contenuto'], $limiteCaratteriContenuto) . "
                    </p>
                </div>
            </a>    
            ";
        }

    }

    

?>
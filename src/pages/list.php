<?php include("connection.php") ?>

<?php
    function listcodes(){
        global $connection;

        //SQL-Zugriff auf Datensaetze
        $query = $connection->prepare("SELECT finderid, code, DATE_FORMAT(creationdate, '%d.%m.%Y') AS creationdate, style FROM socialcodes ORDER BY creationdate ASC");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);


        while ($row = $query->fetch()){
            $finderid				    = $row['finderid'];
            $style                      = $row['style'];
            $code				        = $row['code'];
            $creationdate			    = $row['creationdate'];
           

            if($id < 0){
                echo "leer";
            }

            else{

            echo"<li class='expandme'>
                    
                    Erstellungs-ID: <strong>$id</strong><br>
                    <small>erstellt am: $creationdate</small>
                    <div>
                        <span class='tag styleingtag'><i class='fa fa-palette'></i> $style</span>
                    </div>
                </li>";
            }


        }
    }

    function getID($mys){
        global $connection;

        //SQL-Zugriff auf Datensaetze
        $query = $connection->prepare("SELECT id AS creationid FROM socialcodes WHERE creationdate = $mys");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $query->fetch()){
            $creationid						    = $row['id'];

            if($creationid < 0){
                echo "leer";
            }

            else{

            echo"Deine gespeicherte ID lautet: $creationid";
            }


        }
    }

?>
<div id="codelib" class="listcontainer">
    <div id="listcontainerhead">
        <div>
            <h2>Gespeicherten Codes</h2>
            <p>In dieser Liste finden Sie alle gespeicherten Code-Kombinationen.</p>
        </div>
        <div onclick="opencodelib();" id="closelistcontainer"><i class="fas fa-times"></i></div>
    </div>

    <ul>
        <?php listcodes(); ?>
    </ul>
</div>

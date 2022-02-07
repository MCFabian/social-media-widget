<?php include("connection.php") ?>

<?php
    function listcodes(){
        global $connection;

        //SQL-Zugriff auf Datensaetze
        $query = $connection->prepare("SELECT id, code, creationdate FROM socialcodes ORDER BY creationdate DESC");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);


        while ($row = $query->fetch()){
            $id						    = $row['id'];
            $code				        = $row['code'];
            $creationdate				= $row['creationdate'];
           

            if($id < 0){
                echo "leer";
            }

            else{

            echo"<li><strong>$id</strong> - Erstellt am: $creationdate</li>";
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

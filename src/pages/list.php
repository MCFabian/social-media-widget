<?php include("connection.php") ?>

<?php
    function listcodes(){
        global $connection;

        //SQL-Zugriff auf Datensaetze
        $query = $connection->prepare("SELECT id, finderid, code, DATE_FORMAT(creationdate, '%d.%m.%Y') AS creationdate, style, creator FROM socialcodes ORDER BY creationdate ASC");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);


        while ($row = $query->fetch()){
            $id				            = $row['id']; //DATABASE AUTOKEY (PRIMARY)
            $finderid				    = $row['finderid'];
            $style                      = $row['style'];
            $code				        = $row['code'];
            $creationdate			    = $row['creationdate'];
            $creator			        = $row['creator'];

            if($id < 0){
                echo "leer";
            }

            else{

            echo"<li>
                    
                    Erstellungs-ID: <strong>$finderid</strong>
                    <div>
                        <span class='tag styleingtag'><i class='fa fa-palette'></i> $style</span>
                    </div>

                    <span class=''>
                        <span class='creator'>$creator</span> <small>erstellt am: $creationdate</small> von 
                    </span>

                    <hr>
                    <div class='actionbuttons'>
                       <a href='/src/pages/socialcode.php?id=$finderid'><i class='fas fa-folder-open'></i>Code laden</a>
                    </div>
                   
                    <div class='previewbutton expandme'><i class='fas fa-eye'></i>Vorschau
                        <div class='expander'>$code</div>
                    </div>

                </li>";
            }


        }
    }

?>
<div id="codelib" class="listcontainer">
    <div id="loadcode">
        <div title="Schließen" onclick="opencodelib();" id="closelistcontainer"><i class="fas fa-times"></i></div>
        <?php include('directopen.php'); ?>

    </div>
</div>

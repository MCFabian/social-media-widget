<?php include("connection.php") ?>

<?php
    function listfiles(){
        global $connection;

        //SQL-Zugriff auf Datensaetze
        $query = $connection->prepare("SELECT fileid AS fileid, nameoffile AS fileentry, editor AS editorid, vname, nname FROM T_Files, T_Persons WHERE editor = p_person_nr ORDER BY fileid DESC");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);


        while ($row = $query->fetch()){
            $id						= $row['fileid'];
            $fileentry				= $row['fileentry'];
            $fileentry				= $row['fileentry'];
            if(empty($fileentry)){
                $gotofile = "<i>Keine Bezeichnung</i>";
            }

            if(!empty($fileentry)){
                $gotofile = "<a target='_blank' href='/pointer/documents/uploaded/$fileentry'>$fileentry</a>";
            }
            $creatorid              = $row['editorid'];
            $creatorname            = $row['vname']." ".$row['nname'];

            if($id < 0){
                echo "leer";
            }

            else{

            echo"
            <table>
                <tr>
                    <td class='icon'>attach_file</td>
                    <td>$gotofile</td>
                    <td>";
                        
                       echo"
                    </td>
                    <td>
                        <a href='/pointer/documents/uploaded/$fileentry' download class='icon right setting-interaction'>file_download</a>
                    </td>
                </tr>	
                </table>
            ";
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
        <li>Test</li>
        <li>Test</li>
    </ul>
</div>

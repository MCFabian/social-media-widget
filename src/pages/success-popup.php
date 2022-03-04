<link rel="stylesheet" href="../css/style.css">
<script src="../js/script.js"></script>
<?php
    include("pagehead.php");
?>



<body>
    <div class="full-height flex">
        <div class="popup center-box">
            <div id="success-icon" class="big-icon">
                <i class='fas fa-check big-icon'></i>
            </div>
            <h2 class="center">Code gespeichert!</h2>
            <hr>
            <?php echo"<p class='larger-text'>Der Code wurde erfolgreich gespeichert! Deine gespeicherte ID lautet:<br> <strong id='creationcode' class='chip'>$myc</strong></p> ";?>
            <div class="btn-group center">
                <a class="button" href="/"><i class="fas fa-plus"></i>Neuen Code erstellen</a>
            </div>
        </div>
    </div>
</body>

<script>

    document.getElementById("creationcode").addEventListener("click", function(){
        var code = document.getElementById("creationcode").innerHTML;
        
        code.select();
        code.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(code);

        notification('success', 'Der Code wurde erfolgreich in die Zwischenablage kopiert!');
    })

</script>


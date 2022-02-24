<div id="saveentry" class="popup">
    <h2>Code speichern</h2>
    <p>Die ausgewählten Social-Media Kanäle inkl. der hinterlegten Links und Einstellungen der Gestaltung werden gespeichert.</p>

    <hr>

    <div class="row">
        <div id="initialpreview">MM</div>

        <div>
            <label for="initial">Initialen</label>
            <input required onkeyup="writeinitals()" id="initial" name="initial" placeholder="MM" minlength="2" maxlength="2" type="text">
        </div>
    </div>


    <div class="hint">
        <i class='fas fa-exclamation'></i> Bitte beachten Sie, dass E-Mail, Telefon und WhatsApp, als auch das Custom-Icon nicht gespeichert werden.
    </div>

    <hr>

    <button class="button" id="savecode" name="savecode" form="savecode"><i class="fas fa-save"></i>Speichen</button>
    <span onclick="popup()" class="button">Schließen</span>

</div>

<script>
    function writeinitals() {
        var input = document.getElementById("initial");
        var init = document.getElementById("initialpreview");

        init.innerHTML = input.value;
    }
</script>
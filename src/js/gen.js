function CreateSocialMediaElement (socialmedianame, socialmedialink, socialmediaclass, socialmediafontawesome){
    //Create lower case id from name
    var socialmediaid = socialmedianame.toLowerCase();

    // Create DOM Element
    var newSocialMediaElement = document.createElement("a");

    newSocialMediaElement.setAttribute("id", socialmediaid);
    newSocialMediaElement.setAttribute("href", socialmedialink);
    newSocialMediaElement.setAttribute("title", socialmedianame);
    newSocialMediaElement.setAttribute("target", "_blank");    
    newSocialMediaElement.classList.add("media", socialmediafontawesome, socialmediaclass);

    //newSocialMediaElement.appendChild(newSocialMediaElementContent);
    var socialmedialist = document.getElementById("socialmedialist");
    socialmedialist.appendChild(newSocialMediaElement);
}

function socialmedialist(style, fontcolor, backgroundcolor, alignment, iconsize){
    var socialmedialist = document.getElementById("socialmedialist");
    var style;
    var backgroundcolor;
    var alignment;

    var hoverbgcolor = document.getElementById("hoverbg").value;

    if(hoverbgcolor == ""){
        var hoverbackgroundcss = "";
    }

    else{
        var hoverbackgroundcss = ".hoverclass .media:hover{background-color: " +hoverbgcolor +" !important;" +"}";
    }


    // give style class
    socialmedialist.removeAttribute('class');
    socialmedialist.classList.add(style);
    
    socialmedialist.style.justifyContent = alignment;

    // give Icon Size
    var small = document.getElementById("small");
    var medium = document.getElementById("medium");
    var large = document.getElementById("large");

    if(small.checked == true){
        document.getElementById("socialmedialist").classList.add("small");
    }

    if(large.checked == true){
        document.getElementById("socialmedialist").classList.add("large");
    }

    if(larger.checked == true){
        document.getElementById("socialmedialist").classList.add("larger");
    }

    if(medium.checked == true){
        document.getElementById("socialmedialist").classList.remove("large", "small", "larger");
    }

    // give backgroundcolor
    var elements = document.getElementsByClassName('media');
    for(var i = 0; i < elements.length; i++){
        elements[i].style.backgroundColor = backgroundcolor;
        elements[i].style.color = fontcolor;
        document.getElementById("hovestyle").innerHTML = hoverbackgroundcss;
        document.getElementById("socialmedialist").classList.add("hoverclass");
    }

}

document.getElementById('generate').addEventListener('click', function(){
    //Reset socialmedia
    document.getElementById("export").value = "";
    document.getElementById("socialmedialist").innerHTML = "";


    //Auswahl überprüfen
    //Facebook
    if(document.getElementById('checkfacebook').checked == true){
        var linkfacebook = document.getElementById("linkfacebook").value;

        if(linkfacebook.length == 0){
            var linktofacebook = "https://de-de.facebook.com/";
        }

        CreateSocialMediaElement ("Facebook", linkfacebook, "fa-facebook-f", "fab");
    }

    //WhatsApp
    if(document.getElementById('checkwhatsapp').checked == true){
        var linkwhatsapp = document.getElementById("linkwhatsapp").value;
        var linkwhatapp = " https://wa.me/" +linkwhatsapp;

        if(linkwhatsapp.length == 0){
            linkwhatapp = "https://whatsapp.com/";
        }
        
         else {
            linkwhatapp = " https://wa.me/" +linkwhatsapp;
         }

        CreateSocialMediaElement ("WhatsApp", linkwhatapp, "fa-whatsapp", "fab");
    } 
    
    //Instagram
    if(document.getElementById('checkinstagram').checked == true){
        var linkinstagram = document.getElementById("linkinstagram").value;

        if(linkinstagram.length == 0){
            var linkinstagram = "https://instagram.com/";
        }

        CreateSocialMediaElement ("Instagram", linkinstagram, "fa-instagram", "fab");
    }

    //YouTube
    if(document.getElementById('checkyoutube').checked == true){
        var linkyoutube = document.getElementById("linkyoutube").value;

        if(linkyoutube.length == 0){
            var linkyoutube = "https://youtube.com/";
        }

        CreateSocialMediaElement ("YouTube", linkyoutube, "fa-youtube", "fab");
    }

    //Twitter
    if(document.getElementById('checktwitter').checked == true){
        var linktwitter = document.getElementById("linktwitter").value;

        if(linktwitter.length == 0){
            var linktwitter = "https://twitter.com/";
        }

        CreateSocialMediaElement ("Twitter", linktwitter, "fa-twitter", "fab");
    }

    //TikTok
    if(document.getElementById('checktiktok').checked == true){
        var linktiktok = document.getElementById("linktiktok").value;

        if(linktiktok.length == 0){
            var linktiktok = "https://www.tiktok.com/de-DE";
        }

        CreateSocialMediaElement ("TikTok", linktiktok, "fa-tiktok", "fab");
    }

    //XING
    if(document.getElementById('checkxing').checked == true){
        var linkxing = document.getElementById("linkxing").value;

        if(linkxing.length == 0){
            var linkxing = "https://xing.com/";
        }

        CreateSocialMediaElement ("XING", linkxing, "fa-xing", "fab");
    }

    //LinkedIn
    if(document.getElementById('checklinkedin').checked == true){
        var linklinkedin = document.getElementById("linklinkedin").value;

        if(linklinkedin.length == 0){
            var linklinkedin = "https://linkedin.com/";
        }

        CreateSocialMediaElement ("LinkedIn", linklinkedin, "fa-linkedin-in", "fab");
    }

    //LinkTree
    if(document.getElementById('checklinktree').checked == true){
        var linklinktree = document.getElementById("linklinktree").value;

        if(linklinktree.length == 0){
            var linklinktree = "https://linktree.com/";
        }

        CreateSocialMediaElement ("LinkTree", linklinktree, "fa-link", "fas");
    }

    //Mail
    if(document.getElementById('checkmail').checked == true){
        var linkmail = document.getElementById("linkmail").value;

        if(linkmail.length == 0){
            var linkmail = "https://google.com/";
        }

        else {
            linkmail = 'mailto:' +linkmail;
        }

        CreateSocialMediaElement ("Mail", linkmail, "fa-envelope", "far");
    }

    //Phone
    if(document.getElementById('checkphone').checked == true){
        var linkphone = document.getElementById("linkphone").value;

        if(linkphone.length == 0){
            var linkphone = "https://google.com/";
        }

        else {
            linkphone = 'tel:' +linkphone;
        }

        CreateSocialMediaElement ("Telefon", linkphone, "fa-phone", "fas");
    }

    //Customicon
    if(document.getElementById('checkcustomicon').checked == true){
        var linkcustomicon = document.getElementById("linkcustomicon").value;
        var customiconclasstype = document.getElementById("customiconclasstype").value;
        var customiconclass = document.getElementById("customiconclass").value;

        if(customiconclass.length == 0){
            notification("error", "Es wurde keine Icon-Class angegeben. Es konnte kein Code erzeugt werden.");
            return;
        }

        else{
            CreateSocialMediaElement ("", linkcustomicon, customiconclass, customiconclasstype);
        }
    }


    // style und farben eintragen
    var style = document.getElementById('style').value;
    var ifontcolor = document.getElementById('color').value;
    var ibackgroundcolor = document.getElementById('background').value;

    //alignment
    var left = document.getElementById("left");
    var center = document.getElementById("center");
    var right = document.getElementById("right");

    if(left.checked == true){
        var alignment = "left";
    }

    if(center.checked == true){
        var alignment = "center";
    }

    if(right.checked == true){
        var alignment = "right";
    }
    

    socialmedialist(style, ifontcolor, ibackgroundcolor, alignment);


    if((!!document.getElementById("borderwidth").value == '') || (!!document.getElementById("bordertype").value == '') || (!!document.getElementById("bordercolor").value == '')) {

    }

    else {
        ownstyle();
    }

    checkforhint();


    exportClass(style);

    var checked = document.querySelectorAll('input[type=checkbox]:checked');

    if (checked.length === 0) {
        // there are no checked checkboxes
        notification('error', 'Es wurde keine Auswahl getroffen. Es konnte keine Code generiert werden.');
    } else {
        // there are some checked checkboxes
        notification('success', 'Der Code für die Auswahl wurde generiert.');
    }
    
});


function ownstyle(){
    var customborderwidth = document.getElementById("borderwidth").value;
    var custombordertype = document.getElementById("bordertype").value;
    var custombordercolor = document.getElementById("bordercolor").value;
    var customborderradius = document.getElementById("borderradius").value;
    alert(customborderradius);
    //var hoverbgcolor = document.getElementById("hoverbg").value;
    //var hoverbackgroundcss = ".hoverclass .media:hover{background-color: " +hoverbgcolor +"}";

    var elements = document.getElementsByClassName('media');
    for(var i = 0; i < elements.length; i++){
        elements[i].style.borderStyle = custombordertype;
        elements[i].style.borderColor = custombordercolor;
        elements[i].style.borderWidth = customborderwidth +"px";
        elements[i].style.borderRadius = customborderradius +"px !important";
        //document.getElementById("hovestyle").innerHTML = hoverbackgroundcss;
        //document.getElementById("socialmedialist").classList.add("hoverclass");

    }

}

function checkforhint(){

    //document.getElementById("style").addEventListener("change", function(){
        var stylevalue = document.getElementById("style").value;
    
        if((stylevalue == "basic-asside") || (stylevalue == "basic-buble-asside")){
            document.getElementById("hint").innerHTML = "Die Vorschau wurde verschoben";
            document.getElementById("hint").classList.add("hint");
        }
    
        else {
            document.getElementById("hint").innerHTML = "";
            document.getElementById("hint").classList.remove("hint");
        }
    //})

}

function exportClass(classname){
    var groundstyledata = document.getElementById("styledata").innerHTML;
    var styleclass = document.getElementById(classname).innerHTML;
    var socialmedialistdata = document.getElementById('socialmedialistdata').innerHTML;
    //create CSS Styling Data
    var styledata = "<style>" +groundstyledata +styleclass +"</style>";
    var exportdata = document.getElementById("export");
    
    // Code ausgeben
    var newexportdata = socialmedialistdata + styledata;
    exportdata.value = newexportdata;

}
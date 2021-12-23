function socialmedialist(style, fontcolor, backgroundcolor, alignment){
    var socialmedialist = document.getElementById("socialmedialist");
    var style;
    var color;
    var backgroundcolor;
    var alignment;

    // give style class
    socialmedialist.removeAttribute('class');
    socialmedialist.classList.add(style);
    
    socialmedialist.style.justifyContent = alignment;

    // give backgroundcolor
    var elements = document.getElementsByClassName('media');
    for(var i = 0; i < elements.length; i++){
        elements[i].style.backgroundColor = backgroundcolor;
        elements[i].style.color = fontcolor;
    }

}

document.getElementById('generate').addEventListener('click', function(){

    // Auswahl überprüfen
    // Facebook
    var facebook = document.getElementById("facebook");
    var linkfacebook = document.getElementById("linkfacebook").value;
    
    if(linkfacebook.length == 0){
        facebook.setAttribute('href', "https://de-de.facebook.com/");
    }
    
     else {
        facebook.setAttribute('href', linkfacebook);
    }
                                                 
    // whatsapp
    var whatsapp = document.getElementById("whatsapp");
    var linkwhatsapp = document.getElementById("linkwhatsapp").value;
    var linkwhatapp = " https://wa.me/" +linkwhatsapp;
                
    
    if(linkwhatsapp.length == 0){
        whatsapp.setAttribute('href', "https://whatsapp.com/");
    }
    
     else {
        whatsapp.setAttribute('href', linkwhatapp);
    }
    
    // instagram
    var instagram = document.getElementById("instagram");
    var linkinstagram = document.getElementById("linkinstagram").value;
                
    
    if(linkinstagram.length == 0){
        instagram.setAttribute('href', "https://instagram.com/");
    }
    
     else {
        instagram.setAttribute('href', linkinstagram);
    }
    
    //YouTube
    var youtube = document.getElementById("youtube");
    var linkyoutube = document.getElementById("linkyoutube").value;
    
    if(linkyoutube.length == 0){
        youtube.setAttribute('href', "https://youtube.com/");
    }
    
     else {
        youtube.setAttribute('href', linkyoutube);
    }

    //Twitter
    var twitter = document.getElementById("twitter");
    var linktwitter = document.getElementById("linktwitter").value;
    
    if(linktwitter.length == 0){
        twitter.setAttribute('href', "https://twitter.com/");
    }
    
     else {
        twitter.setAttribute('href', linktwitter);
    }

    //TikTok
    var tiktok = document.getElementById("tiktok");
    var linktiktok = document.getElementById("linktiktok").value;
    
    if(linktiktok.length == 0){
        tiktok.setAttribute('href', "https://tiktok.com/");
    }
    
     else {
        tiktok.setAttribute('href', linktiktok);
    }
    
    //xing
    var xing = document.getElementById("xing");
    var linkxing = document.getElementById("linkxing").value;
                
    
    if(linkxing.length == 0){
        xing.setAttribute('href', "https://xing.com/");
    }
    
     else {
        xing.setAttribute('href', linkxing);
    }
    
    //linkedin
    var linkedin = document.getElementById("linkedin");
    var linklinkedin = document.getElementById("linklinkedin").value;
                
    
    if(linklinkedin.length == 0){
        linkedin.setAttribute('href', "https://linkedin.com/");
    }
    
     else {
        linkedin.setAttribute('href', linklinkedin);
    }
    
    //linktree
    var linktree = document.getElementById("linktree");
    var linklinktree = document.getElementById("linklinktree").value;
                
    
    if(linklinktree.length == 0){
        linktree.setAttribute('href', "https://linktr.ee/");
    }
    
     else {
        linktree.setAttribute('href', linklinktree);
    }
    
    //mail
    var mail = document.getElementById("mail");
    var linkmail = document.getElementById("linkmail").value;
    linktomail = 'mailto:' +linkmail;
                
    
    if(linkmail.length == 0){
        mail.setAttribute('href', "https://www.google.de");
    }
    
     else {
        mail.setAttribute('href', linktomail);
    }

    //phone
    var phone = document.getElementById("phone");
    var linkphone = document.getElementById("linkphone").value;
    linktophone = 'tel:' +linkphone;
                
    
    if(linkphone.length == 0){
        phone.setAttribute('href', "https://www.google.de");
    }
    
     else {
        phone.setAttribute('href', linktophone);
    }

    //customicon
    var customicon = document.getElementById("customicon");
    var linkcustomicon = document.getElementById("linkcustomicon").value;
    customiconclasstype = document.getElementById("customiconclasstype").value;
    var customiconclass = document.getElementById("customiconclass").value;

    
    if(customiconclass.length == 0){
        //alert("nichts");
    }

    else{
        customicon.removeAttribute('class');
        customicon.classList.add('media');
        customicon.classList.add(customiconclasstype ,customiconclass);
    }
                
    
    if(linkcustomicon.length == 0){
        customicon.setAttribute('href', "https://www.google.de");
    }
    
     else {
        customicon.setAttribute('href', linkcustomicon);
    }
    
    
    //check for visibility
    if(document.getElementById('checkfacebook').checked == true){
        facebook.style.display = 'block';
    }

    else {
        facebook.style.display = 'none';
    }

    if(document.getElementById('checkwhatsapp').checked == true){
        whatsapp.style.display = 'block';
    }

    else {
        whatsapp.style.display = 'none';
    }

    if(document.getElementById('checkinstagram').checked == true){
        instagram.style.display = 'block';
    }

    else {
        instagram.style.display = 'none';
    }
    
    if(document.getElementById('checkyoutube').checked == true){
        youtube.style.display = 'block';
    }

    else {
        youtube.style.display = 'none';
    }

    if(document.getElementById('checktwitter').checked == true){
        twitter.style.display = 'block';
    }

    else {
        twitter.style.display = 'none';
    }

    if(document.getElementById('checktiktok').checked == true){
        tiktok.style.display = 'block';
    }

    else {
        tiktok.style.display = 'none';
    }
    
    if(document.getElementById('checkxing').checked == true){
        xing.style.display = 'block';
    }

    else {
        xing.style.display = 'none';
    }
    
    if(document.getElementById('checklinkedin').checked == true){
        linkedin.style.display = 'block';
    }

    else {
        linkedin.style.display = 'none';
    }
    
    if(document.getElementById('checklinktree').checked == true){
        linktree.style.display = 'block';
    }

    else {
        linktree.style.display = 'none';
    }

    if(document.getElementById('checkmail').checked == true){
        mail.style.display = 'block';
    }

    else {
        mail.style.display = 'none';
    }

    if(document.getElementById('checkphone').checked == true){
        phone.style.display = 'block';
    }

    else {
        phone.style.display = 'none';
    }

    if(document.getElementById('checkcustomicon').checked == true){
        customicon.style.display = 'block';
    }

    else {
        customicon.style.display = 'none';
    }

    
    // style und farben eintragen
    var style = document.getElementById('style').value;

    var ifontcolor = document.getElementById('color').value;
    var ibackgroundcolor = document.getElementById('background').value;
    var alignment = document.getElementById('alignment').value;

    socialmedialist(style, ifontcolor, ibackgroundcolor, alignment);

    // Code ausgeben
    var socialmedialistdata = document.getElementById('socialmedialistdata').innerHTML;
    var styledata = '<style>' +document.getElementById("styledata").innerHTML +'</style>';
    var exportdata = document.getElementById('export');
    exportdata.innerHTML = styledata +socialmedialistdata;


    var checked = document.querySelectorAll('input:checked');

    if (checked.length === 0) {
        // there are no checked checkboxes
        notification('error', 'Es wurde keine Auswahl getroffen. Es konnte keine Code generiert werden.');
    } else {
        // there are some checked checkboxes
        notification('success', 'Der Code für die Auswahl wurde generiert.');
    }


    
});

function notification(type, text){
    var notification = document.getElementById("notification");
    var notificationicon;
    
    if(type == 'error'){
        notification.classList.add("error");
        notificationicon = "<i class='fas fa-times'></i>";
    }

    if(type == 'success'){
        notification.classList.add("success")
        notificationicon = "<i class='fas fa-check'></i>";
    }

    if(type == '') {
        notification.classList.add("hint");
        notificationicon = "<i class='far fa-smile-wink'></i>";
    }

    notification.innerHTML = notificationicon +text;
    
    setTimeout(function(){
        notification.removeAttribute('class')
        notification.innerHTML = "";
    }, 4000);

    
}
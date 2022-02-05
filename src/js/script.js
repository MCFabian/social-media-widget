

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

//More styles
document.getElementById("morestyles").addEventListener("click", function(){
        var morestylestoggle = document.getElementById("morestyles");
        var morestylescontainer = document.getElementById("setown");
        
        morestylescontainer.classList.toggle("show");

        if(morestylescontainer.classList.contains("show")){
            morestylestoggle.innerHTML = "<i class='fas fa-minus'></i>Erweitertes Styling verbergen";
        }
        
        if(!morestylescontainer.classList.contains("show")) {
            morestylestoggle.innerHTML = "<i class='fas fa-plus'></i>Erweitertes Styling";
        }

})

// check for hint



function popup() {
    var popup = document.getElementById("popupcontainer");

    if(popup.style.display === 'flex'){
        popup.style.display = 'none';
    }

    else{
        popup.style.display = 'flex';
    }

}





function setTheme(){

    var body = document.getElementById("themehere");

    if(body.classList.contains("light")){
        body.classList.remove("light");
        body.classList.add("dark");
    }

    else{
        body.classList.add("light");
        body.classList.remove("dark");
    }
}





function selectall() {
    var ele = document.querySelectorAll('input[type=checkbox]');

    if(document.querySelectorAll('input[type=checkbox]:checked').length === 0){
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=true;  
        } 
        document.getElementById("selectall").innerHTML = "Auswahl aufheben";
        notification("success", "Alle Kanäle ausgewählt.");
    }

    else{
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=false;  
        }
        document.getElementById("selectall").innerHTML = "Alle auswählen";

        notification("success", "Auswahl der Kanäle aufgehoben.");
    }


}




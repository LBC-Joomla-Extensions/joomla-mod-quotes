var slider_activo=true;


function prev(){
    var activo=indexActivo();
    var max=maxIndex();
    var next;

    if(activo-1>=0){
        next=activo-1;
    }
    else{
        next=max;
    }

    document.getElementById("quotes_"+activo).classList.remove("quote-activo");
    document.getElementById("quotes_"+next).classList.add("quote-activo");
    
        //jQuery("#quotes_"+activo).fadeOut(1000).removeClass("quote-activo");
        //jQuery("#quotes_"+next).addClass("quote-activo").delay(1000).fadeIn(1000);  
}

function next(){
    var activo=indexActivo();
    var max=maxIndex();
    var next;

    if(activo+1<=max){
        next=activo+1;
    }
    else{
        next=0;
    }

        document.getElementById("quotes_"+activo).classList.remove("quote-activo");
        document.getElementById("quotes_"+next).classList.add("quote-activo");

        //jQuery("#quotes_"+activo).fadeOut(1000).removeClass("quote-activo");
        //jQuery("#quotes_"+next).addClass("quote-activo").delay(1000).fadeIn(1000);

}

function indexActivo(){
    var activo=document.getElementsByClassName("quote-activo")[0].getAttribute("id");
    var id_activo=activo.substring(activo.lastIndexOf("_")+1);
    
    return parseInt(id_activo);
}

function maxIndex(){
    var opiniones=document.getElementsByClassName("quotes-inner-text");

    return opiniones.length-1;
}


function activarTimer($miliseconds){
    setInterval(function(){
        if(slider_activo){
            next();
        }        
    },$miliseconds);
}

function suspenderTimer(){
    slider_activo=false;
}

function reanudarTimer(){
    slider_activo=true;
}

module.exports = {
    prev: prev,
    next: next,
    indexActivo: indexActivo,
    maxIndex: maxIndex,
    activarTimer: activarTimer,
    suspenderTimer: suspenderTimer,
    reanudarTimer: reanudarTimer,
};
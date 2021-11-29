window.onscroll = function(){changeHeader(), displayTotopButton(), showServices(), displayPurpose(), displayAction(), displaytestimony() /*showRecentWork(), displayCallToAction() */};

/* change header */
function changeHeader(){
    if(document.body.scrollTop > 35 || document.documentElement.scrollTop > 35){
        document.getElementById('mainHeader').className = 'new_header';
        /* document.getElementById('h1').style.width = '15%'; */
        /* document.querySelector('.logo').className = 'new-logo'; */
    }
    else{
        document.getElementById('mainHeader').className = 'main_header';
        /* document.getElementById('h1').style.width = '25%'; */
        /* document.querySelector('.logo').className = 'logo'; */
    }
}

/* show services */
function showServices(){
    if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
        document.getElementById('services').style.display= 'block';
        
    }
    else{
        document.getElementById('services').style.display= 'none';
        
    }
}
/* show request form */
function requestForm(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        document.getElementById('reqMaster').style.display= 'block';
        
    }
    else{
        document.getElementById('reqMaster').style.display= 'none';
        
    }
}

/* loader */
/* let loader = document.querySelector('.loading');
let main = document.querySelector('.main');

function init(){
    setTimeout(function() {
        loader.style.opacity = 0;
        loader.style.display = 'none';
        
        main.style.display = 'block';
        setTimeout(()=>{
        main.style.opacity = 1;
        }, 50);
    }, 2500);
}
init(); */

//display to top button after few seconds
function displayTotopButton(){
    if(document.body.scrollTop > 70 || document.documentElement.scrollTop > 70){
        document.querySelector('.toTop').style.display = 'block';
    }
    else{
        document.querySelector('.toTop').style.display = 'none';
    }
}

/* display mobile navigation */
function displayMenu(){
    let myMenu = document.getElementById('navigation');
    if(myMenu.style.display === "block"){
        myMenu.style.display = "none";
        
    }
    else{
        myMenu.style.display = "block";
        
    }
}

/* display request form */
$(document).ready(function(){
    $(".showRequest").click(function(){
        $("#request_form").show();
    })
})
/* close request form */
$(document).ready(function(){
    $("#close_request").click(function(){
        $("#request_form").hide();
    })
})

/* display purpose */
function displayPurpose(){
    if(document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400){
        document.getElementById('mission_vision').style.display = 'block';
    }else{
        document.getElementById('mission_vision').style.display = 'none';
    }
}
/* display call to action */
function displayAction(){
    if(document.body.scrollTop > 1800 || document.documentElement.scrollTop > 1800){
        document.getElementById('callAction').style.display = 'block';
    }else{
        document.getElementById('callAction').style.display = 'none';
    }
}
/* display testimony */
function displaytestimony(){
    if(document.body.scrollTop > 2500 || document.documentElement.scrollTop > 2500){
        document.getElementById('testimonies').style.display = 'block';
    }else{
        document.getElementById('testimonies').style.display = 'none';
    }
}
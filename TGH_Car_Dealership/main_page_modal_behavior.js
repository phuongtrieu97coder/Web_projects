
 var get_login_form = document.getElementById("login_form_block");
 var get_login_form_overlay = document.getElementById("login_form_overlay");


 
 function open_login_form(){
    get_login_form.style.display = "block";
    get_login_form_overlay.style.display = "block";
}
function close_login_form(){
    get_login_form.style.display = "none";
    get_login_form_overlay.style.display = "none";
}



var m = document.getElementById("modal1");
var o = document.getElementById("overlay1");
        

         function close_modal(){
                m.style.display = "none";
                o.style.display = "none";
         }

         function modal1(g){
              m.style.display = "block";
              o.style.display = "block";
              document.getElementById("modal_img").src= g.src;
              document.getElementById("modal_content").innerHTML= g.alt;

         }
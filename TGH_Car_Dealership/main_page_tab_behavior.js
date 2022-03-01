var get_navtop_block2 = document.querySelectorAll("#navtop_block2")[0];
function open_tgh_menu(){
    get_navtop_block2.style.display = "block";
}
function close_tgh_menu(){
    get_navtop_block2.style.display = "none";
}





function open_bugatti_car_collection(){
    document.getElementById("bugatti_car_collection").style.display = "block";
    document.getElementById("lamborghini_car_collection").style.display = "none";
    document.getElementById("mclaren_car_collection").style.display = "none";
    document.getElementById("pagani_car_collection").style.display = "none";
}
function open_lamborghini_car_collection(){
    document.getElementById("bugatti_car_collection").style.display = "none";
    document.getElementById("lamborghini_car_collection").style.display = "block";
    document.getElementById("mclaren_car_collection").style.display = "none";
    document.getElementById("pagani_car_collection").style.display = "none";
}
function open_mclaren_car_collection(){
    document.getElementById("bugatti_car_collection").style.display = "none";
    document.getElementById("lamborghini_car_collection").style.display = "none";
    document.getElementById("mclaren_car_collection").style.display = "block";
    document.getElementById("pagani_car_collection").style.display = "none";
}
function open_pagani_car_collection(){
    document.getElementById("bugatti_car_collection").style.display = "none";
    document.getElementById("lamborghini_car_collection").style.display = "none";
    document.getElementById("mclaren_car_collection").style.display = "none";
    document.getElementById("pagani_car_collection").style.display = "block";
}
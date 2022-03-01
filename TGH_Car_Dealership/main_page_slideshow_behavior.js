var block1_index1 = 1;
var bc1 = document.getElementsByClassName("block1_content");
slide_func_ac(block1_index1);

function slide_func(n){
       slide_func_ac(block1_index1 += n);
}

function slide_func_ac(n){
       if(n>bc1.length){block1_index1 = 1};
       if(n<1){block1_index1 = bc1.length};

       for(let i = 0; i<bc1.length; i++){
              bc1[i].style.display = "none";
       }

       bc1[block1_index1-1].style.display = "block";
}






var get_block2_img_block = document.getElementsByClassName("block2_slide");
var block2_index = 0;
block2_auto_slide();
function block2_auto_slide(){
    for(let b2i = 0; b2i<get_block2_img_block.length; b2i++){
        get_block2_img_block[b2i].style.display ="none";
    }
    block2_index++;
    if(block2_index>get_block2_img_block.length){block2_index=1};
    get_block2_img_block[block2_index-1].style.display = "block";
    setTimeout(block2_auto_slide,8000);
}

var block2_index2 = 1;
block2_slide_func0(block2_index2);

function block2_slide_func1(n){
    block2_slide_func0(block2_index2 += n);
}


function block2_slide_func0(n){
    if(n>get_block2_img_block.length){block2_index2 = 1};
    if(n<1){block2_index2 = get_block2_img_block.length};
    for(let b3i = 0; b3i< get_block2_img_block.length; b3i++){
        get_block2_img_block[b3i].style.display = "none";
    }
    get_block2_img_block[block2_index2-1].style.display = "block";
}
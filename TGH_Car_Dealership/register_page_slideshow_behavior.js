var get_company_branch_slideshow_block_slide = document.getElementsByClassName("company_branch_slideshow_block_slide");
var company_branch_slideshow_block_slide_index = 0;
company_branch_slideshow_block_slide_auto_slide();
function company_branch_slideshow_block_slide_auto_slide(){
    for(let b2i = 0; b2i<get_company_branch_slideshow_block_slide.length; b2i++){
        get_company_branch_slideshow_block_slide[b2i].style.display ="none";
    }
    company_branch_slideshow_block_slide_index++;
    if(company_branch_slideshow_block_slide_index>get_company_branch_slideshow_block_slide.length){company_branch_slideshow_block_slide_index=1};
    get_company_branch_slideshow_block_slide[company_branch_slideshow_block_slide_index-1].style.display = "block";
    setTimeout(company_branch_slideshow_block_slide_auto_slide,8000);
}

var company_branch_slideshow_block_slide_index2 = 1;
company_branch_slideshow_block_slide_func0(company_branch_slideshow_block_slide_index2);

function company_branch_slideshow_block_slide_func1(n){
    company_branch_slideshow_block_slide_func0(company_branch_slideshow_block_slide_index2 += n);
}


function company_branch_slideshow_block_slide_func0(n){
    if(n>get_company_branch_slideshow_block_slide.length){company_branch_slideshow_block_slide_index2 = 1};
    if(n<1){company_branch_slideshow_block_slide_index2 = get_company_branch_slideshow_block_slide.length};
    for(let b3i = 0; b3i< get_company_branch_slideshow_block_slide.length; b3i++){
        get_company_branch_slideshow_block_slide[b3i].style.display = "none";
    }
    get_company_branch_slideshow_block_slide[company_branch_slideshow_block_slide_index2-1].style.display = "block";
}
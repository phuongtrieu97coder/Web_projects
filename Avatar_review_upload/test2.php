<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS TEMPLATE FASHION BLOG">


              <meta name="author"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
              





             


              <title>PHUONG WEBSITE</title>



          



              <style>
  


   
    
              </style>
       </head>




       <body>

    
        

         <header>
       
      

          </header>


         
     <main>



      
       <div id="user_avatar_block" 
       style="width:200px;height:200px;
       clip-path:circle(50% at 50% 50%);position:relative;left:100px;background-color:black;">
                 <img id="user_avatar_block_avatar_img"
                  width="100%" height="100%"
                 title="Display your Avatar Image" data-toggle="tooltip" data-placement="right"
                 style="position:absolute;top:0;bottom:0;
                 left:0;right:0;z-index:1;cursor:pointer;" 
                 onclick="open_display_avatar_block(this)">

              


             


                <button id="upload" type="button" class="w3-button w3-ripple w3-block
              w3-blue w3-text-white w3-hover-aqua w3-hover-text-white" 
              onclick="open_avatar_gallery_block()"
               style="position:absolute;top:160px;bottom:0;left:0;right:0;z-index:2;">
               <i class="fa fa-file-photo-o"></i> AVATAR
              </button>

             


       </div>


       <div id="overlay1" onclick="close_display_avatar_block()"
       style="display:none;width:100%;height:100%;position:fixed;top:0;left:0;
       right:0;bottom:0;z-index:1;background-color:rgba(0, 0, 0, 0.637);"
       ></div>

       <div id="overlay2" onclick="close_avatar_gallery_block()"
       style="display:none;width:100%;height:100%;position:fixed;top:0;left:0;
       right:0;bottom:0;z-index:1;background-color:rgba(0, 0, 0, 0.637);"
       ></div>


       <div id="display_avatar_block" style="background-color:white;display:none;width:800px;
                border:10px double aqua;box-shadow:2px 2px 8px 8px yellowgreen,
                -2px -2px 8px 8px yellowgreen;position:fixed;top:20px;
                left:300px;z-index:2;">
                       <img id="display_avatar_block_avatar_img" width="100%" height="500px">

                       <button id="close_avatar_block_butt"  title="CLOSE"
                     type="button" class="w3-button w3-ripple w3-transparent w3-text-red
                      w3-hover-red w3-hover-text-white" style="position:absolute;top:0;right:0;
                      font-size:100px;"
                     onclick="close_display_avatar_block()" >&times;</button>
       </div>




       <div id="display_avatar_gallery_block"
        style="
       display:none;width:800px;
       border:10px double aqua;box-shadow:2px 2px 8px 8px yellowgreen,
       -2px -2px 8px 8px yellowgreen;position:fixed;top:20px;
       left:300px;z-index:2;">

              <div style="position:relative;top:0;margin-bottom:-10px;">


                     <label for="file1" style="
                     height:50px;
                     display: inline-block;
                     padding: 10px 0;cursor: pointer;width:610px;
                    text-align:center;
                     background-color:yellowgreen;" class="w3-hover-purple">

                     <input id="file1" type="file" 
                     accept="image/*" name="file1"
                      style="display:none">

                     <b style="font-size:20px;color:white;position:relative;">
                     <i class="fa fa-file-image-o"></i>
                     Upload Avatar from your local folder</b>
                     </label>
                     
              
                     <button id="upload_button" type="button" class="w3-button w3-ripple
                     w3-blue w3-text-white w3-hover-aqua w3-hover-text-white"
                     style="width:120px;height:50px;position:relative;top:-5px;left:-5px;" onclick="upload_save_avatar()">
                     <b><i class="fa fa-file-photo-o"></i> UPLOAD</b>
                     </button>
              

                     <button id="close_avatar_block_butt"  title="CLOSE"
                            type="button" class="w3-button w3-red w3-ripple
                            w3-text-white w3-hover-white w3-hover-text-red"
                            style="height:50px;width:50px;font-size:20px;position:absolute;top:0;right:0"
                            onclick="close_avatar_gallery_block()" ><b>X</b>
                     </button>

             </div>


              <div id="progress_block" class="progress" 
              style="display:none;
              height:20px">
                     <div id="progress_bar" class="progress-bar progress-bar-animated progress-bar-striped"
                     style="background-color:green;color:white;padding-top:5px;height:20px;
                     text-align:center;font-size:15px;"></div>
              </div>



             <div id="avatar_uploaded_file_block"
              class="w3-center bg-white" style="display:none;
              border-bottom:4px double green;">
                         
                      <b style="text-decoration:underline;font-size:25px;
                      text-shadow:4px 2px 4px blue;color:yellow;
                      background-color:black">Your Avatar Uploaded File</b>
                       <br>
                       <img id="display_avatar_gallery_avatar_upload" 
                       width="200px" height="200px">
                       

                       
              </div>




              <div id="recent_avatar_uploaded_file_block"
               class="w3-center bg-white" style="border-bottom:4px double green;">
                         
                         <b style="text-decoration:underline;font-size:25px;
                         text-shadow:4px 2px 4px blue;color:yellow;
                         background-color:black">Your Recent Avatar File</b>
                          <br>
                          <img id="avatar_gallery_recent_avatar_img" 
                          width="200px" height="200px">
                          
   
                          
              </div>




                    
      </div>


        <script>
         $(document).ready(function(){
                $("[data-toggle='tooltip']").tooltip();

                $("#user_avatar_block_avatar_img").hover(
                       function(){
                              $(this).fadeTo("fast",0.8);
                       },
                       function(){
                              $(this).fadeTo("fast",1);
                       }
                )


              
         });

;


var fileTypesCollection = [
   "image/jpeg",
   "image/pjpeg",
   "image/png",
   "image/apng",
   "image/gif",
   "image/webp",
   "image/bmp",
   "image/x-icon",
   "image/svg+xml",
   "image/tiff"
];




function validateFileType(file){
    return fileTypesCollection.includes(file.type);
}


function check_file_size(number){
    if(number < 1024){
        return number + " bytes";
    }else if(number > 1024 && number <= 1048576){
        return (number / 1024).toFixed(1) + " KB";
    }else if(number > 1048576){
        return (number / 1048576).toFixed(1) + " MB";

    }else{
        return number + " bytes";
    }
}



document.getElementById("file1").addEventListener("change", function() {

    var file1 = document.getElementById('file1').files;

    var get_avatar_uploaded_file_block =
      document.querySelectorAll("#avatar_uploaded_file_block")[0];


      var get_display_avatar_gallery_avatar_upload = 
      document.getElementById("display_avatar_gallery_avatar_upload");

    

  if (validateFileType(file1[0])== true) {

    var avatar_img_preview_info = document.createElement("h3");
      avatar_img_preview_info.innerHTML = `
      File name: ${file1[0].name}. File type: ${file1[0].type}.
       File size: ${check_file_size(file1[0].size)}
      `;

       
    get_avatar_uploaded_file_block.style.display = "block";
    get_avatar_uploaded_file_block.appendChild(avatar_img_preview_info);
    
    get_display_avatar_gallery_avatar_upload.setAttribute("src",URL.createObjectURL(file1[0]));
    
  }else{
    var avatar_img_preview_info_error = document.createElement("h3");
      avatar_img_preview_info_error.innerHTML = "Sorry, your file name: "+ 
      file1[0].name +
       " is invalid. Please select another image file!!!"; 

    get_avatar_uploaded_file_block.style.display = "block";
    get_avatar_uploaded_file_block.appendChild(avatar_img_preview_info_error);
  }


});

function upload_save_avatar(){
       var width1 = 0;
       var setInterval1 = setInterval(progress_func,50);
       var get_progress = document.getElementById("progress_bar");
       document.getElementById("progress_block").style.display = "block";

       function progress_func(){
              if(width1>=100){
                     clearInterval(setInterval1);
                     alert("Successfully uploaded your Avatar!!!");

                     document.getElementById("progress_block").style.display = "none";
                    

                            let files1 = document.getElementById('file1').files[0];
                           
                            localStorage.setItem("User_avatar",URL.createObjectURL(files1));
                            


                                   document.getElementById('display_avatar_gallery_avatar_upload')
                                   .setAttribute("src",localStorage.getItem("User_avatar"));

                                   document.getElementById('avatar_gallery_recent_avatar_img').src = 
                                   localStorage.getItem("User_avatar");


                                   document.getElementById('user_avatar_block_avatar_img').src = 
                                   localStorage.getItem("User_avatar");
                           
       
              }else{
                    width1++;
                    get_progress.style.width = width1+"%";
                    get_progress.innerHTML = width1*1+"%";

              }



       }

       
      
}

       
document.getElementById('avatar_gallery_recent_avatar_img').src = 
localStorage.getItem("User_avatar");


document.getElementById('user_avatar_block_avatar_img').src = 
localStorage.getItem("User_avatar");

       


         function open_display_avatar_block(avatar_img){
                document.getElementById("display_avatar_block_avatar_img").src = avatar_img.src;
                document.getElementById("display_avatar_block").style.display = "block";
                document.getElementById("overlay1").style.display = "block";
         }
         function close_display_avatar_block(){
                document.getElementById("display_avatar_block").style.display = "none";
                document.getElementById("overlay1").style.display = "none";
         }

         
         function open_avatar_gallery_block(){
                document.getElementById("display_avatar_gallery_block").style.display = "block";
                document.getElementById("overlay2").style.display = "block";
         }
         function close_avatar_gallery_block(){
                document.getElementById("display_avatar_gallery_block").style.display = "none";
                document.getElementById("overlay2").style.display = "none";
         }


        
        </script>
 

    
              



          </main>



       
       </body>





       <footer>

       </footer>



</html>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>



     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <title>PHUONG WEB</title>

     <link rel="shortcut icon"   href="image/js_logo.png" type="image/x-icon">

        
  


         <style>

[class='preview_file_block']{
  border:4px double blue;
  padding:10px 40px;
}
  
  [class='preview_file_block'] h5, [class='preview_file_block'] img{
    display:inline-block;
  } 
         </style>
    </head>


    <body>

      <header>
      </header>


      <main>
 

      <form id="form1" title="form1" name="form1"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
      method="post" target="_self" enctype="multipart/form-data"
      style="width:700px;padding:20px;border:4px double purple"
      onsubmit= "upload_img()">
      
            <label for="file0" class="w3-hover-aqua w3-hover-text-white"
             style="width:100%;font-size:25px;
            padding:10px 0;background-color:lightgreen;
            color:white;cursor:pointer">

              <input id="file0" type="file" accept=".jpg, .jpeg, .png" 
               name="file0"  multiple
              style="opacity:0;">
              <b style="position:relative;left:250px;top:-20px;display:inline-block;">
              <i class="fa fa-file-image-o"></i> Upload IMAGE</b>
            </label>


                    

              <div class="w3-center">
                    <b style="background-color:black;color:white;
                    text-shadow:2px 2px 5px aqua">Your Uploading Image</b>
              </div>



              <div class="preview">

              </div>

              <button id="upload_button" title="Upload button"
              name="upload_butt" type="submit" class="btn btn-block btn-info
              text-white w3-hover-blue" style="font-size:25px;">
                <b><i class="fa fa-file-image-o"></i> UPLOAD</b>
              </button>
    
      </form>
   
      <script>
        
   var get_input_file = document.getElementById("file0");
   var get_preview_block = document.querySelectorAll(".preview")[0];

   
   get_input_file.addEventListener('change', updateImageDisplay);
  /* 
  Next, we add an event listener to the input to listen for changes to its selected value changes (in this case, when files are selected). The event listener invokes our custom updateImageDisplay() function.
  */ 

   
const fileTypes = [
  "image/apng",
  "image/bmp",
  "image/gif",
  "image/jpeg",
  "image/pjpeg",
  "image/png",
  "image/svg+xml",
  "image/tiff",
  "image/webp",
  "image/x-icon"
];

function validFileType(file) {
  return fileTypes.includes(file.type);
}


/* 
The custom validFileType() function takes a File object as a parameter, then uses .includes() to check if any value in the fileTypes matches the file's type property. If a match is found, the function returns true. If no match is found, it returns false.

*/


function returnFileSize(number) {
  if(number < 1024) {
    return number + 'bytes';
  } else if(number >= 1024 && number < 1048576) {
    return (number/1024).toFixed(1) + 'KB';
  } else if(number >= 1048576) {
    return (number/1048576).toFixed(1) + 'MB';
  }
}
/*  
The returnFileSize() function takes a number (of bytes, taken from the current file's size property), and turns it into a nicely formatted size in bytes/KB/MB.
*/



function updateImageDisplay() {
  

  const curFiles = get_input_file.files;

/* 
Grab the FileList object that contains the information on all the selected files, and store it in a variable called curFiles.
*/

  if(curFiles.length === 0) {
    const para = document.createElement('p');
    para.innerHTML = 'No files currently selected for upload';
    get_preview_block.appendChild(para);

    /* 
    Check to see if no files were selected, by checking if curFiles.length is equal to 0. If so, print a message into the preview <div> stating that no files have been selected.
    */

  } else {

    /* If files have been selected, we loop through each one, printing information about it into the  <div class="preview">. */





        for(const file of curFiles) {
        
          //we use for loop to loop through the selected files
          // in case there are more than one file => <div class="preview">
          // will create more <div> tag
          // file variable will return information of selected file

          
          const list = document.createElement('div');
        list.setAttribute("class","preview_file_block");
        get_preview_block.appendChild(list);

        //we create a <div> tag inside <div class="preview">
        // set set attribute class='preview_file_block' to style with CSS
        // in order to make the check image information text
        // and the image display inline

         

          const para = document.createElement('h5');


              if(validFileType(file)) {
                para.innerHTML = `File name ${file.name},
                file size ${returnFileSize(file.size)}.`;

                /* 
                We use the custom validFileType() function to check whether the file is of the correct type (e.g. the image types specified in the accept attribute).


                If it is, we:
Print out its name and file size into a list item inside the previous <div> (obtained from file.name and file.size). The custom returnFileSize() function returns a nicely-formatted version of the size in bytes/KB/MB (by default the browser reports the size in absolute bytes).
                
                */


                const image = document.createElement('img');
                image.src = URL.createObjectURL(file);
                image.setAttribute("width","100px");
                image.setAttribute("height","100px");

                /* 
                Generate a thumbnail preview of the image by calling URL.createObjectURL(curFiles[i]). Because we just looped with
                variable file =>  curFiles[i] = file
                Then, insert the image into the list item too by creating a new <img> and setting its src to the thumbnail.
                */

                list.appendChild(image);
                list.appendChild(para);
                // these appendChild specified the position 
                // of the image block and para block before or after 
                // each other.

                
              } else {
                para.innerHTML = `File name ${file.name}: Not a valid file type.
                Update your selection.`;
                list.appendChild(para);
              /* 
              If the file type is invalid, we display a message inside a list item telling the user that they need to select a different file type.

              */


              }

          
        }
  }
}
      </script>


     </main>

 

   
     
      
    </body>


   


    <footer>


    </footer>




</html>
        









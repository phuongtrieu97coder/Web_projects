<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" type='text/css' href="Sass_Css_file/test1.css">




    <style>
    [id="navtop1"] {
        display: grid;
        grid-template-columns: 500px 300px 600px;
        font-size: 20px;
    }

    [id="navtop_1_1"],
    [id="navtop_1_2"],
    [id="navtop_1_3"] {
        border: 2px solid yellow;
    }

    [id="navtop_1_1"] li {
        display: inline-block;
        cursor: pointer;

    }

    [id="sign_up_butt"],
    [id="search_form"] {
        display: inline;
    }

    [id="sign_up_butt"],
    [id="search_butt"] {
        border: none;
    }

    [id="search_bar"] {
        width: 300px;
    }

    [id="search_bar"]:focus {
        color: red;
    }

    [id="search_modal"]{
           display:none;
           position:fixed;
           top:100px;
           left:400px;
           width:400px;
           height:80px;
           background-color:black;
           color:aqua;
           font-size:50px;
           z-index:3;
           border:2px solid red;
    }

    [id="close_search_modal_butt"]{
           position:absolute;
           top:0;
           right:0;
           background-color:black;
           color:red;
           font-size:50px;
           border:none;
    }
    [id="close_search_modal_butt"]:hover{
           background-color:red;
           color:white;
    }




    /*style sign-up form1*/

    [id="block1"] {
        
        display: grid;
        grid-template-columns: auto 700px;
        position: relative;
        top: 100px;
        z-index:1;

    }

    [id="form1"] {

        border: 2px solid green;
        width: 600px;
        font-size: 30px;
        padding: 20px;
    }



    [id="male_check"],
    [id="female_check"] {
        height: 20px;
        width: 20px;
    }
    </style>
</head>


<body>

    <header>
        <ul class="nav w3-black fixed-top" id="navtop1">
            <span id="navtop_1_1">
                <li class="nav-item">
                    <a class="nav-link w3-text-yellow w3-hover-red w3-hover-text-white"><i class="fa fa-home"></i>
                        HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-text-aqua w3-hover-red w3-hover-text-white"><i class="fa fa-bars"></i>
                        MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-text-red w3-hover-red w3-hover-text-white"><i class="fa fa-envelope"></i>
                        EMAIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-text-green w3-hover-red w3-hover-text-white"><i class="fa fa-phone"></i>
                        CONTACT</a>
                </li>
            </span>


            <span id="navtop_1_2" class="w3-center" style="padding-top:5px;">
                <b class="text-warning">REGISTER PAGE</b>
            </span>


            <span id="navtop_1_3">
                <button class="nav-link w3-black text-primary w3-hover-red
                         w3-hover-text-white" id="sign_up_butt"><i class="fa fa-sign-in"></i> SIGN-UP</button>



                <form id="search_form" action="test3.php" target="modal_iframe" title="search_form" method="post">
                    <input id="search_bar" list="datalist1" type="search" name="search1" title="search something"
                        placeholder="Search...">

                        <datalist id="datalist1"></datalist>

                    <button class="w3-black text-info w3-hover-red w3-hover-text-white" id="search_butt"
                        type="submit" onclick="search_modal()"><i class="fa fa-search"></i> SEARCH</button>
                </form>
            </span>
        </ul>


        <script>
                 var xml = new XMLHttpRequest();
       xml.onload = function(){
           if(this.status== 200){
               var obj1 = JSON.parse(this.responseText);
               var text = "";
               
               for(let i in obj1.language){
                   text += `
                   <option value="html">${obj1.language._front_end[0]}</option>
                   <option value="css">${obj1.language._front_end[1]}</option>
                   <option value="sass">${obj1.language._front_end[2]}</option>
                   <option value="javascript">${obj1.language._front_end[3]}</option>
                   <option value="php">${obj1.language._back_end[0]}</option>
                   <option value="mysql">${obj1.language._back_end[1]}</option>
                   <option value="nodejs">${obj1.language._back_end[2]}</option>
                   <option value="asp">${obj1.language._back_end[3]}</option>
                   
                   `;
                   document.getElementById("datalist1").innerHTML = text;
               }
           }
       }
       xml.open("GET","Json_file/test1.json",true);
       xml.send();
        </script>




       <aside id="search_modal" >
              <button id="close_search_modal_butt" onclick="close_search_modal()">&times;</button>
             
               <iframe  name="modal_iframe" title="modal_iframe" width="100%" height="100%"></iframe>
            
       </aside>


       <script>
              function search_modal(){
                     document.getElementById("search_modal").style.display="block";
                     document.getElementById("search_modal").className="w3-animate-zoom";
              }
              function close_search_modal(){
                     document.getElementById("search_modal").style.display="none";
              }
       </script>

    </header>




    <main>




        <div id="block1">




            <div id="block1_1">


                <form id="form1" action="test2.php" method="post" 
                target="iframe1" title="form1" enctype="multipart/form-data">

                    <div style="margin-top:50px;font-size:50px;color:rgb(24, 199, 132);">
                        <p class="w3-center"><i class="fa fa-user-circle-o"></i> SIGN-UP </p>
                    </div>

                    <label for="name_id"><b>Name:</b></label><br>
                    <input id="name_id" type="text" name="name1" placeholder="Enter name..." required
                        style="width:100%"><br>



                    <label for="password_id"><b>Password:</b></label><br>
                    <input id="password_id" type="password" name="password1" placeholder="Enter password..."
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and
                            lowercase letter, and at least 8 or more characters" required style="width:100%"><br>


                    <label for="email_id"><b>Email:</b></label><br>
                    <input id="email_id" type="email" name="email1" placeholder="Enter email..."
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must be in the following order: characters@characters.domain 
                            (characters followed by an @ sign, followed by more characters, and then a '.'" required
                        style="width:100%"><br>


                    <label for="address_id"><b>Address:</b></label><br>
                    <input id="address_id" type="text" name="address1" placeholder="Enter address..." required
                        style="width:100%"><br>





                    <label for="telephone_id"><b>Phone Number:</b></label><br>
                    <input id="telephone_id" type="tel" name="telephone1" placeholder="Enter phone number..."
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="phone number must be xxx-xxx-xxxx" required
                        style="width:100%"><br>



                    <label for="age_id"><b>Age:</b></label><br>
                    <input id="age_id" type="number" name="age1" placeholder="Enter your age..." pattern="[0-9]{2}"
                        required style="width:100%"><br>


                    <label for="dob_id"><b>Date Of Birth:</b></label><br>
                    <input id="dob_id" type="date" name="dob1" placeholder="Enter your birthday..." required
                        style="width:100%"><br>



                    <label><b>Gender:</b></label><br>
                    <input id="male_check" type="checkbox" value="male" name="male1"><label>Male</label>
                    <input id="female_check" type="checkbox" value="female" name="female1"><label>Female</label>

                    <br>


                    <label for="service_sel"><b>Service Selection:</b></label><br>
                    <select id="service_sel" name="service_sel1" style="width:100%" required>
                        <option disabled selected>---Service Selection---</option>
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                        <option value="first class">First Class</option>
                        <option value="vip">VIP</option>
                    </select>

                   



                    <label for="reason_comment"><b>Register's Reason:</b></label><br>
                    <textarea id="reason_comment" name="reason_comment1" style="width:100%;height:80px;overflow:scroll"
                        required>

                            </textarea><br><br>


                            <label for="upload_img"><b>Upload Avatar: <i class="fa fa-user"></i></b></label><br>
                            <input type="file" id="upload_img" name="file" required>
                            


                    <input id="submit_butt" type="submit" class="w3-btn w3-ripple w3-green w3-hover-aqua"
                        value="REGISTER" name="upload1" style="float:right;font-size:30px;padding:10px 20px">


                    <br><br>








                </form>
            </div>





            <div id="block1_2">
                <iframe id="iframe_block1" name="iframe1" src="test1.html" width="100%" height="500px"
                    style="border:2px solid blue"></iframe>

                    <br><br>



                

</form>

            </div>




        </div>




        




    </main>



    



</body>





<footer>

</footer>




</html>

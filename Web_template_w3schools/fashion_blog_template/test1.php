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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
          
        





        <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


        <title>PHUONG FASHION TEMPLATE</title>



        <link rel="stylesheet"  type="text/css" href="test1.css">


        <style>
               
        </style>
 </head>




 <body>
        <header>
               <nav id="navtop1">
                      <button class="nvbutt1" type="button" title="Facebook"><i class="fa fa-facebook-square"></i></button>
                      <button class="nvbutt2" type="button" title="Instagram"><i class="fa fa-instagram"></i></button>
                      <button class="nvbutt3" type="button" title="Snapchat"><i class="fa fa-snapchat"></i></button>
                      <button class="nvbutt4" type="button" title="Flickr"><i class="fa fa-flickr"></i></button>
                      <button class="nvbutt5" type="button" title="Twitter"><i class="fa fa-twitter"></i></button>
                      <button class="nvbutt6" type="button" title="Linkedin"><i class="fa fa-linkedin"></i></button>
                      <button class="nvbutt7" type="button" title="Search"><i class="fa fa-search"></i></button>
               </nav>


               <section id="web_intro">
                      <div class="w3-center" id="web_intro_content">
                             <h1 id="web_content_title"><b>JANE BLOGLIFE</b></h1><br>
                             <h6 id="web_content_welcome">Welcome to the blog of <span class="w3-tag">Jane's world</span></h6>
                      </div>
               </section>
        </header>


        <main>
             <article class="w3-display-container" id="subscribe_poster_block">
                   <img src="https://www.w3schools.com/w3images/jane.jpg" 
                   alt="fashion blog" width="100%" height="900px">

                   <span class="w3-display-left" id="subscribe_content">
                          <h1 id="subscribe_content_jane">Jane's</h1><br>
                          <h1 id="subscribe_content_fashion_block"><b>FASHION BLOG</b></h1>
                       
                          <button class="w3-opacity w3-hover-opacity-off" id="subscribe_butt1"
                           type="button" title="open subscribe modal block"
                           onclick="subscribe_block()">SUBSCRIBE</button>
                   </span>
             </article>



             <div id="overlay1" onclick="close_subscribe_block()"></div>

             <form id="subscribe_block" class="w3-animate-opacity" 
             action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
             method="post" target="_self" title="subscribe_form">
                   
             <?php
             
             $email = "";

             if($_SERVER["REQUEST_METHOD"] == "POST"){
                 $email = check_func($_POST["email1"]);
             }

             function check_func($data){
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 return $data;
             }
             
             ?>

                    <button id="subscribe_close_butt" type="button" title="close subscribe block"
                    onclick="close_subscribe_block()"><b>&times;</b></button>


                  <h2>SUBSCRIBE</h2><br>
                  <p>Join my mailing list to receive updates on the lastest blog posts and other things.</p><br>

                  <input id="email_input" type="email" 
                  name="email1" placeholder="Enter e-mail"
                   style="width:100%;font-size:20px;padding-left:10px;" required
                   value="<?php echo $email;?>"><br><br>


                  <input id="subscribe_butt" type="submit"
                   value="Subscribe" 
                   >
             </form>


             <script>
                 
                 function subscribe_block(){
                     document.getElementById("subscribe_block").style.display="block";
                     
                     document.getElementById("overlay1").style.display="block";

                 }
                 function close_subscribe_block(){
                     document.getElementById("subscribe_block").style.display="none";
                     
                     document.getElementById("overlay1").style.display="none";

                 }


             </script>

             <br>


             <div id="main_content_block">



                  <div id="main_content_block1">



                       <div id="main_content_block1_1">
                             <div class="w3-center">
                                 <h5><b>TITLE HEADING</b></h5><br>
                                 <h6><b>Title description,<span style="color:gray;"> May 2, 2016</span></b></h6>
                             </div>
                             <br>

                             <img src="https://www.w3schools.com/w3images/girl_hat.jpg"
                              alt="girl" width="100%" height="400px">

                              <br>
                              <br>

                              <p style="font-size:18px;">
                              <strong>More Hats!</strong> I am crazy about hats these days. 
                              Some text about this blog entry. 
                              Fashion fashion and mauris neque quam, fermentum ut nisl vitae,
                               convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.
                                Vivamus porttitor magna enim, ac accumsan tortor cursus at. 
                                Phasellus sed ultricies mi non congue ullam corper. 
                                Praesent tincidunt sedtellus ut rutrum.
                                 Sed vitae justo condimentum, porta lectus vitae,
                                  ultricies congue gravida diam non fringilla.
                              </p>


                              <p style="font-size:18px;">
                              Sunt in culpa qui officia deserunt mollit anim id est 
                              laborum consectetur adipiscing elit, sed do eiusmod tempor 
                              incididunt ut labore et dolore magna aliqua. 
                              Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                              </p>

                              <div>
                                  <button  id="like_butt1" type="button" title="like button"
                                   onclick="check_like1()"><i class="fa fa-thumbs-up"></i> Like</button>

                                   <button id="reply_butt" type="button" title="reply button"
                                   data-toggle="collapse" data-target="#comment_block">Replies <span class="w3-tag">1</span></button>
                              </div>


                              <br>


                              <div id="comment_block" class="collapse">
                                       <div id="comment_block_user1">

                                           <div class="w3-left" id="user_avatar">
                                           <img src="https://www.w3schools.com/w3images/avatar_smoke.jpg"
                                            alt="avatar_smoke" width="80px" height="80px">

                                           </div>
                                          
                                            <div id="user_comment">
                                                 <h4>George<span> May 3, 2015, 6:32 PM</span></h4>
                                                 <p>Great blog post! Following</p>
                                            </div>

                                       </div>

                              </div>
                       </div>


                       <br><br>



                       <div id="main_content_block1_2">
                       <div class="w3-center">
                                 <h5><b>TITLE HEADING</b></h5><br>
                                 <h6><b>Title description,<span style="color:gray;"> April 23, 2016</span></b></h6>
                             </div>
                             <br>

                             <img src="https://www.w3schools.com/w3images/man_hat.jpg"
                              alt="girl" width="100%" height="400px">

                              <br>
                              <br>

                              <p style="font-size:18px;">
                              <strong>Hats!</strong> The trend this summer is hats for men!
                              </p>


                              <p style="font-size:18px;">
                              Some text about this blog entry. Fashion fashion and mauris neque quam,
                               fermentum ut nisl vitae, convallis maximus nisl. 
                               Sed mattis nunc id lorem euismod placerat. 
                               Vivamus porttitor magna enim, ac accumsan tortor cursus at. 
                               Phasellus sed ultricies mi non congue ullam corper. 
                               Praesent tincidunt sedtellus ut rutrum. 
                               Sed vitae justo condimentum, porta lectus vitae,
                                ultricies congue gravida diam non fringilla.
                              </p>

                              <div>
                                  <button id="like_butt2" type="button" title="like button"
                                   onclick="check_like2()"><i class="fa fa-thumbs-up"></i> Like</button>

                                   <button id="reply_butt" type="button" title="reply button"
                                   data-toggle="collapse" data-target="#comment_block2">Replies <span class="w3-tag">2</span></button>
                              </div>



                              <br>


                                <div id="comment_block2" class="collapse">
                                        <div id="comment_block_user1">

                                            <div class="w3-left" id="user_avatar">
                                            <img src="https://www.w3schools.com/w3images/girl_train.jpg"
                                            alt="girl train" width="80px" height="80px">

                                            </div>
                                            
                                            <div id="user_comment">
                                                <h4>Amber<span> April 26, 2015, 10:52 PM</span></h4>
                                                <p>Love your blog page! Simply the best! 
                                                    Lorem ipsum dolor sit amet, consectetur
                                                     adipiscing elit, sed do eiusmod tempor incididunt
                                                      ut labore et dolore magna aliqua.

                                                  </p>
                                            </div>

                                        </div>




                                        <div id="comment_block_user2">

                                            <div class="w3-left" id="user_avatar">
                                            <img src="https://www.w3schools.com/w3images/girl.jpg"
                                            alt="girl" width="80px" height="80px">

                                            </div>
                                            
                                            <div id="user_comment">
                                                <h4>Angie<span>  April 23, 2015, 9:12 PM</span></h4>
                                                <p>Love hats!!</p>
                                            </div>

                                        </div>

                                </div>



                       </div>



                       <br><br>



                       <div id="main_content_block1_3">
                       <div class="w3-center">
                                 <h5><b>TITLE HEADING</b></h5><br>
                                 <h6><b>Title description,<span style="color:gray;"> April 7, 2016</span></b></h6>
                             </div>
                             <br>

                             <img src="https://www.w3schools.com/w3images/runway.jpg"
                              alt="girl" width="100%" height="400px">

                              <br>
                              <br>

                              <p style="font-size:18px;">
                              <strong>Dont miss!</strong> The runway in New York City this weekend is gonna be legendary!
                              </p>


                              <p style="font-size:18px;">
                              Some text about this blog entry. 
                              Fashion fashion and mauris neque quam,
                               fermentum ut nisl vitae, convallis maximus nisl. 
                               Sed mattis nunc id lorem euismod placerat. 
                               Vivamus porttitor magna enim, ac accumsan tortor cursus
                                at. Phasellus sed ultricies mi non congue ullam corper.
                                 Praesent tincidunt sedtellus ut rutrum. 
                                 Sed vitae justo condimentum, porta lectus vitae, 
                                 ultricies congue gravida diam non fringilla.
                              </p>

                              <div>
                                  <button id="like_butt3" type="button" title="like button"
                                   onclick="check_like3()"><i class="fa fa-thumbs-up"></i> Like</button>

                                   <button id="reply_butt" type="button" title="reply button"
                                   data-toggle="collapse" data-target="#comment_block3">Replies <span class="w3-tag">3</span></button>
                              </div>


                              <br>


                                <div id="comment_block3" class="collapse">
                                        <div id="comment_block_user1">

                                            <div class="w3-left" id="user_avatar">
                                            <img src="https://www.w3schools.com/w3images/girl_mountain.jpg"
                                            alt="girl mountain" width="80px" height="80px">

                                            </div>
                                            
                                            <div id="user_comment">
                                                <h4>Jane<span> April 10, 2015, 7:22 PM</span></h4>
                                                <p>That was a great runway show! Thanks for everything.</p>
                                            </div>

                                        </div>




                                        <div id="comment_block_user2">

                                            <div class="w3-left" id="user_avatar">
                                            <img src="https://www.w3schools.com/w3images/boy.jpg"
                                            alt="boy" width="80px" height="80px">

                                            </div>
                                            
                                            <div id="user_comment">
                                                <h4>John<span> April 8, 2015, 10:32 PM</span></h4>
                                                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>

                                        </div>





                                        <div id="comment_block_user3">

                                            <div class="w3-left" id="user_avatar">
                                            <img src="https://www.w3schools.com/w3images/girl_hood.jpg"
                                            alt="avatar_smoke" width="80px" height="80px">

                                            </div>
                                            
                                            <div id="user_comment">
                                                <h4>Anja<span> April 7, 2015, 9:12 PM</span></h4>
                                                <p>Cant wait for the runway to start!</p>
                                            </div>

                                        </div>

                                </div>



                       </div>




                  </div>


                  <script>

                      function check_like1(){
                          document.getElementById("like_butt1").innerHTML = "<i class='fa fa-check'></i> Liked";
                      }



                      function check_like2(){
                          document.getElementById("like_butt2").innerHTML = "<i class='fa fa-check'></i> Liked";
                      }



                      function check_like3(){
                          document.getElementById("like_butt3").innerHTML = "<i class='fa fa-check'></i> Liked";
                      }
                     
                  </script>






                  <div id="main_content_block2">



                       <div id="main_content_block2_1">
                           <img src="https://www.w3schools.com/w3images/avatar_girl2.jpg" alt="girl2"
                           width="100%" height="250px">

                           <div id="main_content_block2_1_content">
                               <h4>My Name</h4>

                               <p>
                               Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.
                               </p>
                           </div>
                       </div>

                        <br>




                       <div id="main_content_block2_2">
                                   <div id="popular_title">
                                      <h4>Popular Posts</h4><br>
                                   </div>


                                   <div id="popular_post_block">


                                       <div id="popular_post_block_1">
                                           <div class="w3-left" id="popular_post_block_1_avatar">
                                               <img src="https://www.w3schools.com/w3images/avatar_smoke.jpg" alt="smoke" width="50px" height="50px">
                                           </div>

                                           <div id="popular_post_block_1_content">
                                               <h5>Denim</h5>
                                               <p>Sed mattis nunc</p>
                                           </div>




                                       </div>






                                       <div id="popular_post_block_2">
                                           <div class="w3-left" id="popular_post_block_2_avatar">
                                               <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="bandmember" width="50px" height="50px">
                                           </div>

                                           <div id="popular_post_block_2_content">
                                               <h5>Sweaters</h5>
                                               <p>Praes tinci sed</p>
                                           </div>




                                       </div>






                                       <div id="popular_post_block_3">
                                           <div class="w3-left" id="popular_post_block_3_avatar">
                                               <img src="https://www.w3schools.com/w3images/workshop.jpg" alt="workshop" width="50px" height="50px">
                                           </div>

                                           <div id="popular_post_block_3_content">
                                               <h5>Workshop</h5>
                                               <p>Ultricies congue</p>
                                           </div>




                                       </div>





                                       <div id="popular_post_block_4">
                                           <div class="w3-left" id="popular_post_block_4_avatar">
                                               <img class="w3-sepia" src="https://www.w3schools.com/w3images/avatar_smoke.jpg" alt="smoke" width="50px" height="50px">
                                           </div>

                                           <div id="popular_post_block_4_content">
                                               <h5>Trends</h5>
                                               <p>Lorem ipsum dipsum</p>
                                           </div>




                                       </div>


                                   </div>



                       </div>

                         <br>




                       <div id="main_content_block2_3">
                                   <div id="advertise_title">
                                      <h4>Advertise</h4><br>
                                   </div>

                                   <div  id="advertise_content_block">
                                       <div class="w3-display-container" id="advertise_content">
                                           <p  class="w3-display-middle">Your AD Here</p>
                                       </div>
                                   </div>
                       </div>

                       <br>


                       <div id="main_content_block2_4">
                                   <div id="tag_title">
                                      <h4>Tags</h4><br>
                                   </div>


                                   <div id="tag_block">
                                       <span class="w3-tag">Fashion</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">New York</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">London</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Hats</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Norway</span><br><br>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Sweaters</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Ideas</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Deals</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Accessories</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">News</span><br><br>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Clothing</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Shopping</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Jeans</span>
                                       <span class="w3-tag" style="background-color:rgba(199, 192, 192, 0.219);color:black">Trends</span>
                                   </div>
                       </div>



                       <br>



                       <div id="main_content_block2_5">
                                   <div id="inspire_title">
                                      <h4>Inspiration</h4><br>
                                   </div>

                                   <div  id="inspire_people">
                                         <div  id="inspire_people1">
                                             <img src="https://www.w3schools.com/w3images/jeans.jpg" alt="jean" width="100%" height="100%">
                                         </div>

                                         <div  id="inspire_people2">
                                             <img src="https://www.w3schools.com/w3images/avatar_hat.jpg" alt="avatar_hat" width="100%" height="100%">
                                         </div>

                                         

                                         <div  id="inspire_people3">
                                             <img src="https://www.w3schools.com/w3images/team1.jpg" alt="team1" width="100%" height="100%">
                                         </div>

                                         <div  id="inspire_people4">
                                             <img src="https://www.w3schools.com/w3images/team4.jpg" alt="team4" width="100%" height="100%">
                                         </div>
                                   </div>
                       </div>


                       <br>




                       <div id="main_content_block2_6">
                                   <div id="follow_title">
                                      <h4>Follow Me</h4><br>
                                   </div>

                                   <div id="follow_link_block">
                                       <a class="w3-hover-opacity" href="https://www.facebook.com/" 
                                       type="button" title="Facebook" target="_blank">
                                       <i class="fa fa-facebook-square"></i></a>



                                       <a class="w3-hover-opacity" href="https://www.instagram.com/" 
                                       type="button" title="Instagram" target="_blank">
                                       <i class="fa fa-instagram"></i></a>



                                       <a class="w3-hover-opacity" href="https://www.snapchat.com/" 
                                       type="button" title="Snapchat" target="_blank">
                                       <i class="fa fa-snapchat"></i></a>



                                       <a class="w3-hover-opacity" href="https://www.pinterest.com/" 
                                       type="button" title="Pinterest" target="_blank">
                                       <i class="fa fa-pinterest"></i></a>



                                       <a class="w3-hover-opacity" href="https://www.twitter.com/" 
                                       type="button" title="Twitter" target="_blank">
                                       <i class="fa fa-twitter"></i></a>



                                       <a class="w3-hover-opacity" href="https://www.linkedin.com/" 
                                       type="button" title="Linkedin" target="_blank">
                                       <i class="fa fa-linkedin"></i></a>



                                   </div>
                       </div>



                       <br>




                       <div id="main_content_block2_7">



                                 <form id="subscribe_block2" 
                                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                                method="post" target="_self" title="subscribe_form">
                                    
                                <?php
                                
                                $email2 = "";

                                if($_SERVER["REQUEST_METHOD"] == "POST"){
                                    $email2 = check_func($_POST["email2"]);
                                }

                              
                                
                                ?>
                                   

                                   <div id="subscribe_title">
                                      <h4>Subscribe</h4><br>
                                   </div>
                                    
                                    <div id="subscribe_input_block">
                                         <p>Enter your e-mail below and get notified on the latest blog posts.</p><br>

                                        <input id="email_input2" type="email" 
                                        name="email1" placeholder="Enter e-mail"
                                        style="width:100%;font-size:20px;padding-left:10px;" required
                                        value="<?php echo $email;?>"><br><br>


                                        <input id="subscribe_butt2" type="submit"
                                        value="Subscribe" 
                                        >
                                    </div>


                                  
                                </form>
                       </div>

                  </div>
             </div>

        </main>

        <br><br>

 </body>





 <footer>

    <div id="footer_button_block">


      <a class="w3-button w3-ripple w3-black w3-text-white" id="move_to_top_page_butt" href="#navtop1" alt="to the top button" title="return to home page"
     target="_self" type="button" style="padding:10px 20px;">
     <i class="fa fa-arrow-up"></i> To the top</a>


     <br><br>

     <p style="color:white;font-size:18px;">Powered by <a
      href="https://www.w3schools.com/w3css/tryw3css_templates_fashion_blog.htm#"
      title="go to main website on w3school webpage" target="_blank"
      style="color:white;text-decoration:underline;">w3.css</a></p>
 
    </div>
 

</footer>


</html>

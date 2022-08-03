# ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)  ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5) ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3) 

<br><br>

# Button click to add bottom bar effect


# 1.Purpose:
> Normally we can add a bottom bar effect when a user click a bottom by using onclick attribute event link to  a JavaScript function to get a specific element and add style borderBottom effect to it.

> How about when we have a nav bar with more than one button that link to different content and we want the bottom bar effect only display when user click a specific button, and disappear from all the unactive button?

> If we use normal methods like above to make bottom bar effect, we have to write too many if...else if...else statement

> To solve that problem, I make this small project that use just 1-2 function with for loop syntax or setAttribute and removeAttribute to help make bottom bar effect. 


# 2.How it work:

- I have two button on the site with black background color. 

- After I click button1, a bottom yellow bar is going to appear.

- After I click button2, a bottom yellow bar is going to appear, and bottom yellow bar from button1 is going to disappear.

# 3.Technologies:

### a.Programming languages:

> ![image](https://img.shields.io/badge/PHP-PHP-blueviolet) ![image](https://img.shields.io/badge/HTML-HTML5-orange)  ![image](https://img.shields.io/badge/CSS-CSS3-blue)  ![image](https://img.shields.io/badge/B-Bootstrap-blueviolet) ![image](https://img.shields.io/badge/W3CSS-W3CSS-green) ![image](https://img.shields.io/badge/JS-JavaScript-yellow)

### b.Algorithms, Data structures, Syntaxes, and Methods concepts:

> HTML5 button tags with all necessary attributes and 'onclick' event attribute | div tags | script tags | i tags 

>  JavaScript for loop | function | if condition | document.getElementsByClassName | var | let  | const | setAttribute | removeAttribute | querySelector

> Bootstrap button and button styling

>  CSS3 background or color styling, font size, border-bottom, button[data-buttActive = 'true'], button:not(button[data-butt1]), button[data-butt1]

>  W3css   w3-hover effect, w3-btn or w3-button  

### c.IDE,Software:

![image](https://user-images.githubusercontent.com/82598726/181828247-0a180433-7628-45d0-91fc-c653225c57aa.png) ![image](https://user-images.githubusercontent.com/82598726/181828341-f2d35c6d-863e-4f1c-af84-a9ebc1e33d58.png) ![image](https://user-images.githubusercontent.com/82598726/181830045-2769b49a-2b5a-43ad-b519-5ae02d5b736a.png) 

### e. Syntaxes:

#### Syntax in 'test1.php' or 'test1.html'

> Method1:

```html



<body>
          

      


<button id='butt1'  title='button 1' 
type='button' class='click_butt btn w3-black text-white w3-hover-green'
onclick='func1(1)' data-butt='button_data'><i class='fa fa-home'></i>  Button1</button>
       
       
<button id='butt2'  title='button 2' 
type='button' class='click_butt w3-button w3-ripple w3-black w3-text-white w3-hover-red'
onclick='func1(2)' data-butt='button_data'><i class='fa fa-bars'></i>  Button2</button>
    
<div id='block1'></div>
    
     <script>

       var index = 1;
       
       function func1(n){
              func2(index=n);
       }

       function func2(n){
             

              const getButton  = document.getElementsByClassName('click_butt');
       
              if(n>getButton.length){index = 1};
              if(n<1){index = getButton.length};
            
              for(let i = 0; i< getButton.length;i++){
                    getButton[i].style.borderBottom = ''; 

              }

              getButton[index-1].style.borderBottom = '5px solid yellow';


       }
     

     </script>
      
       </body>
```

> Method2: 

```html
       <style>
            
         button[data-buttActive = 'true']{
               border-bottom:5px solid yellow;
         }


          
      
              </style>
       </head>




       <body>
          
                


<button id='butt1'  title='button 1' 
type='button' class='click_butt btn w3-black text-white w3-hover-green'
data-butt1='butt1'
onclick="func1('butt1')"><i class='fa fa-home'></i>  Button1</button>
       
       
<button id='butt2'  title='button 2' 
type='button' class='click_butt w3-button w3-ripple w3-black w3-text-white w3-hover-red'
data-butt2='butt2'
onclick="func1('butt2')"><i class='fa fa-bars'></i>  Button2</button>


    
<div id='block1'></div>
    
     <script>

       func1('butt1');     

       function func1(val){
             
         if(val == 'butt1'){
              document.querySelector("button[data-butt1]").setAttribute('data-buttActive','true');
              document.querySelector("button:not(button[data-butt1])").removeAttribute('data-buttActive');
         }else if(val == 'butt2'){
              document.querySelector("button[data-butt2]").setAttribute('data-buttActive','true');
              document.querySelector("button:not(button[data-butt2])").removeAttribute('data-buttActive');
         }else{
              console.log('');
         }
          

       }
     

     </script>

      
```

# 7. Running | Output:
![image](https://user-images.githubusercontent.com/82598726/182687871-f195cb64-dd44-48ca-8e88-5a158d6f485c.png)

>click button1
![image](https://user-images.githubusercontent.com/82598726/182687968-5116ecf8-08af-46b4-bb11-1cb4ced64ec2.png)

>click button2
![image](https://user-images.githubusercontent.com/82598726/182688100-d5d5f6e3-062b-4e32-aa8f-6f025bff5bdd.png)




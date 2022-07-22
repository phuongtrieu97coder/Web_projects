#  ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)  ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5) ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3)  ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/MYSQL-white?style=for-the-badge&logo=mysql) 

<br>
<br>

# 1.Purpose:

> This project is used to work with login, logout, and database system through login logout buttons, login form. It takes files and syntax examples from TGH Car_Dealership project.


<br>
<br>

# 2.Files and Database are being used:

- In this project, i work with 5 files and 1 database: main_page.php, Login_form.php, Validate_login.php, Logout_page.php, navtop_rightside.php, and MySQL database that run from Xampp server.

<br>
<br>

# 3.Requirement steps:

> In order to build a login form with full feature that help any user log-in or sign-in their account on your website, you must know about how to connect data to database, how to make a login form with PHP, how to validate user log-in information, how to use session to store and transfer data through different pages, and how to use localStorage feature of JavaScript or cookie of PHP to store a temporary or permanent user logged in id. I’m not going to explain all the thing in this document, I’m just copy and paste a lot of syntax that I used to make a login form in the TGH_Car_Dealership project into this document


# 4.Make sure I have data in MySQL database

##  Purpose: 
>      Connect and transfer data through MySQL database and Login form

![image](https://user-images.githubusercontent.com/82598726/180510071-6d088a23-a016-429e-8c32-6a1e9916c87d.png)




# 5.How it work:
> When a user goes to main_page.php, he or she can see login and sign up button.
> By clicking login button, a login form from 'Login_form.php' will appear on 'main_page.php'. If this user fills in correct username, password, and click log-in button, the form will submit data to 'Validate_login.php' page. 
> 'Validate_login.php' page will handle and validate the login information by connecting data to MySQL database, select the required data, evaluate it with logged in data to see if it matches or not.
>  If the logged in data matches with data from MySQL database, the page will store session variables as user login id and username, then redirect user back to main_page.php.
>  User can't see the process above, all they can see is the main_page.php reload after they logged in. 
>  On the other hand, if user filled out the wrong information, Validate_login.php file still redirect user to the main_page.php, but this time this validate page store a user logged in failed session variable value to true to make sure that the login form will display the text 'Sorry, your username or password doesn't match our record!!!' after login form page checked if the $_SESSION['user_loggedin_failed'] isset.
> After user logged in successfully their account, they can see the log out button, and their account button. The account button shows them their username, and links them to their specific user information page.
> In order to link a user to their specific user information page, the href attribute needs to link to a php file that has filename as session variable username that was stored after user logged in and extension '.php'.
> That means we must program this big project in a way that let it automatically create a user information file with a filename as same as a specific username after a user register succesfully their account   


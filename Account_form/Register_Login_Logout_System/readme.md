#  ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript)  ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5) ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3)  ![image](https://img.shields.io/badge/Bootstrap-white?style=for-the-badge&logo=bootstrap) ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/MYSQL-white?style=for-the-badge&logo=mysql) ![image](https://img.shields.io/badge/jQuery-black?style=for-the-badge&logo=jquery)

<br>
<br>

# 1.Purpose:

> This project is used to work with register, login, logout, and database system through login, logout, signup, and account buttons, login form, and register form.

>  It takes files and syntax examples from TGH Car_Dealership project.


<br>
<br>

# 2.Files and Database are being used:

- In this project, i work with 8 files and 1 database: main_page.php, Login_form.php, Validate_login.php, Logout_page.php, navtop_rightside.php, register_page.php, Thank_you_register.php, User_information_page.php, and MySQL database that run from Xampp server.

<br>
<br>

# 3.Programming languages, Database, Server, IDE:

> Html, CSS, JavaScript, Bootstrap, W3CSS, PHP, SQL, MySQL, Xampp, VS Code, jQuery

<br>
<br>

# 4.Requirement steps:

> Must know about how to connect data to database.

> Must know how to make a login form with PHP, how to validate user log-in information.

> Must know how to use session to store and transfer data through different pages to store a temporary or permanent user logged in id. 

> Must know to to open, create, write file using PHP file handling technique.

> I’m not going to explain all the thing in this document, I’m just copy and paste a lot of syntax that I used to make a login form in the TGH_Car_Dealership project into this document


# 5.Make sure any user register their account so that users data are stored in MySQL database

##  Purpose: 
>      Connect and transfer data through MySQL database, Login form, and Register form.

# 6. Running

![image](https://user-images.githubusercontent.com/82598726/180518700-c211ed47-3683-45cc-a32f-71a11e4124d1.png)

> If user click 'sign-up' button =>

![image](https://user-images.githubusercontent.com/82598726/180518832-1b3c9034-673a-4fed-8cc5-82bf96b09d3c.png)

> After register successfully, user can come back to main page:

![image](https://user-images.githubusercontent.com/82598726/180519059-5df9db48-0bca-47ae-8693-4e5c4b197e21.png)

> If any user register an account that already exists, an error message will appear on the Thank_you_register.php page:
![image](https://user-images.githubusercontent.com/82598726/180520238-916846b7-8421-40d5-9788-ed8f13964517.png)


> User's data is stored in MySQL database:

![image](https://user-images.githubusercontent.com/82598726/180510071-6d088a23-a016-429e-8c32-6a1e9916c87d.png)

> Now user can login their account by cliking login button:

![image](https://user-images.githubusercontent.com/82598726/180519266-3c78754e-7230-4c73-b642-24da119a7438.png)

> After they clicked log in button:

![image](https://user-images.githubusercontent.com/82598726/180519327-a39a3bd9-cd1d-4199-b640-2b123c6c53ee.png)

> If they click their account button:

![image](https://user-images.githubusercontent.com/82598726/180519435-26e0711a-96c6-491a-96c6-203118c06757.png)

> Now if user come back to the main page and click log out:

![image](https://user-images.githubusercontent.com/82598726/180519525-61e8009a-d7eb-4dca-9aeb-36b9980c19b3.png)

![image](https://user-images.githubusercontent.com/82598726/180519553-276d4743-c199-4559-b941-85f2b690f1c0.png)

> What may happen if a user logged in with wrong information? Then, they will see the main page as normal as before and they can see an erro message on the login form if they decide to open it again like below:

![image](https://user-images.githubusercontent.com/82598726/180522785-fd1bcc3a-dff3-444e-9b31-679a4bb8619a.png)




# 7.How it work:
> When a user goes to main_page.php, he or she can see login and sign up button.

> By clicking the sign up button, a user can see the content from 'Register_form.php' file with a register form.

>  After user register an account successfully, they can see a 'Thank_you_register.php' page with thank you message appear inform them that they have registered their account successfully, and they can go back to the main_page.php to login their account.

> During the process above, the 'Thank_you_register.php' page was processing data and validating it through data connected and selected from MySQL database. It also automatically create an user information page with filename as same as username combines with '.php' extension by using PHP file handling technique.

> I want the program creates a filename like that to help each user only be able to access a specificly distinct user information page after they logged in their account later.
 
> If user register an existent account, they still see Thank_you_register.php page, but an error message will inform them this time.   

> By clicking login button on the main_page.php, a login form from 'Login_form.php' will appear on 'main_page.php'. If this user fills out correct username, password, and click log-in button, the form will submit data to 'Validate_login.php' page. 

> 'Validate_login.php' page will handle and validate the login information by connecting data to MySQL database, select the required data, evaluate it with logged in data to see if it matches or not.

>  If the logged in data matches with data from MySQL database, the page will store session variables as user login id and username, then redirect user back to main_page.php.

>  User can't see the process above, all they can see is the main_page.php reload after they logged in. 

>  On the other hand, if user filled out the wrong information, Validate_login.php file still redirect user to the main_page.php, but this time this validate page store a user logged in failed session variable value to true to make sure that the login form will display the text 'Sorry, your username or password doesn't match our record!!!' after login form page checked if the $_SESSION['user_loggedin_failed'] isset.

> After user logged in successfully their account, they can see the log out button, and their account button. The account button shows them their username, and links them to their specific user information page.

> In order to link a user to their specific user information page, the href attribute needs to link to a php file that has filename as session variable username that was stored after user logged in and extension '.php'.

> That means we must program this big project in a way that let it automatically create a user information file with a filename as same as a specific username after a user register succesfully their account like the ways I mentioned above.


# 8.Warning:
> In this repository, I'm not going to save all the syntaxes for the 'User_information_page.php' file because it contains so much things that I still haven't finished yet from my TGH_Car_Dealership project. In addition, this repository is all about login, logout, and register system, and we don't work with the user information page website.  

> I don't place any image file into this repository because I take this project from the TGH_Car_Dealership project. If you are a visitor who visit this repository to learn about the register, login, and logout system, it would be better if you try to replace all the image input in my project to the things that you like. 

Designing a PHP website 

First, we will write the code in HTML format. Later we can combine it with PHP. By doing this, we get to use the HTML tags, which might not be available in PHP. Now go to HTML file type ! > press enter You get the coding template. Change the title of the page to “Welcome to travel Form.” Before we go further, I hope you guys must have refreshed your HTML concept. If not, you can check with my HTML course.

Step 1: Include tag div with a class container.

Step 2: Include a heading “welcome to IIT Kharagpur US Trip form.”

Step 3: Include a paragraph saying, “enter your details and submit the form. “

Step 4:Include another paragraph saying, “ Thanks a lot for submitting. “

Step 5: Include a form with the post method.

Step 5.1: Include five input tags for taking in the name, age, gender, email, phone number with a specific placeholder(If you want to set a hint for text area or input field). 

Step 5.2: Insert textarea inside the form with a placeholder.

Step 5.3: Insert button tag inside the form.

Step 6: Since we even have to do the CSS part after the div tag, include script tag with src =”index.js.”

Step 7: Inside the head tag, include a link referring to style.css.

Now your index.html code looks like this :

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>

 
Now to do the styling, you need to know about class and id and a little CSS knowledge. The difference between an ID and a class is that an ID can be used to identify one element, whereas a class can be used to identify more than one. The asterisk (*) is known as the CSS universal selectors. It can be used to select any and all types of elements in an HTML page. The id attribute is written using the # symbol followed by the id. The class attribute is written using the dot(.) symbol followed by the id.



Now, what is box-sizing? While changing the padding of the container, its width also changes to avoid these issues. We use box-sizing set it to border-box;

Font-family gives stylish font to the text inside the class or the ID. You can find various font families on the website of google font.

Text-align will help you to bring the text to the middle of the container.

Margin-auto brings the content to the center.

Font size will let you alter the size of the font.

The border property is the shorthand property for 

Border-width
Border-style(required)
Border-color
Border radius gives a slight curve to the edges of the border.

 
Flexbox in CSS
CSS flexbox layout allows you to format HTML easily. Flexbox makes it simple to align items vertically and horizontally using rows and columns. Items will "flex" to different sizes to fill the space. It makes the responsive design more manageable.

Display:flex initialize container as flexbox.

Flex-direction allows you to control how the items in the container display. We can do all of these easily by setting the flex-direction of the container.

Justify-content  This fills any space on rows and defines how we want to ‘justify’ it. This changes depending on how content is displayed.

This was all about flex.

Cursor: pointer CSS can generate a bunch of different mouse cursors .when pointed on the element containing this property, the cursor changes.

Position: absolute This is a powerful type of positioning that allows you to literally place any page element exactly where you want it. 

z-index: For positioning in front of other elements. This works only with the position property. It does not work with the static position.



 
Opacity: For increasing or decreasing the intensity of the element.

Combining all the above properties and adding them to our CSS file, we can generate a good design.

*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}

.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}

.container h1 {
    text-align: center;
    font-family: 'Sriracha', cursive;
    font-size: 40px;
}

p{
    font-size: 17px;
    text-align: center;
    font-family: 'Sriracha', cursive;
}

input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}
All right here, one more thing that I have done is added an image in the HTML file with <img> tag. 





 
All the values that we are taking from the user must be stored somewhere... So that is where the database comes into use. Keep reading we still have a lot to do. Open your XAMPP control panel, click on MYSQL  Admin. Create a database named trip > create a table with eight columns. To know what a database is, let me explain with a real-time example. We can relate this with the library and book. A library is like a database inside which books are like a table. 



Here dt is for the current date, and time sometimes back-end developer needs this information. After the table is created, we can even insert the values with the help of the insert button on the top. Also, the data types or the edit of the table attributes can be done here. Insert one of the rows in the table copy the SQL query, which is auto-generated.






 
Now go back to the index.php file and follow the following steps in a sequence :

Step 1: Set connection variables

    $server = "localhost";

    $username = "root";

    $password = "";
Step 2: Create a database connection.

$con = mysqli_connect($server, $username, $password);
Step 3: Check for the connection success 

if(!$con){echo "Success connecting to the db";}
You can check with the connection by going to the front-end and clicking on the button. If the connection is successful, it will echo the message.

Step 4: Collection post variables  Now the data that the user will enter in the front end needs to be stored inside the table, make sure we know the name of columns of the table and the input name tag for easy doing of this.

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
Here in variable $sql paste the insert query that we copied from the database. We assign the variables with the input attribute name. “Insert into database_name.table_name” At first is the table attribute name then the PHP variables declared by me.



 
Step 5: Execute the query 

if($con->query($sql) == true){
        echo "Successfully inserted";}
 

Step 6: Close the connection.

            $con->close();

Yes, now you are done with all the backend processes. Now all we need to do is include HTML inside this PHP.Well, now copy the content from index.html and paste inside index.php, after PHP. Yes, that’s it! we have our backend ready. PHP code is never visible in the view source, so you are safe from all the hackers.
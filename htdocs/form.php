<html>
<body>

<?php 
$current_time = date(DATE_COOKIE);
//connect to mql
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Nelly";
//create connection

//check connection
$conn = new mysqli($servername,$username,$password,$dbname);
if (mysqli_connect_error())
{
    die("Database connection failed: ". mysqli_connect_error());
}
echo"Connected successfully";



/* Create database
$sql = "CREATE DATABASE myDB";

if($conn->query($sql) == TRUE)
{
    echo"Database created succcesfully";
}
else
{
    echo"Error creating database: " .$conn->error;
}
*/




/*create table use sql
$sql =  "CREATE TABLE Ptime
    (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        time VARCHAR(50),
        reg_date TIMESTAMP
        
     )";
 */
    
    $phone = 10;
   
   /* $sql = 'INSERT INTO user(firstname,lastname,email_address,phone_number)'.
"VALUES(".$_POST[Fname].",".$_POST[Lname].",".'$current_time'.","."$phone..")";
*/
    
    $sql = "INSERT INTO user(firstname,lastname,email_address,phone_number)
    VALUES('$_POST[Fname]','$_POST[Lname]','$current_time','$phone')";
    //varaible single quotes  is not varaible becomes a string ,but with double quotes surround a double quotes with variable is will still be variable. sql statement value appear as variable outer quotes has to be double quotes, single quotation inside.  sql statment is a string  have a sepearate value and string
    // for a statement   single quotes surround with varaible that is a string(variable name ) , double quotes"content inside the variable" around
          
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();


echo"Welcome "; echo$_POST["Fname"];
echo"<br>";
echo"The time you sign in is:";echo $current_time;
echo"<br>";
?>

</body>
</html>

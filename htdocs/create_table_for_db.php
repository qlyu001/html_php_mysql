<?PHP
    //connect to mql
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully<br>";
    
    
    //Create database
     $sql = "CREATE DATABASE If NOT EXISTS myDB";
     
     if($conn->query($sql) == TRUE)
     {
     echo"Database created succcesfully<br>";
     }
     else
     {
     echo"Error creating database: " .$conn->error;
     }
    /*
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     */
    //check connection
    $dbname = "myDB";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if (mysqli_connect_error())
    {
        die("Database connection failed: ". mysqli_connect_error());
    }
    echo"Connected successfully<br>";

    
    
       // sql to create table ChangeRecord
    $sql = "CREATE TABLE IF NOT EXISTS ChangeRecord
 (
  employeeID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  
  LastName varchar(255) NOT NULL,
  recordChanged varchar(255),
  time varchar(255)
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table ChangeRecord created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    //$conn->close();
    
    
    // sql to create table service
    $sql = "CREATE TABLE IF NOT EXISTS Service
    (
     serviceID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     
     serviceType varchar(255) NOT NULL
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Service created successfully<br>";
    }
    else {
        echo "Error creating table: " . $conn->error;
    }
    
    // sql to create table Clock

    $sql = "CREATE TABLE IF NOT EXISTS Clock
    (
     clockID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     employeeID INT(20) NOT NULL;
     clientID INT(30) NOT NULL,
     clockIn varchar(255) NOT NULL,
     clockOut varchar(255) NOT NULL,
     attributeName varchar(255) NOT NULL,
     totalHours varchar(255) NOT NULL,
     date varchar(255) NOT NULL,
     weekDay varchar(255) NOT NULL,
     downtimeStart varchar(255) NOT NULL,
     gelocationIn varchar(255) NOT NULL,
     gelocationOut varchar(255) NOT NULL,
     clientSignature varchar(255) NOT NULL,
     FOREIGN KEY(clientID) REFERENCES Client(clientID)

     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Clock created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    // sql to create table Skills
    $sql = "CREATE TABLE IF NOT EXISTS Skills
    (
     payerID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     recordChanged varchar(255) NOT NULL,
     time varchar(255)
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Skills created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    
    // sql to create table payer
    $sql = "CREATE TABLE IF NOT EXISTS payer
    (
     payerID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     recordChanged varchar(255) NOT NULL,
     time varchar(255)
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table payer created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // sql to create table Licenses
    $sql = "CREATE TABLE IF NOT EXISTS Licenses
    (
     payerID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     recordChanged varchar(255) NOT NULL,
     time varchar(255)
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Licenses created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    
    // sql to create table Refferal
    $sql = "CREATE TABLE IF NOT EXISTS Refferal
    (
     employeeID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     recordChanged varchar(255) NOT NULL,
     time varchar(255)
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Refferal created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // sql to create table TimeCard
    $sql = "CREATE TABLE IF NOT EXISTS TimeCard
    (
     timecardID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     
     clockID int(20) NOT NULL,
     supervisorApproval varchar(255)
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table TimeCard created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    // sql to create table BillingAddress
    $sql = "CREATE TABLE IF NOT EXISTS BillingAddress
    (
     billingID INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     firstName varchar(255) NOT NULL,
     lastName varchar(255) NOT NULL,
     attributeName varchar(255) NOT NULL,
     middleName varchar(255) NOT NULL,
     streetName varchar(255) NOT NULL,
     city varchar(255) NOT NULL,
     state varchar(255) NOT NULL

    
     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table BillingAddress created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    
    // sql to create table Client
    $sql = "CREATE TABLE IF NOT EXISTS Client
    (
     clientID INT(30) NOT NULL,
     firstName varchar(255) NOT NULL,
     lastName varchar(255) NOT NULL,
     attributeName varchar(255) NOT NULL,
     middleName varchar(255) NOT NULL,
     streetName varchar(255) NOT NULL,
     city varchar(255) NOT NULL,
     state varchar(255) NOT NULL,
     billingID INT(30)UNSIGNED AUTO_INCREMENT,
     PRIMARY KEY(clientID),
     assginedCaregiver varchar(255) NOT NULL,
     clinetSchedule varchar(255) NOT NULL,
     serviceType varchar(255) NOT NULL,
     FOREIGN KEY(billingID) REFERENCES BillingAddress(billingID)

     )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Client created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    


   /* CREATE TABLE Orders
    (
     Id_O int NOT NULL,
     OrderNo int NOT NULL,
     Id_P int,
     PRIMARY KEY (Id_O),
     FOREIGN KEY (Id_P) REFERENCES Persons(Id_P)
     )
*/
    
    
    $conn->close();

   ?>












?>
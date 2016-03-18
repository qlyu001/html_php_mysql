

<?php 
/*
make everything more clearly.
Here we are using the primary key because we want it to have very unique number---ID.
For example, the client ID connect the client table with the client schedule table .
We use the unique number to identify and find the data inside the table.
If we want to change the primary key, we need to enable the foriegn key contrain first.
We can't change the foreign key becaseu if we change it, it will be totally different from 
the primiary key.

There is three step
1,change a client ID 
2,change in client schedule
3,update a foreign key table 

For the data, we can't make auto-increment because it is dangerous if people know the range 
of the ID number.


how to debug;
define("DEBUG",true);
if(DEBUG)echo $error_info;
error_report(E_ALL);
error_reporting(); //这是来自PHP自身的debug输出


error_reporting(E_WARNING); //这是输出警告级别，但不致命的错误
error_reporting(0); // 0是完全不输出，和不填一个效果

define("DEBUG",true); //这是自己定义一个DEBUG常量，需要debug的时候设为true

然后在需要输出debug信息的地方判断
if( DEBUG == true) {
    //输出debug信息
}
*/


//error_reporting(E_WARNING); //这是输出警告级别，但不致命的错误


//connect to mql
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";
//create connection


$conn = new mysqli($servername,$username,$password,$dbname);
if (mysqli_connect_error())
{
    die("Database connection failed: ". mysqli_connect_error());
}
echo"Connected successfully";

echo"<br/>";

//create different variable for billing address

$firstNameV = "Nelly";
$lastNameV = "Lyu";
$asttributeNameV = "Lol";
$middleNameV = "nothing";
$streetNameV = "fairy";
$cityV = "funny";
$stateV ="lolita";

  

    $sql = "INSERT INTO BillingAddress(firstName,lastName,attributeName,middleName,streetName,city,state)
    VALUES('$firstNameV','$lastNameV','$asttributeNameV','$middleNameV','$streetNameV','$cityV','$stateV' )";
    
    
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into billingAddress successfully";
} else {
    echo "BillingAddress: Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo"<br/>";

//creat variables for changeRecord
//$employeeIDV = 13;
$LastNameV = "Nelly";
$recordChangedV = "wow";
$timeV = "21";


    $sql = "INSERT INTO ChangeRecord(LastName,recordChanged,time)
    VALUES('$LastNameV','$recordChangedV','$timeV')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into ChangeRecord successfully";
} else {
    echo "ChangeRecord: Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo"<br/>";


//create variables for client
$clientIDC = mt_rand(10000,99999);
$firstNameC = "Nelly";
$lastNameC = "Lyu";
$attributeNameC = "Lol";
$middleNameC = "nothing";
$streetNameC = "fairy";
$cityC = "funny";
$stateC ="lolita";
$assignedCargiverC = "Tom";
$clientScheduleC = "monday";
$serviceTypeC = "message";    



 $sql = "INSERT INTO Client(clientID,firstName,lastName,attributeName,middleName,streetName,city,state,assignedCaregiver,clientSchedule,serviceType)
    VALUES('$clientIDC','$firstNameC','$lastNameC','$attributeNameC','$middleNameC','$streetNameC' ,'$cityC', '$stateC','$assignedCargiverC', '$clientScheduleC','$serviceTypeC'
   )";
   

    
 
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records for Client created successfully";
} else {
    echo "Client: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";

//create variables for ClientSchedule
//int mt_rand ( void )
//int mt_rand ( int $min , int $max )
$dateV = 25;
$weekDayV = 3;
$startTimeV = 6;
$endTimeV = 5;

 $sql = "INSERT INTO ClientSchedule(date,weekDay,startTime,endTime)
    VALUES('$date','$weekDay','$startTime','$endTime')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into ClientSchedule successfully";
} else {
    echo "ClientSchedule: Error: " . $sql . "<br>" . mysqli_error($conn);
}



echo"<br/>";


//create variables for clock
$LastNameC = "Nelly";
$recordChangedC = "wow";
$timeC = "21";

 $sql = "INSERT INTO Clock(LastName,recordChanged,time)
    VALUES('$LastNameC','$recordChangedC','$timeC')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Clock: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";


//create variables for employees

$firstNameE = "Nelly";
$lastNameE = "Lyu";
$middleNameE = "Lol";
//$employeeIDE = 32345;

//random function for primary key 

    $sql = "INSERT INTO Employees(firstName,lastName,middleName)
    VALUES('$firstNameE','$lastNameE','$middleNameE')";
    
    
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into Employees successfully";
} else {
    echo "Employees: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";

//create variables for ClientSchedule
$dateV = 25;
$weekDayV = 3;
$startTimeV = 6;
$endTimeV = 5;

 $sql = "INSERT INTO ClientSchedule(date,weekDay,startTime,endTime)
    VALUES('$date','$weekDay','$startTime','$endTime')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into ClientSchedule successfully";
} else {
    echo "ClientSchedule: Error: " . $sql . "<br>" . mysqli_error($conn);
}



echo"<br/>";

//create variables for Invoice
$invoiceIDI = mt_rand(10000,99999);
$clientIDI = mt_rand(10000,99999);
$createdDateI = 46;
$billToI = 34;
$totalChargesI = 34;
$totalUnitsI = 35;
$statementPeriodI = 23;
$statusI = "wmder";

 $sql = "INSERT INTO Invoice(invoiceID,clientID,createdDate,billTo,totalCharges,totalUnits,statementPeriod,status)
    VALUES('$invoiceIDI','$clientIDI','$createdDateI','$billToI','$totalChargesI','$totalUnitsI','$statementPeriodI','$statusI')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into Invoice successfully";
} else {
    echo "Invoice: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";
 
//create variables for InvoiceDetails
$invoiceLineItemIDD = mt_rand(10000,99999);
$clientIDD = mt_rand(10000,99999);
$employeeIDD = mt_rand(10000,99999);
$attribute_nameD = 34;

$chargeD = 23;
$serviceDateD = 345;
$totalChargesD = 989;
$serviceDescriptionD = 209;
$unitsD = 123;
$supervisorApprovalD = "agree";


 $sql = "INSERT INTO InvoiceDetails(invoiceLineItemID,clientID,employeeID,attribute_name,charge,serviceDate,totalCharges,serviceDescription,units,supervisorApproval)
    VALUES('$invoiceLineItemIDD','$clientIDD','$empployeeIDD','$attribute_nameD','$chargeD','$serviceDateD','$totalChargesD','$serviceDescriptionD','$unitsD ','$supervisorApprovalD')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into InvoiceDetails successfully";
} else {
    echo "InvoiceDetails: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";


//create variables for Licenses
$payerIDL = mt_rand(100000,999999);
$recordChangedL = "changed";
$timeL = "future";

 $sql = "INSERT INTO Licenses(payerID,recordChanged,time)
    VALUES('$payerIDL','recordChangedL','timeL')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into Licenses successfully";
} else {
    echo "Licenses: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";

//create variables for payer
//$payerIDp = mt_rand(100000,999999);
$recordChangedp = "changed";
$timep = "future";

 $sql = "INSERT INTO Licenses(recordChanged,time)
    VALUES('$recordChangedL','$timeL')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into payer successfully";
} else {
    echo "payer: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";

//create variables for Refferal

$recordChangedR = "changed";
$timeR = "future";

 $sql = "INSERT INTO Refferal(recordChanged,time)
    VALUES('$recordChangedR','$timeR')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into Refferal successfully";
} else {
    echo "Referral: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";


//create variables for role

$roleIDR = mt_rand (100000,99999);
$roleR = 2342;



 $sql = "INSERT INTO role(roleID,role)
    VALUES('$roleIDR','$roleR')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into role successfully";
} else {
    echo "role: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";


//create variables for service

$serviceIDS = mt_rand (100000,999999);
$serviceTypeS = "amazing";


 $sql = "INSERT INTO Service(serviceID,serviceType)
    VALUES('$serviceIDS','$serviceTypeS')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into Service successfully";
} else {
    echo "Service: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";


//create variables for skills

$recordChangedS = "changed";
$timeS = "future";



 $sql = "INSERT INTO Skills(recordChanged,time)
    VALUES('$recordChangedS','$timeS')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into Skills successfully";
} else {
    echo "Skills: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";


//create variables for timecard

$clockIDT = 4234;
$supervisorApprovalT = "approve";



 $sql = "INSERT INTO TimeCard(clockID,supervisorApproval)
    VALUES('$clockIDT','$supervisorApprovalT')";
    
 
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "New records created into timeCard successfully";
} else {
    echo "TimeCard: Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo"<br/>";
$conn->close();



?>



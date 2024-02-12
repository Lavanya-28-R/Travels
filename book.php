<?php
   $servername='localhost';
   $username='root';
   $password='Lavs@123456';
   $dbname='ticketbooking';

   $conn=new mysqli($servername,$username,$password,$dbname,3308);

   if(isset($_POST['submit'])){

    if($conn->connect_error)
  {
    die("connection fail");
  }

   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $zip=$_POST['zip'];
   $from=$_POST['from'];
   $destination=$_POST['destination'];
   $departure_date=$_POST['departure_date'];
   $return_date=$_POST['return_date'];
   $email_id=$_POST['email_id'];
   $alternate_no=$_POST['alternate_no'];
   $gender=$_POST['gender'];
   $holder_name=$_POST['holder_name'];
   $mode_of_payment=$_POST['mode_of_payment'];
   $bank_name=$_POST['bank_name'];
 

  $sql="INSERT INTO book (`id`, `name`, `phone`, `city`, `state`, `zip`, `from`, `destination`, `departure date`, `return date`, `email id`, `alternate no`, `gender`, `holder name`, `mode of payment`, `bank name`) VALUES (NULL, '$name', '$phone', '$city', '$state', '$zip', '$from', '$destination', '$departure_date', '$return_date', '$email_id', '$alternate_no', '$gender', '$holder_name', '$mode_of_payment', '$bank_name')";
  //$query_run = mysqli_query($link,$sql);
  //$data = mysqli_query($conn,$query);
  
  if($conn->query($sql)==True)

 {
    echo "new record added";
 }
 else{
    echo "error";
 }
  $conn->close();

}

?>


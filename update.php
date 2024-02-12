
<?php include("bookdb.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  
    <style>
           /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
        </style>
    <section class="container">
      <header>Update details</header>
  
      <form action="post" class="form">
        <div class="input-box">
          <label> Name</label>
          <input type="text" placeholder="name" name="name" required />
        </div>

        <div class="input-box">
          <label>Phone</label>
          <input type="number" placeholder="phone"  name="phone" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>City</label>
            <input type="text" placeholder="city" name="city" required />
         
            
          </div>
          <div class="input-box">
            <label>State</label>
            <input type="text" placeholder="state" name="state" required />
        
          </div>
        </div>
        <div class="input-box">
            <label>Zip</label>
            <input type="number" placeholder="zip" name="zip" required />
          </div>
        </div>
        <div class="input-box">
            <label>From</label>
            <input type="text" placeholder="from" name="from" required />
          </div>
        </div>
        <div class="input-box">
            <label>Destination</label>
            <input type="text" placeholder="destination" name="destination" required />
          </div>
        </div>
        <div class="input-box">
            <label>Departure Date</label>
            <input type="date" placeholder="Departure date"name="departure date" required />
          </div>
        </div>
        <div class="input-box">
            <label>Return Date</label>
            <input type="date" placeholder="return date" name="return date" required />
          </div>
        </div>
        <div class="input-box">
            <label>Email ID</label>
            <input type="text" placeholder="email id" name="email id" required />
          </div>
        </div>
        <div class="input-box">
            <label>Alternate No</label>
            <input type="number" placeholder="alternate no" name="alternate no" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>

            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box">
            <label>Holder Name</label>
            <input type="text" placeholder="holder name"name="holder name" required />
          </div>
        <div class="input-box address">
          <label>Mode Of Payment</label>
          <input type="text" placeholder="mode of name" name="mode of payment" required />
         </div>
         <div class="input-box address">
          <label>Bank Name</label>
          <input type="text" placeholder="bank name" name="bank name" required />
         </div>
         <div class="input_field terms">
                <label class="check" >
                <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p> Agree to terms and conditions</p>
              </div>
              <script>

        function submit() {
            // You can add form validation logic here if needed

            // Redirect to the next page
            window.location.href = 'display.php';

            // Show a popup message after redirection
            alert('Booking successful! Thank you for your reservation.');
        }
    </script>

         <button value="submit" name="submit"><center> Submit</center></button>
      </form>
    
    </section>
  </body>
</html>


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








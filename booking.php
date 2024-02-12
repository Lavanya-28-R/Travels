<html>
    <head>
        <title>PM Travels</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
         <link rel="stylesheet" href="./css/index.css">
    </head>
    <body>
    
        <form action="booking.php" method="post">
       <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <image src="./cmp logo.jpg" width="400" height="100"/>
        
        <div class="ml-auto">  
            <ul class="navbar-nav">
                <li class="nav-list" class="navbar-brand"><a href="home.php" class="nav-link">HOME</a></li>
                <li class="nav-list" class="navbar-brand"><a href="about.php" class="nav-link">ABOUT</a></li>
                <li class="nav-list" class="navbar-brand"><a href="service.php" class="nav-link">SERVICES</a></li>
                <li class="nav-list"class="navbar-brand"><a href="booking.php" class="nav-link">TICKET BOOKING</a></li>
                <li class="nav-list" class="navbar-brand"><a href="display.php" class="nav-link">BOOKING RECORDS</a></li>
          </ul>
       </div>
    </nav>
    <div class="card bg-dark text-white">
        <img src="https://wallpapers.com/images/featured/plane-background-etxz0fp95slobqec.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="card-title" style="text-align: center;">BOOKING:</h3>
         
          <form action="book.php" method="post">
          <form class="container">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">NAME:</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">PHONE NO:</label>
                <input type="0123456789" class="form-control" name="phone" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">CITY:</label>
                <select class="custom-select" name="city" required>
                  <option selected disabled value="">Select...</option>
                  <option>Delhi</option>
                  <option>Jaipur</option>
                  <option>Mumbai</option>
                  <option>Delhi</option>
                  <option>Bangaluru</option>
                  <option>Hyderabad</option>
                  <option>Kolkata</option>
                  <option>Chennai</option>
                  <option>Pune</option>
                  <option>Jaipur</option>
                  <option>Lucknow</option>
                  <option>Patna</option>
                  <option>Chandigarh</option>
                  <option>Surat</option>
                  <option>Thane</option>
                  <option>Kanpur</option>
                  <option>Ahmedabad</option>
                  <option>Meerut</option>
                  <option>varanasi</option>
                  <option>Amritsar</option>
                  <option>Ranchi</option>
                  <option>Vadodara</option>
                  <option>Visakhapatnam</option>
                  <option>Lakhimpur</option>
                  <option>Dhanbad</option>
                  <option>Mangalore</option>
                  <option>Tiruchirappalli</option>
                  <option>Kozhikode</option>
                  <option>Chittoor</option>
                  <option>kota</option>
                  <option>Coimbatore</option>
                  <option>Nagpur</option>
                  <option>Nellore</option>
                  <option>Pondicherry</option>
                  <option>Raichur</option>
                  <option>Hubli</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">STATE</label>
                <select class="custom-select" name="state" required>
                  <option selected disabled value="">Select...</option>
                  <option>Andhra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chattisgarh</option>
                  <option>Delhi</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Jammu and Kashmir</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Mizoram</option>
                  <option>Nagaland</option>
                  <option>Odisha</option>
                  <option>Punjab</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Telangana</option>
                  <option>Tripura</option>
                  <option>Uttarakhand</option>
                  <option>West Bengal</option>
                  <option>Andaman and Nicobar Islands</option>
                  <option>Chandigarh</option>
                  <option>Ladakh</option>
                  <option>Lakshadweep</option>
                    </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">ZIP:</label>
                <input type="text" class="form-control" name="zip" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">FROM:</label>
                <select class="custom-select" name="from" required>
                  <option selected disabled value="">Select...</option>
                  <option>Mumbai</option>
                  <option>New Delhi</option>
                  <option>Bangkok</option>
                  <option>Thailand</option>
                  <option>Bengaluru</option>
                  <option>Pune</option>
                  <option>Hyderabad</option>
                  <option>Kolkata</option>
                  <option>Chennai</option>
                  <output>Goa</output>
                  <option>Dubai</option>
                  <option>China</option>
                  <option>India</option>
                  <option>Nigeria</option>
                  <option>Indonesia</option>
                  <option>Bangladesh</option>
                  <option>Pakistan</option>
                  <option>Brazil</option>
                  <option>United States</option>
                  </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">DESTINATION:</label>
                <select class="custom-select" name="destination" required>
                  <option selected disabled value="">Select...</option>
                  <option>Mumbai</option>
                  <option>New Delhi</option>
                  <option>Bangkok</option>
                  <option>Thailand</option>
                  <option>Bengaluru</option>
                  <option>Pune</option>
                  <option>Hyderabad</option>
                  <option>Kolkata</option>
                  <option>Chennai</option>
                  <output>Goa</output>
                  <option>Dubai</option>
                  <option>China</option>
                  <option>India</option>
                  <option>Nigeria</option>
                  <option>Indonesia</option>
                  <option>Bangladesh</option>
                  <option>Pakistan</option>
                  <option>Brazil</option>
                  <option>United States</option>
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
               
                <label for="arrivalDate">DEPATURE DATE:</label>
               <input type="date" class="form-control" name="departure_date" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">RETURN DATE:</label>
                <input type="date" class="form-control" name="return_date" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">EMAIL-ID:</label>
                <input type="email" class="form-control" name="email_id"  required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault02">ALTERNATE NO:</label>
                <input type="0123456789" class="form-control" name="alternate_no" required>
              </div>
              <div class="col-md-3 mb-3">
              <label for="validationDefault04">GENDER:</label>
                <select class="custom-select" name="gender" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <h2 style="text-align: center;">PAYMENT</h2>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">HOLDER NAME:</label>
                <input type="text" class="form-control" name="holder_name" required>
              </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">MODE OF PAYMENT:</label>
                <select class="custom-select" name="mode_of_payment" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Phone pay</option>
                  <option>google pay</option>
                  <option>Online</option>
                  <option>RTGS</option>
                  <option>CHEQUE</option>
                  <option>Cash</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">BANK NAME:</label>
                  <select class="custom-select" name="bank_name" required>
                    <option selected disabled value="">Choose...</option>
                    <option>canara bank</option>
                    <option>Axis</option>
                    <option>ICIC</option>
                    <option>yes</option>
                    <option>pragathi</option>
                    <option>SBI</option>
                    <option>Indian bank</option>
                    <option>karnataka bank</option>
                  </select>
                </div>  
            </div>
          </form>
          </form>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Agree to terms and conditions<a href="../my website/TAC.html"></a> 
                  <input type="hidden" name="agree_to_terms" value="1">
                </label>
              </div>
            </div>

            <input type="submit"  name="submit"  onclick="submit()" id="submit">
          
            
          </form>
       
        </div>
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


  

      <nav class="navbar navbar-light bg-dark navbar-expand-lg"> 
        <ul class="navbar-nav">   
            <li class="nav-list" class="navbar-brand"><a href="home.php" class="nav-link" style="color: white;">HOME</a></li>&nbsp; &nbsp; &nbsp; 
            <li class="nav-list" class="navbar-brand"><a href="about.php" class="nav-link" style="color: white;">ABOUT</a></li>&nbsp; &nbsp; &nbsp;  
            <li class="nav-list" class="navbar-brand"><a href="service.php" class="nav-link" style="color: white;">SERVICES</a></li>&nbsp; &nbsp; &nbsp; 
            <li class="nav-list" class="navbar-brand"><a href="booking.php" class="nav-link" style="color: white;">TICKET BOOKING</a></li>&nbsp; &nbsp; &nbsp; 
            <li class="nav-list" class="navbar-brand"><a href="#" class="nav-link" style="color: white;">pmtravelsolutions6199@gmail.com</a></li>&nbsp; &nbsp; &nbsp; 
            <li class="nav-list" class="navbar-brand"><a href="TAC.php" class="nav-link" style="color: white;">TERMS AND CONDITIONS</a></li>&nbsp; &nbsp; &nbsp; &nbsp;
            <li class="nav-list" class="navbar-brand"><a href="#" class="nav-link" style="color: white;">+91-9900563983 / +91-8861575917</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
            <li class="nav-list" class="navbar-brand"><a href="#" class="nav-link" style="color: white;">MORE</a></li>   
    </ul>
  </nav>

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








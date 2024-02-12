
<html>
    <head>
        <title>PM Travels</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
         <link rel="stylesheet" href="../css/index.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="script.js"></script>
         </head>
         <body>
         <form action="home.php" method="post">
            <form action="https://api.web3forms.com/submit" method="post">           
      
<style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

h1{
  font-family: 'Courier New', Courier, monospace;
  font-size: 80px;
  font-display: 10px;
}

 h2{
    text-align: center;  
  }
  h3{
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 30px;
  }
  .style{
    font-size: 40px;  
  }
  li{
    color: white;
  }
  .video-container {
      position: relative;
      width: 100%;
      height: 100vh; /* Adjust the height as needed */
      overflow: hidden;
      font-display: fixed;
    }
    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    overlay {
      position: absolute;
      top: 50%;
      left: 60%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
   }
   h1 {
    position: absolute;
      top: 10%;
      left: 3%;
      font-style: italic;
      text-align:center;
      color: rgb(141, 137, 78);
      text-shadow: 2px 2px #ff0000;
    }

    .blinking-text{
      animation:blink 5s infinite;
      color: aqua;
      text-shadow: 2px 2px rgb(200, 185, 185)
      }
     
.text {
  position: absolute;
  top: 30;
  left: 120;
  white-space: nowrap;
  overflow: hidden;
  animation: typing 5s steps(40, end), blink-caret .95s step-end infinite;
  color:rgb(21, 25, 255);
  font-size: 60;
  font-display: 30%;
}
.typing-animation {
  position: relative;
  height: 50px; /* adjust as needed */
  font-size: 3rem; /* adjust as needed */
  font-weight: bold;
  overflow: hidden;
  
   /* adjust as needed */
}

.typing-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.input-cursor {
  display: inline-block;
  width: 2px;
  height: 42px;
  background-color: white;
  margin-left: 8px;
  animation: blink 5s linear infinite alternate;
}
.eraser-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.eraser {
  text-align: center;
  margin: 50 20px;
}
.eraser h1 {
  font-size: 40px;
  font-weight: bold;
  color: white;
  text-shadow: 2px 2px 4px rgba(235, 11, 11, 0.5);
  overflow: hidden;
  border-right: 1px solid white;
  white-space: nowrap;
  margin: 100 auto;
  letter-spacing: 5px;
  animation: erasing 5.5s steps(40, end), blink-caret .75s step-end infinite;
  font-size: 135%;
  color: rgb(8, 1, 15);
  text-align: center;
}
.eraser .cursor {
  display: inline-block;
  vertical-align: top;
  width: 2px;
  height: 30px;
  background-color: white;
  animation: blink-caret .75s step-end infinite;
}
@keyframes erasing {
  from { width: 100% }
  to { width: 0 }
}
@keyframes typing {
  from { 
    width: 0 
  }
  0%{
    animation-delay: 0s;
  }
  25%{
    animation-delay: 0.8s;
  }
  50%{
    animation-delay: 1.8s;
  }
  75%{
    animation-delay: 2.8s;
  }
  100%{
    animation-delay: 3.8s;
  }
  to {
     width: 150%
     }
}

@keyframes overlay {
  0% {
    left: 100%;
 }
  100% {
    left: -100%;
 }
}

@keyframes blink{
  0%{
    opacity: 0;
  }
  50%{
    opacity: 1;
  }
  80%{
    opacity: 2;
  }
  }
      </style>
       <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <image src="./cmp logo.jpg" alt="logo" width="400" height="100"/>
        <div class="ml-auto">  
   
        
            
            
            <ul class="navbar-nav">  
                <li class="nav-list" class="navbar-brand"><a href="login.php" class="nav-link">LOGIN</a></li>
                <li class="nav-list" class="navbar-brand"><a href="home.php" class="nav-link">HOME</a></li>
                <li class="nav-list" class="navbar-brand"><a href="about.php" class="nav-link">ABOUT</a></li>
                <li class="nav-list" class="navbar-brand"><a href="service.php" class="nav-link">SERVICES</a></li>
                <li class="nav-list" class="navbar-brand"><a href="booking.php" class="nav-link">TICKET BOOKING</a></li>
                
              </ul>
              
              
       </div>
    </nav>
  <div class="video-container">
      <video id="video" autoplay muted loop> 
        <source class="st-template-preview-iframe" height="600px" src="./plane (2).mp4" type="video/mp4" data-spai="1" data-spai-upd="1187">
      </video>
      <div class="eraser">
        <div class="cursor">
      <div class="typing-animation"></div>
      <div class="overlay">
        <div class="blinking-text">
       <span class="text"> <em><strong>𝕎𝔼𝕃ℂ𝕆𝕄𝔼 𝕋𝕆 ℙ𝕄 𝕋ℝ𝔸𝕍𝔼𝕃 𝕊𝕆𝕃𝕌𝕋𝕀𝕆ℕ𝕊</strong></em></span>
       <br><br>
                    <h1><em> VISA,TICKET BOOKING,HOTEL BOOKING Appointments are available for all the locations..</em></h1>
        </div>
      </div>
    </div>
      </div>
     </div> 
    </div>
 
  </head>
  <body>
    <script>
        let video = document.getElementById('video');
         video.addEventListener('loadedmetadata', function() {
           });

</script>
    <h5 style="font-size: 45px; text-align: center;"><u><em><strong>OUR SERVICES</strong></em></u></h5><br><br>
    <div class="card-group">
        <div class="card">
          <img src="https://tds.indianeagle.com/wp-content/uploads/2023/02/pre-book-flights.png" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ticket Booking:-</h5>
            <p class="card-text">
             Ticket booking involves Users start by accessing  such as a website or mobile app, where they input details like date, time, destination, and the number of tickets required. Payment details are then submitted to confirm the reservation.The booking system generates a unique ticket or confirmation code, which serves as proof of purchase.
            </p>
          </div>
        </div>
        <div class="card">
          <img src="https://www.gstsevakendra.org/uploads/service/1654855565-hotel.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hotel Booking:-</h5>
            <p class="card-text">
              Hotel booking  users typically start by visiting a hotel booking website or using a dedicated app. They input details such as check-in and check-out dates, the number of guests, and room preferences.The platform then displays available options based on the provided information.</p>
            </div>
        </div>
        <div class="card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgmGdE_FN3atokotUz_oSl7NhSCGGxB2gHOQ&usqp=CAU"height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Visa Processing:-</h5>
            <p class="card-text">
              Visa processing involves  seeking permission to enter a foreign country. Applicants typically start by filling out a visa application form, providing personal information, travel details, and the purpose of the visit and  they submit supporting documents such as passports, photographs, and any required permits.
            </p>
          </div>
        </div>
        <div class="card">
            <img src="https://martech.zone/wp-content/webp-express/webp-images/uploads/2015/07/travel-behavior-mobile-social-869x675.jpg.webp" height="250" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Website Design:-</h5>
              <p class="card-text">Designing a flight booking website involves creating an intuitive and user-friendly, the homepage typically features a search bar where users input their departure and destination locations, travel dates, and the number of passengers. clicking the search button, the website displays a list of available flights with details such as airline, departure and arrival times and prices.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mt-5" class="col-md-12" style="background-color: rgb(128, 31, 31);">
        <div class="row">
        <div class="col-md-6"><br><br>
        
        
            
          <h2 style="text-align: center; color: aliceblue;">CONTACT US</h2><br><br>
          <form action="https://api.web3forms.com/submit" method="post" style="color: aliceblue;">
            
          
                <div class="form-row">
                  <div class="form-group col-md-6">
                  
                  <input type="hidden" name="access_key" value="7025e394-e382-496f-9690-6cb39bc4bd36">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">name</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">phone no</label>
                  <input type="number" class="form-control" name="phone no" id="phone no">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Address</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    
                    <select class="custom-select" id="city" required>
                      <option selected disabled value="">Select...</option>
                      <option>Bengaluru</option>
                      <option>Mumbai</option>  
                      <option>Pune</option>
                      <option>Kolkata</option>
                      <option>Hyderabad</option>
                      <option>Ahmedabad</option>  
                      <option>Kanpur</option>
                      <option>Surat</option>
                      <option>Indore</option>
                      <option>Vadodara</option> 
                      <option>Chennai</option>
                      <option>Delhi</option>
                      <option>Jaipur</option>
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
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    
                    <select class="custom-select" id="state" required>
                      <option selected disabled value="">Select...</option>
                      <option>Andhra Pradesh</option>
                      <option>Arunachal Pradesh </option>     
                      <option> Assam</option> 
                      <option> Bihar</option>       
                      <option>Chhattisgarh</option>     
                      <option> Goa </option>        
                      <option>Gujarat</option> 
                      <option> Himachal Pradesh</option>
                      <option>Jharkhand</option> 
                      <option>Karnataka</option> 
                      <option>Madhya Pradesh</option>
                      <option>Maharashtra</option>
                      <option>Manipur</option> 
                      <option>Meghalaya</option>
                      <option>Odisha</option>   
                      <option>Punjab</option>  
                      <option>Sikkim</option>
                      <option>Tamil Nadu</option>
                      <option>Telangana</option> 
                      <option>Tripura</option>
                      <option>Uttar Pradesh</option>
                      <option>West Bengal</option>
                      <option>Andaman and Nicobar Islands</option>
                      <option>Chandigarh</option>
                      <option>Ladakh</option>
                      <option>Lakshadweep</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip" id="zip">
                  </div>
                </div>
            </form>
            </form>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
            </form>
          
                <button type="submit" class="btn btn-primary" style="text-align: center;">Submit</button>
          
        </div>
        <div class="col-md-6" style="color:aliceblue;"><br><br>
            <div style="background-color:rgb(61, 51, 51)">
            <h2 style="text-align: center;">FOUND US:-</h2><br><br><br><br>
            <p>This communication contains information which is confidential and may also be privileged. It is for the exclusive use of the intended recipient(s). If you are not the intended recipient(s) please note that any form of distribution, copying or use of this communication or the information in it is strictly prohibited and may be unlawful. If you have received this communication in error please return it to the sender. The opinions expressed within this communication are not necessarily those expressed By PM travel solutions </p>
            <i class="fa fa-envelope" style=" font-size: 40px;color:rgb(236, 244, 247);" src=""></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:pmtravelsolutions6199@gmail.com<br><br>
            <p class="fa fa-user" style=" font-size: 40px;color:rgb(236, 244, 247);"></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:+91-9900563983 / +91-8861575917<br><br>
            <p class="fa fa-home" style=" font-size: 40px;color:rgb(236, 244, 247);"></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:sri sai garden layout thambu shetty palya main road Bengaluru-560001<br><br>
          </div>
       </div>
     </div>
      </div>
      <nav class="navbar navbar-light bg-dark navbar-expand-lg"> 
            <ul class="navbar-nav">   
                <li class="nav-list" class="navbar-brand"><a href="home.php" class="nav-link" style="color: white;">HOME</a></li>&nbsp; &nbsp; &nbsp; 
                 <li class="nav-list" class="navbar-brand"><a href="about.php" class="nav-link" style="color: white;">ABOUT</a></li>&nbsp; &nbsp; &nbsp;  
                <li class="nav-list" class="navbar-brand"><a href="service.php" class="nav-link" style="color: white;">SERVICES</a></li>&nbsp; &nbsp; &nbsp; 
                <li class="nav-list" class="navbar-brand"><a href="booking.php" class="nav-link" style="color: white;">TICKET BOOKING</a></li>&nbsp; &nbsp; &nbsp; 
                <li class="nav-list" class="navbar-brand"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" class="nav-link" style="color: white;">pmtravelsolutions6199@gmail.com</a></li>&nbsp; &nbsp; &nbsp; 
                <li class="nav-list" class="navbar-brand"><a href="TAC.php" class="nav-link" style="color: white;">TERMS AND CONDITIONS</a></li>&nbsp; &nbsp; &nbsp; &nbsp;
                <li class="nav-list" class="navbar-brand"><a href="#" class="nav-link" style="color: white;">+91-9900563983 / +91-8861575917</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
                <li class="nav-list" class="navbar-brand"><a href="#" class="nav-link" style="color: white;">MORE</a></li>   
        </ul>
    </nav>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 1000,
            pause: 'hover'
        })
    </script>
 </body>
</html>
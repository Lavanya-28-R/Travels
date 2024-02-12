<html>
    <head>
        <title> Display </title>
        
        
        <style>
            body 
            {
                background-color: aqua;
            }
            table 
            {
                background-color: violet;
            }
            </style>
              
    </head>

<?php
 include("book.php");
 error_reporting(0);

 $sql="SELECT * FROM book";
 $data = mysqli_query($conn,$sql);

 $total = mysqli_num_rows($data);
 $result =mysqli_fetch_assoc($data);

  

 //echo $total;

 if($total != 0){
    ?>
    <h2 align="center">DISPLAYING ALL RECORDS</h2>
    <center><table border="3" cellspacing="7" width="100%">
        <tr>
        <th width="5%">ID </th>
        <th width="8%">Name</th>
        <th width="8%">Phone</th>
        <th width="8%">City</th>
        <th width="8%">State</th>
        <th width="8%">Zip</th>
        <th width="10%">From</th>
        <th width="10%">destination</th>
        <th width="15%">Departure Date</th>
        <th width="15%">Return Date</th>
        <th width="15%">Email ID</th>
        <th width="8%">Alternate No</th>
        <th width="10%">Gender</th>
        <th width="15%">Holder Name</th>
        <th width="15%">Mode Of Payment</th>
        <th width="15%">Bank Name</th>
        
        
        
        </tr>

    <?php
    
    while($result =mysqli_fetch_assoc($data))
    {
        
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['name']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['city']."</td>
                <td>".$result['state']."</td>
                <td>".$result['zip']."</td>
                <td>".$result['from']."</td>
                <td>".$result['destination']."</td>
                <td> ".$result['departure date']."</td>
                <td> ".$result['return date']."</td>
                <td>".$result['email id']."</td>
                <td>".$result['alternate no']." </td>
                <td> ".$result['gender']."</td>
                <td> ".$result['holder name']."</td>
                <td> ".$result['mode of payment']."</td>
                <td> ".$result['bank name']."</td>

                
                
          </tr>
          "; 
        
    }

 }
 else {
    echo "no records found";
      }


?>
    </table>
    </center>
  
    
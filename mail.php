<?php
  if (isset($_POST["submit"])) {
  $name = $_POST['f_name'] ;
  $email = $_POST['email'] ;
  $city = $_POST['city'] ;
  $mobnum = $_POST['mobnum'] ;
  $pincode = $_POST['pincode'] ;
  $Instagram = $_POST['instra'] ;
  $message =  $_POST['message'] ;

         $to = "naved@webzesty.net";
         $subject = Students Enqurid  ;
         
         $body = "<html>
                  <head>
                  <title>Students Enquiry Details</title>
                  </head>
                  <body>
                  
                  <table>
                  <tr>
                  <th style="">Name </th>
                  <th>Email id</th>
                  <th>Mobile Number</th>
                  <th>City</th>
                   <th>Pincode</th>
                  <th>Instra / Linkedin ID</th>
                   <th>Message</th>
                 
                  </tr>
                  <tr>
                            <td >$name</td>
                            <td><h3>$email</h3></td>
 
                            <td >$mobnum</td>
                            <td >$city</td>
                            <td >$pincode</td>
                            <td ><h3>$instra</h3></td>
 
                            <td >$message</td>
                  </tr>
                  </table>
                  </body>
                  </html>";
         
         $header = "From: $email \r\n";
     //    $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$body,$header);
         
         if( $retval == true  {
             $result =  " Thank You! Your request has been submitted successfully. " ;
         }else {
               $result = " Sorry there was an error sending your message. Please try again later " ;
         }
       }
 
      ?>  

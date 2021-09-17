<?php
       $name = $_POST['name'] ;
       $email = $_POST['email'] ;
       $city = $_POST['city'] ;
       $mobnum = $_POST['mobnum'] ;
       $pincode = $_POST['pincode'] ;
       $instra = $_POST['instra'] ;
       $stdata =  $_POST['message'] ;
      

 $message  = "<html><body>";
   
   $message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
   $message .= "<tr><td>";
   
   $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
   $message .= "<thead>
      <tr height='80'>
       <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >PSR Trust</th>
      </tr>
      </thead>";
    
   $message .= "<tbody>
      <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'>
         Name 
       </td>
       
       <td style='background-color:#00a2d1; text-align:center;'>
         $name
       </td>
         </tr>
   
        <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'>
         Email
       </td>
       
       <td style='background-color:#00a2d1; text-align:center;'>
         $email
       </td>
       
       
      </tr>
      
      
        <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'>
        City
       </td>
       
       <td style='background-color:#00a2d1; text-align:center;'>
       $city
       </td>
       
       
      </tr>
      <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
      <td style='background-color:#00a2d1; text-align:center;'>
       Mobile Number
      </td>
      
      <td style='background-color:#00a2d1; text-align:center;'>
      $mobnum
      </td>
      
      
     </tr>
     <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
     <td style='background-color:#00a2d1; text-align:center;'>
     Pincode
     </td>
     
     <td style='background-color:#00a2d1; text-align:center;'>
     $pincode
     </td>
     
     
    </tr>
    <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
    <td style='background-color:#00a2d1; text-align:center;'>
     Instra / Linkedin ID
    </td>
    
    <td style='background-color:#00a2d1; text-align:center;'>
      $instra
    </td>
    
    
   </tr>
      
      
       <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'>
        Details
       </td>
       
       <td style='background-color:#00a2d1; text-align:center;'>
         $message
       </td>
       
       
      </tr>
      
      
     
      
     
      
      </tbody>";
    
   $message .= "</table>";
   
   $message .= "</td></tr>";
   $message .= "</table>";
   
   $message .= "</body></html>";


    $to="dharshini92.somu@gmail.com";   
    // $from="evolutebioscience@gmail.com" 
    $subject="Evolutebioscience";
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);      

	
	
	echo "<script>
alert('Request Send Successfully');
window.location.href='index.html';
</script>";




?>

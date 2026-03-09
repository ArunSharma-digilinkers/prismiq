<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$pincode=$_POST['pincode'];
$bill=$_POST['monthly_bill'];

$roof=$_POST['roof_owner'];
$constructed=$_POST['constructed'];
$roof_type=$_POST['roof_type'];
$terrace=$_POST['terrace'];
$power=$_POST['power_cut'];
$timeline=$_POST['timeline'];

$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$admin="admin@yourwebsite.com";

$subject="New Residential Solar Lead";

$message="

<h2>New Solar Lead</h2>

<b>Name:</b> $name <br>
<b>Phone:</b> $phone <br>
<b>Pincode:</b> $pincode <br>
<b>Monthly Bill:</b> ₹$bill <br>

<hr>

<b>Roof Owner:</b> $roof <br>
<b>Constructed:</b> $constructed <br>
<b>Roof Type:</b> $roof_type <br>

<b>Terrace:</b> $terrace sq ft <br>
<b>Power Cut:</b> $power <br>
<b>Timeline:</b> $timeline <br>

<hr>

<b>Address:</b> $address <br>
<b>City:</b> $city <br>
<b>State:</b> $state

";

$headers="MIME-Version: 1.0"."\r\n";
$headers.="Content-type:text/html;charset=UTF-8"."\r\n";

mail($admin,$subject,$message,$headers);

$user_subject="Thank you for contacting us";

$user_message="

<h2>Thank you $name</h2>

<p>Our solar expert will contact you shortly.</p>

";

mail($_POST['email'],$user_subject,$user_message,$headers);

echo "Thank you! We will contact you soon.";

?>
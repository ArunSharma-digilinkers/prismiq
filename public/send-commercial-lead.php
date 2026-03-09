<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'] ?? '';
$company = $_POST['company_name'] ?? '';
$city = $_POST['city'] ?? '';
$pincode = $_POST['pincode'] ?? '';
$whatsapp = $_POST['whatsapp_number'] ?? '';
$bill = $_POST['monthly_bill'] ?? '';

$to = "your@email.com";   // change to your email
$subject = "New Commercial Solar Lead";

$message = "
New Commercial Solar Inquiry

Name: $name
Company Name: $company
City: $city
Pincode: $pincode
WhatsApp Number: $whatsapp
Monthly Bill: $bill
";

$headers = "From: website@yourdomain.com";

if(mail($to,$subject,$message,$headers)){
    
    echo "<script>
    alert('Thank you! Our team will contact you soon.');
    window.location.href='thank-you.php';
    </script>";

}else{

    echo "Mail sending failed.";

}

}

?>
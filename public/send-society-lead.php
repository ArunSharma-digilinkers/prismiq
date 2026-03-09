    <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'];
$company = $_POST['company_name'];
$pincode = $_POST['pincode'];
$whatsapp = $_POST['whatsapp_number'];
$bill = $_POST['monthly_bill'];
$designation = $_POST['designation'];
$agm = $_POST['agm_status'];

$to = "your@email.com";
$subject = "New Housing Society Solar Lead";

$message = "
New Housing Society Inquiry

Name: $name
Company: $company
Pincode: $pincode
WhatsApp: $whatsapp
Monthly Bill: $bill
Designation: $designation
AGM Status: $agm
";

$headers = "From: website@yourdomain.com";

mail($to,$subject,$message,$headers);

echo "<script>
alert('Thank you! Our team will contact you soon.');
window.location.href='thank-you.php';
</script>";

}

?>
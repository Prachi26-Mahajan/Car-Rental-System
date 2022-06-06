<?php
function rating($avgrating)
{
    $i = 0;
    $rating = round($avgrating, 1);
    $ex_rate = explode(".", $rating);
    $intrate = $ex_rate[0];
    if (!isset($ex_rate[1])) {
        $expo = -1;
    } else {
        $expo = $ex_rate[1];
    }
    $output = <<<HTML
    Rating <b class="ratingValue"> $rating </b>
    out
    of <b class="ratingValue">5</b>
HTML;
    if ($intrate == 5) {
        for ($i = 0; $i < $intrate; $i++) {
            $output .= <<<HTML
            <span class="fa fa-star star"></span>
HTML;
        }
    } else {
        for ($i = 0; $i < $intrate; $i++) {
            $output .= <<<HTML
            <span class="fa fa-star star"></span>
HTML;
        }
        if ($expo != 0) {
            $intrate++;
            $output .= <<<HTML
            <span class="fa fa-star-half-o star"></span>
HTML;
        }
        for ($i = $intrate; $i < 5; $i++) {
            $output .= <<<HTML
            <span class="fa fa-star-o star"></span>
HTML;
        }

    }
    return $output;
}

require_once('class.phpmailer.php');
function phpmail($email, $subject, $msg)
{
    date_default_timezone_set('Asia/Kolkata');
    $mail = new PHPMailer();

    /*$body             = file_get_contents('contents.html');
    $body             = preg_replace('/[\]/','',$body);*/

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host = "mail.yourdomain.com"; // SMTP server
    $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username = "tania.vmmteachers23@gmail.com";  // GMAIL username
    $mail->Password = "Teachers@123";            // GMAIL password

    $mail->SetFrom('tania.vmmteachers23@gmail.com', 'Hotel Veenus');

    $mail->AddReplyTo("tania.vmmteachers23@gmail.com", "Hotel Veenus");

    $mail->Subject = $subject;
//$mail->AddEmbeddedImage("http://hotelveenus.com/images/hotel-in-amritsar-header.jpg", "hotel-veenus-logo", "http://hotelveenus.com/images/hotel-in-amritsar-header.jpg");
//$mail->Body = "Embedded Image: Text";
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    //$body = "Dear " . $Name . " ,<br><br><h3 style='text-align:center'>Thank you for Booking with Hotel Veenus International</h3><br>You have booked " . $roomtype . " Room from Hotel Veenus International for " . $guests . " Guests. <br>No. of Rooms: " . $no_of_rooms . "<br>Your Checkin Date is " . $checkin_user . " and your Checkout Date is " . $checkout_user . ".<br>You may Contact us on +91-9855967487. <br>We will get back to you Soon";

    $mail->MsgHTML($msg);

    $address = $email;
    $mail->AddAddress($address);

    /*$mail->AddAttachment("images/phpmailer.gif");      // attachment
    $mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment
    if (!$mail->Send()) {
        return "No";
    } else {
        return "Yes";
    }
}

function phpsms($msg,$mobile)
{
    $ch = curl_init();
    $message = urlencode($msg);
    curl_setopt($ch, CURLOPT_URL, "http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "username=PHPBatch2020&password=0JXJPPXL&message=" . $message . "&phone_numbers=" . $mobile);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
   // print_r($server_output);
    curl_close($ch);
    return $server_output;
}

function dateFormatdb($date_dmy)
{
    $date = str_replace('/', '-', $date_dmy);
    return date('Y-m-d', strtotime($date));
}



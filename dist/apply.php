<html>

	<head>
		<title>Apply | ProjectBeta</title>
		<meta http-equiv="refresh" content="1;url=https://projectbeta.tech" />
	</head>

<?php

function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}

/*********Mail Variables*********/
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
ini_set('sendmail_from','noreply@projectbeta.tech');
$date = date('Y/m/d h:i:sa');
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
$headers .= "From: ProjectBeta <noreply@projectbeta.tech>"."\r\n";
$headers .= "X-Sender: ProjectBeta < noreply@projectbeta.tech >\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$header.= "X-Priority: 1\r\n";
$to2 = "plibither8@gmail.com";

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$admission_number = $_POST['email'];
	$to = $admission_number . '@sanskritischool.edu.in';
	$subject = 'ProjectBeta Application';
	$message = '
		<html>
			<head>
				<style>
					body {
						width: 100%;
					}
					h1.head {
						font: 200 400%/1.5 "Verdana";
						text-align: center;
						color #444;
						padding-bottom: 20px;
					}
					p {
						font: 100 170%/1 "Verdana";
					}
				</style>
			</head>
			<body>
				<h1 class="head">ProjectBeta</h1>
				<p>'. $name .' ('.$to.'),</p>
				<p>Thank you for applying to ProjectBeta. You can continue with the application process by heading over to this page: <a href="https://projectbeta.tech/register_mNJ78oB.html">https://projectbeta.tech/register_mNJ78oB.html</a></p>
			</body>
		</html>
	';
	mail($to, $subject, $message, $headers);
	mail($to2, $subject, $message, $headers);

	?>

	<h1>Form Submitted</h1>

	<?php
}

?>

<p>Redirecting to https://projectbeta.tech ...</p>
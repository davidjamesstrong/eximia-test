<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Subscription Verification</title>
</head>
<body>
    <h1>Subscription Verification</h1>
	<p>Please click the link below to verify that you wish to become a subscriber of our <b>Awesome Newsletter</b>.</p>

	<p><a href="http://127.0.0.1:8000/verify-sub/{{ $_POST['email_address'] }}">
	    Verify {{ $_POST['email_address'] }}
	</a></p>
</body>
</html>

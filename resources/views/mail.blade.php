<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>
<body>
<h2>Email Sent via Contact form</h2>
<p><b>From: </b>{{ $msg->email }}</p>
<p><b>Name: </b>{{ $msg->name }}</p>
<p><b>Subject: </b>{{ $msg->subject }}</p>
<p><b>Message: </b>{{ $msg->message }}</p>
</body>
</html>

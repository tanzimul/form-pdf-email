<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Submit form, generate pdf and send as email attachment</title>
</head>
<body>
    <h4>Your submitted data</h4>
    <h6><b>Your Email address :</b> {{ $data['email'] }}</h6>
    <h6><b>Your Name :</b> {{ $data['name'] }}</h6>
    <h6><b>Subject: </b> {{ $data['subject'] }}</h6>
    <h6><b>Body: </b> {{ $data['body'] }}</h6>

    <p>This is a test mail coming from quizstarmobile@gmail.com</p>
</body>
</html>
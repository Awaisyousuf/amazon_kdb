<!DOCTYPE html>
<html>
<head>
    <title> Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .message {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Contact Form Submission</h2>
        </div>
        <div class="message">
            <p>Hello KDP,</p>
            <p>You have message from KDP :  {{ $details['name'] }}</p>
            <ul>
                <li><strong>Name:</strong> {{ $details['name'] }}</li>
                <li><strong>Email:</strong> {{ $details['email'] }}</li>
                <li><strong>Phone:</strong> {{ $details['phone'] }}</li>
                <li><strong>Message:</strong> {{ $details['message'] }}</li>
            </ul>
            <p></p>
        </div>
        <div class="footer">
            <p> Form contacting us KDP Amazon Publishers.</p>
        </div>
    </div>
</body>
</html>

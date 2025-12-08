<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grant Thornton - Contact Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: auto;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #dddddd;
        }
        h2 {
            color: #4b2e83;
            margin-bottom: 20px;
        }
        .field {
            margin-bottom: 12px;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
        .value {
            margin-top: 3px;
            color: #444;
        }
        .message-box {
            margin-top: 10px;
            padding: 15px;
            background: #f8f8f8;
            border-radius: 6px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="email-container">

    <h2>New Contact Submission</h2>

    <div class="field">
        <div class="label">Name:</div>
        <div class="value">{{ $data['name'] }}</div>
    </div>

    <div class="field">
        <div class="label">Country:</div>
        <div class="value">{{ $data['country'] }}</div>
    </div>

    <div class="field">
        <div class="label">Phone:</div>
        <div class="value">{{ $data['phone'] }}</div>
    </div>

    <div class="field">
        <div class="label">Email:</div>
        <div class="value">{{ $data['email'] }}</div>
    </div>

    <div class="field">
        <div class="label">Message:</div>
        <div class="message-box">
            {{ $data['message'] }}
        </div>
    </div>

</div>

</body>
</html>


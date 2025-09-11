<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Portfolio Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 20px;
            color: #333;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #eee;
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        p {
            margin: 8px 0;
        }
        .label {
            font-weight: bold;
            color: #444;
        }
        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>📩 New Message from Portfolio</h2>

    <p><span class="label">From:</span> {{ $email }}</p>

    <p><span class="label">Message:</span></p>
    <p>{{ $body }}</p>

    <div class="footer">
        This message was sent via your portfolio contact form.
    </div>
</div>
</body>
</html>

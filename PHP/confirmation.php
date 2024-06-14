<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Recorded</title>
    <style>
        body {
            background-color: #001f3f;
            color: #ffffff;
            text-align: center;
            padding: 50px;
        }
        button {
            background-color: darkgoldenrod;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Your response has been recorded!</h1>
    <button onclick="goToHomepage()">Back to Homepage</button>

    <script>
        function goToHomepage() {
            window.location.href = "projectone.html"; 
        }
    </script>
</body>
</html>

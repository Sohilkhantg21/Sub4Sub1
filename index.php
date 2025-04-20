<!DOCTYPE html>
<html>
<head>
    <title>Sub4Sub - YouTube</title>
    <link rel="icon" href="https://www.youtube.com/s/desktop/6e84842b/img/favicon.ico">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(135deg, #000000, #1a1a1a);
            color: white;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.4);
            text-align: center;
            width: 90%;
            max-width: 450px;
        }
        .form-box img {
            width: 60px;
            margin-bottom: 15px;
        }
        .form-box h2 {
            margin-bottom: 20px;
            color: #c4302b;
        }
        .form-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }
        .form-box button {
            background: #c4302b;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .form-box button:hover {
            background: #a62622;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="YouTube Logo">
            <h2>Submit Your YouTube Channel</h2>
            <form action="submit.php" method="post">
                <input type="text" name="channel" placeholder="Paste your YouTube Channel URL" required>
                <button type="submit">Submit & Get Channel</button>
            </form>
        </div>
    </div>
</body>
</html>

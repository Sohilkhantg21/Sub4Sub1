<?php
date_default_timezone_set('Asia/Kolkata');
$channel = trim($_POST['channel']);

if (!filter_var($channel, FILTER_VALIDATE_URL) || strpos($channel, 'youtube.com') === false) {
    die("Invalid YouTube channel URL.");
}

$file = 'users.json';
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$users[] = [
    'channel' => $channel,
    'time' => date("Y-m-d H:i:s")
];

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

$otherUsers = array_filter($users, fn($u) => $u['channel'] !== $channel);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Submitted - YouTube Sub4Sub</title>
    <link rel="icon" href="https://www.youtube.com/s/desktop/6e84842b/img/favicon.ico">
    <style>
        body {
            background: #000;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.4);
        }
        .box h2 {
            color: #c4302b;
        }
        .box p {
            color: #333;
            font-size: 16px;
        }
        .button {
            margin-top: 20px;
            display: inline-block;
            background: #c4302b;
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        .button:hover {
            background: #a62622;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Thanks for submitting!</h2>
        <?php if (count($otherUsers) > 0):
            $randomUser = $otherUsers[array_rand($otherUsers)]; ?>
            <p>Subscribe to this user:</p>
            <p><a href="<?= $randomUser['channel'] ?>" target="_blank"><?= $randomUser['channel'] ?></a></p>
        <?php else: ?>
            <p>No other users available yet. Please wait!</p>
        <?php endif; ?>
        <a class="button" href="index.php">Submit Another</a>
    </div>
</div>
</body>
</html>

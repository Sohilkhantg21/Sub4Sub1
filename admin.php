<?php
$file = 'users.json';
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Sub4Sub</title>
    <link rel="icon" href="https://www.youtube.com/s/desktop/6e84842b/img/favicon.ico">
    <style>
        body {
            margin: 0;
            background: #000;
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
            padding: 30px;
            max-width: 900px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #c4302b;
        }
        table {
            width: 100%;
            background: #fff;
            color: black;
            border-collapse: collapse;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #c4302b;
            color: white;
        }
        a {
            color: #c4302b;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .no-data {
            text-align: center;
            margin-top: 50px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Admin Panel - User Submissions</h2>
    <?php if (count($users) === 0): ?>
        <p class="no-data">No users yet.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Channel</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach (array_reverse($users) as $user):
                ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><a href="<?= $user['channel'] ?>" target="_blank"><?= $user['channel'] ?></a></td>
                        <td><?= $user['time'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>

<?php

class UserProfile {
    public $username;
    public $passwd;
    public $isAdmin;

    function __wakeup() {
        if ($this->isAdmin) {
            // If it's an admin, redirect to admin page.
            header("Location: admin.php");
            die();
        }
    }
}

// Check if the profile cookie is set
if (!isset($_COOKIE['profile'])) {
    header("Location: login.php");
    die();
}

$profile = unserialize($_COOKIE['profile']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    User Dashboard
                </div>
                <div class="card-body">
                    <p>Welcome, <?= htmlspecialchars($profile->username, ENT_QUOTES, 'UTF-8') ?>!</p>
                    <!-- You can add more user functionalities here -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

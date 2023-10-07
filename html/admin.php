<?php

class UserProfile {
    public $username;
    public $passwd;
    public $isAdmin;

    function __wakeup() {
        if (!$this->isAdmin) {
            // If not admin, redirect to user page or another location.
            header("Location: user.php");
            die();
        }
    }
}

// Check if the profile cookie is set and if it's an admin
if (isset($_COOKIE['profile'])) {
    $profile = unserialize($_COOKIE['profile']);
    if (!$profile->isAdmin) {
        header("Location: user.php");
        die();
    }
} else {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Admin Dashboard
                </div>
                <div class="card-body">
                    <p>Welcome, <?= $profile->username ?>! You are an admin.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

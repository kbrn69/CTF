<?php

class UserProfile {
    public $username;
    public $passwd;
    public $isAdmin;

    function __wakeup() {
        if ($this->isAdmin) {
            header("Location: admin.php");
            die();
        }
    }
}

function saveProfile($profile) {
    $profiles = [];
    if (file_exists('profiles.txt')) {
        $data = file_get_contents('profiles.txt');
        $profiles = unserialize($data);
    }
    $profiles[] = $profile;
    file_put_contents('profiles.txt', serialize($profiles));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['passwd'])) {
    $newProfile = new UserProfile();
    $newProfile->username = $_POST['username'];
    $newProfile->passwd = $_POST['passwd'];
    $newProfile->isAdmin = false;
    saveProfile($newProfile);
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Sign Up
                </div>
                <div class="card-body">
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="passwd">Password:</label>
                            <input type="password" name="passwd" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

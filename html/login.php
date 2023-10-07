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

function loadProfiles() {
    if (file_exists('profiles.txt')) {
        $data = file_get_contents('profiles.txt');
        return unserialize($data);
    }
    return [];
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['passwd'])) {
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $profiles = loadProfiles();

    foreach ($profiles as $profile) {
        if ($profile->username === $username && $profile->passwd === $passwd) {
            setcookie('profile', serialize($profile), time() + 3600, "/"); // 1 hour cookie
            if ($profile->isAdmin) {
                header("Location: admin.php");
            } else {
                header("Location: user.php");
            }
            exit();
        }
    }
    $error = "Invalid credentials.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="passwd">Password:</label>
                            <input type="password" name="passwd" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

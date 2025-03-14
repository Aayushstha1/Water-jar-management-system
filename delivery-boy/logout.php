<?php
// Start the session
session_start();

// Check if the admin is logged in
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header("Location: ");
//     exit();
// }

if (isset($_POST['confirm_logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../front-page/index.html");
    exit();
}

if (isset($_POST['cancel_logout'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 400px;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .btn-yes, .btn-no {
            margin-top: 20px;
        }
        .btn-yes {
            background-color: #28a745; /* Green for Yes */
        }
        .btn-no {
            background-color: #dc3545; /* Red for No */
        }
        .btn-yes:hover {
            background-color:   #c82333;
        }
        .btn-no:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            <h4>Confirm Logout</h4>
        </div>
        <div class="card-body">
            <p>Are you sure you want to log out?</p>

            <form method="POST">
              <button type="submit" name="confirm_logout" class="btn btn-yes">Yes, Log out</button>
                <button type="submit" name="cancel_logout" class="btn btn-no">No, Stay Logged In</button>
            </form>
        </div>
    </div>

</body>
</html>

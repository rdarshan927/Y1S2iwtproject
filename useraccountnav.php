<?php
        if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
  
    <link rel="stylesheet" href="useraccount.css">

</head>
<body>

    <div class="user-left">
        <ul class="user-left-nav">
            <li><a href="useraccount.php" class="left-nav">Profile</a></li>
            <li><a href="useraccountedit.php" class="left-nav">Edit Profile</a></li>
            <li><a href="#" class="left-nav">Edit Password</a></li>
            <li><a href="#" class="left-nav">Upgrade to Premium</a></li>
            <li><a href="#" onclick="confirmDelete();" class="left-nav">Delete Account</a></li>
        </ul>
    </div>

    <script>
        function confirmDelete() {
            var confirmation = confirm("Are you sure you want to delete your account? This action cannot be undone.");
            if (confirmation) {
                <?php echo 'window.location.href = "deleteaccount.php?deleteaccount='.$username.'";' ?>
            } else {
                alert("Account deletion canceled.");
            }
        }
    </script>

</body>
</html>

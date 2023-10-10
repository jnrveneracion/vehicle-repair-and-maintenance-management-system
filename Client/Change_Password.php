<?php
include('../connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bg-style-a.css">
    <title>My Account</title>
    <style>
        .head-section-txt {
            width: fit-content;
            float: right;
            background-color: color(srgb 0.9702 0.7395 0.3452);
            padding: 10px 20px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php include "../common/navbar-for-folder.php" ?>

    <div class="f-height d-flex justify-content-center">
        <div class="text-white section" style="height: 400px;">
            <div>
                <div>
                    <div class="head-section-txt">MY ACCOUNT</div>
                    <h1>PASSWORD</h1>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="old_password" class="form-label">Old Password:</label>
                            <input type="password" class="registration-input form-control" id="old_password" name="old_password"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password:</label>
                            <input type="password" class="registration-input form-control" id="new_password" name="new_password"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_new_password" class="form-label">Confirm New Password:</label>
                            <input type="password" class="registration-input form-control input-number-only"
                                id="confirm_new_password" name="confirm_new_password" required>
                        </div>
                        <a href="" class="text-white">Save</a>
                    </form>
                    <a href="" class="text-white">Save</a>



                </div>
            </div>
        </div>
    </div>

    <?php include "../common/footer-for-folder.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>
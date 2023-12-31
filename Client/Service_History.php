<?php
// session_start(); // Start the session
require ("../connection.php");

// Check if the client is logged in and retrieve the client_id from the session
if (isset($_SESSION['client_id']) && $_SESSION['role'] == 'client') {
    $client_id = $_SESSION['client_id'];

    $query = "
    SELECT sr.request_id, sr.car_brand, sr.car_model, sr.car_reg_num, sr.service_type, sr.request_status
    FROM service_request sr
    WHERE sr.client_id = ?
    ";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $client_id);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }
} else {
    // Redirect the user to the login page or handle the case where the user is not logged in
    header("Location: Login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../CSS/style.css">
     <link rel="stylesheet" href="../CSS/bg-style-a.css">
    <title>My Service History</title>
    <style>
        .head-section-txt {
            width: fit-content;
            float: right;
            background-color: color(srgb 0.9702 0.7395 0.3452);
            padding: 10px 20px;
            font-weight: 500;
        }

        th, td {
            text-align: center;
        }

        th {
            background-color: black !important;
            color: white !important;
            font-weight: 400;
            border: 1px solid white;
        }

        td {
            background-color: rgb(12, 48, 71) !important;
            color: white !important;
            border: 1px solid white;
            vertical-align: middle;
        }


        .table-section {
            min-width: 200px;
            overflow: scroll;
        }

        .btn-a {
            background-color: color(srgb 0.325 0.325 0.325);
            border: none;
            color: white !important;
        }

    </style>
</head>
<body>
    <?php include "../common/navbar-for-folder.php" ?>

    <div class="f-height d-flex justify-content-center" style="margin-bottom: 50px;">
          <div class="text-white section" style="min-height: 445px;">
               <div>
                    <div>
                        <div class="head-section-txt">MY SERVICE HISTORY</div>
                    </div>
                    <div style="padding: 50px 0px;">
                        <div class="table-section">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Request ID</th>
                                        <th scope="col">Vehicle Brand</th>
                                        <th scope="col">Vehicle Model</th>
                                        <th scope="col">Registration No</th>
                                        <th scope="col">Service Type</th>
                                        <th scope="col">Request Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                            echo "<td>{$row['request_id']}</td>";
                                            echo "<td>{$row['car_brand']}</td>";
                                            echo "<td>{$row['car_model']}</td>";
                                            echo "<td>{$row['car_reg_num']}</td>";
                                            echo "<td>{$row['service_type']}</td>";
                                            echo "<td>" . ($row['request_status'] == 0 ? 'Pending' : 'Confirmed') . "</td>";
                                            echo "<td><a href='View_Service_History.php?request_id={$row['request_id']}' class='btn btn-a'>View</a></td>"; 
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
               </div>
          </div>
     </div>
    

    <?php include "../common/footer-for-folder.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>




<!-- Dito mapupunta kapag naapprove ung service request para malagay ung cost and stuff .  -->

<?php
include('../connection.php');

// Assuming you want to retrieve data from the message table and join it with the client table
$sql = "SELECT
            message.message_id,
            client.fullname AS client_name,
            client.email AS client_email,
            message.subject,
            message.date,
            message.message,
            message.admin_response
        FROM
            message
        JOIN
            client ON message.client_id = client.client_id";

$result = mysqli_query($con, $sql);
?>



<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
               integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
               crossorigin="anonymous">
          <link rel="stylesheet" href="../CSS/style.css">
          <link rel="stylesheet" href="../CSS/bg-style-a.css">
          <title>Admin | Message</title>
          <style>
               .admin-section {
                    margin-top: 0px;
                    margin-bottom: 100px;
                    background-color: rgba(0, 0, 0, 0.29);
                    min-width: 200px;
                    overflow: scroll;
                    padding: 30px;
                    margin-right: 20px;
                    margin-left: 20px;
                    width: 1000px;
               }

               .table-section {
                    margin-top: 0px;
                    min-width: 200px;
                    overflow: scroll;
               }


               th,
               td {
                    text-align: center;
                    width: fit-content;
                    padding: 10px 15px;
               }

               th {
                    background-color: transparent !important;
                    color: white !important;
                    font-weight: 400;
                    border: 1px solid white;
                    font-weight: bold;
               }

               td {
                    background-color: transparent !important;
                    color: white !important;
                    border: 1px solid white;
                    vertical-align: middle;
               }

               .admin-head-txt {
                    margin: 20px;
                    color: white;
                    margin-top: 50px;
                    text-transform: uppercase;
                    padding: 10px 35px;
                    background-color: color(srgb 0.9702 0.7395 0.3452);
                    width: fit-content;
               }

               .sec-head {
                    background-color: color(srgb 0.1294 0.2682 0.2997);
                    color: white;
                    padding: 10px;
                    width: fit-content;
               }

               .btn-a, .btn-edit, .btn-delete  {
                    border-radius: 0px;
                    color: white;
                    margin: 5px !important;
                    text-decoration: none;
                    padding: 10px 20px;
               }

               .btn-edit {
                    font-size: 12px;
                    padding: 5px 10px !important;
               }

               .btn-a:hover, .btn-edit:hover, .btn-delete:hover  {
                    filter: brightness(.9);
               }
               
               
               .btn-a, .btn-edit {
                    background-color: color(srgb 0.2706 0.7121 0.9729);
               }

               .btn-a:hover, .btn-edit:hover {
                    filter: brightness(.9);
               }
          </style>
     </head>
     <body>
          <?php include "../common/admin-side-nav.php" ?>
          <div>
               <div class="row">
                    <div class="col-xl-2 col-0"></div>
                    <div class="col-xl-10 col-12">
                         <div class="d-flex justify-content-center">
                              <h3 class="admin-head-txt mb-0">Message</h3>
                         </div>
                         <div class="d-flex justify-content-center">
                              <hr style="opacity: 1; color: white; width: 80%;">
                         </div>
                         <div class="d-flex justify-content-center">
                              <div class="admin-section">
                                   <div class="table-section">
                                   <?php
                                   if (!$result) {
                                        die("SQL query failed: " . mysqli_error($con));
                                    }
                                    
                                    echo '<table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Message ID</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Client Message</th>
                                                    <th scope="col">Admin Response</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<tr>
                                                <td>' . $row['message_id'] . '</td>
                                                <td>' . $row['client_name'] . '</td>
                                                <td>' . $row['client_email'] . '</td>
                                                <td>' . $row['subject'] . '</td>
                                                <td>' . $row['date'] . '</td>
                                                <td>' . $row['message'] . '</td>
                                                <td>' . $row['admin_response'] . '</td>
                                                <td><a href="View_Message.php?message_id=' . $row['message_id'] . '" class="btn-edit">View</a></td>
                                              </tr>';
                                    }
                                    
                                    echo '</tbody></table>';
                                    
                                    mysqli_close($con);
                                   ?>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <script>document.getElementById('message-nav').style = "border: 3px solid black;";</script>
     </body>
</html>
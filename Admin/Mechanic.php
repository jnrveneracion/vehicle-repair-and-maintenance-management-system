<?php //Display the table of user mechanics
     include('../connection.php');

     // Fetch data from the services_offer table
     $sql = "SELECT * FROM mechanic";
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
          <title>Admin | Mechanics</title>
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
                    padding: 30px 0px;
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

               .btn-edit, .btn-delete {
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

               .btn-delete {
                    background-color: red;
               }

               .Active {
                    color: rgb(0, 208, 0) !important;
               }

               .Inactive {
                    color: red !important;
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
                              <h3 class="admin-head-txt mb-0">Mechanics</h3>
                         </div>
                         <div class="d-flex justify-content-center">
                              <hr style="opacity: 1; color: white; width: 80%;">
                         </div>
                         <div class="d-flex justify-content-center">
                              <div class="admin-section">
                                   <div class="d-flex justify-content-end">
                                        <a href="Mechanic_Form.php" class="mb-2 btn-a">Add Mechanic</a>
                                   </div>
                                   <div class="table-section">
                                   <?php
                                   if (!$result) {
                                        echo "Error: " . mysqli_error($con);
                                    } else {
                                        // Check if there are rows in the result set
                                        if (mysqli_num_rows($result) > 0) {
                                            echo '<table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Mechanic ID</th>
                                                            <th scope="col">Full Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Mobile Number</th>
                                                            <th scope="col">Skill</th>
                                                            <th scope="col">Username</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>';
                                            
                                            // Loop through the rows and populate the table
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>
                                                        <td>' . $row['mechanic_id'] . '</td>
                                                        <td>' . $row['fullname'] . '</td>
                                                        <td>' . $row['email'] . '</td>
                                                        <td>' . $row['address'] . '</td>
                                                        <td>' . $row['mobile_number'] . '</td>
                                                        <td>' . $row['skill'] . '</td>
                                                        <td>' . $row['username'] . '</td>
                                                 
                                    
                                                        <td>
                                                        <a href="Mechanic_Form.php?mechanic_id=' . $row['mechanic_id'] . '" class="btn-edit">Update</a>
                                                        <a href="Delete_Mechanic.php?mechanic_id=' . $row['mechanic_id'] . '" class="btn-delete">Delete</a>
                                                    </td>
                                                      </tr>';
                                            }
                                            
                                            echo '</tbody></table>';
                                        } else {
                                            echo "No records found.";
                                        }
                                        
                                        mysqli_free_result($result);
                                    }
                                    
                                    mysqli_close($con);
                                   ?>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </body>

</html>
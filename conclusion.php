<?php

    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo 'Not Connected to Server';
    }
    if(!mysqli_select_db($con,'test')){
        echo 'Database Not Selected';
    }
    
    $sql = "SELECT * FROM test ORDER BY Id DESC LIMIT 1"; 
    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Result</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <style type="text/css">
            body{
                background: #4876FF;
            }

            table{
                height: 200px;
                width: 400px;
            }

            td {
                text-align: center;
                margin-left:10px;
                margin-right:10px;
                text-transform: uppercase;
                background: #DCDCDC;
                border: 1px #4876FF solid;
            }

            th{
                text-align: center;
                background: white ;
                text-transform: uppercase;
                border: 1px #4876FF solid;
            }

            td:hover{
                background: black ;
                color:white;
                cursor: pointer;
            }

            h1:hover{
                color:white;
                cursor: pointer;
            }

            button{
                border: none;
                background: #d33f8d;
                margin-top: -20px;
                border-radius: 5px;
                color: black;
                cursor: pointer;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: 0.5s ease;
                width: 240px;
                height: 35px;
                display: flex;
            }

            button:hover {
                background: #000;
                color: white;
            }

        </style>
    </head>
    <body>
        <div class="container" style="margin:100px;">
            <div class="row" style="margin-bottom: 50px; text-align: center;">
                <h1 style="font-family: 'Times New Roman', Times, serif;"><strong>Thank you for your Response</strong></h1>
            </div>
            <div class="row" style="margin-bottom: 50px;">
                <table>
                    <tr>
                        <th>Checkup for whom</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Obesity</th>
                        <th>Smoking</th>
                        <th>High Cholesterol</th>
                        <th>Have Diabetes</th>
                        <th>Health Problem</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>Duration of Health Problem</th>
                    </tr>

                    <?php

                        while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
                        { 
                    ?>

                    <tr>
                        <td><?php echo $rows['for_whom']; ?></td>
                        <td><?php echo $rows['gender']; ?></td>
                        <td><?php echo $rows['age']; ?></td>
                        <td><?php echo $rows['obese']; ?></td>
                        <td><?php echo $rows['smoke']; ?></td>
                        <td><?php echo $rows['cholesterol']; ?></td>
                        <td><?php echo $rows['diabetes']; ?></td>
                        <td><?php echo $rows['problem']; ?></td>
                        <td><?php echo $rows['country']; ?></td>
                        <td><?php echo $rows['states']; ?></td>
                        <td><?php echo $rows['duration']; ?></td>
                    </tr>

                    <?php 
                        } 
                    ?>

                </table>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button onclick="location.href='index.html'">Return to Home Page</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
    </body>
</html>
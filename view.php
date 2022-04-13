<?php

require_once("connection.php");
$query = " select * from users ";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>View Records</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td> Student ID </td>
                            <td> Student Name </td>
                            <td> Email </td>
                            <td> Phone No. </td>
                            <td> Edit </td>
                            <td> Delete </td>
                        </tr>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $UserID = $row['id'];
                            $UserName = $row['name'];
                            $UserEmail = $row['email'];
                            $UserPhone = $row['phone'];
                        ?>
                            <tr>
                                <td><?php echo $UserID ?></td>
                                <td><?php echo $UserName ?></td>
                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserPhone ?></td>
                                <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
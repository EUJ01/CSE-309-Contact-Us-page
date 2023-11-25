<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #713E5A;">

    <div class="container">
        <div class="row align-items-center" style="min-height: 100vh;">

            <div class="col-12 py-3 bg-" style="background-color: #d1e7dd; margin: 20px; border-radius: 10px;">

                <h2 style="text-align: center;">Contacted List Details</h2>
                <div>
                    <table class="table table-success table-striped">

                        <thead style="font-size: 20px">
                            <tr style="">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Feedback</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $link = mysqli_connect('localhost', 'root', '', '2120117_cse309_ass_3');

                            if ($link === false) {
                                die('Error establishing connection' . mysqli_connect_error());
                            }

                            $query = "SELECT * FROM contactinfo";
                            $result = $link->query($query);

                            if (!$result) {
                                die("SQL query failed " . $connection->error);
                            }

                            while ($row = $result->fetch_assoc()) {

                                echo "<tr>
                                    <td>" . $row["Name"] . "</td>
                                    <td>" . $row["Email"] . "</td>
                                    <td>" . $row["Phone"] . "</td>
                                    <td>" . $row["Feedback"] . "</td>
                                    </tr>";

                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
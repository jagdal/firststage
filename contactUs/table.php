
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataContact</title>
    <link href='table.css' rel='stylesheet' type='text/css'>

</head>
<body dir="rtl">
    <h1>table of data </h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "contact");
            if($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);

            }
            $sql = "SELECT * FROM contact_us";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>". $row['first_name']. "</td> <br>
                        <td>". $row['last_name']. "</td>
                        <td>". $row['email']. "</td>
                        <td>". $row['phone']. "</td>
                        <td>". $row['message']. "</td>
                      </tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }

        $conn->close();
        ?>
        <?php
        if (!empty($contact_data)) {
            while($row = $contact_data->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['first_name'] . "</td>
                        <td>" . $row['last_name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['phone'] . "</td>
                        <td>" . $row['message'] . "</td>
                      </tr>";
            }
        } else {
            echo "";
        }
        ?>
    </table>
</body>
</html>

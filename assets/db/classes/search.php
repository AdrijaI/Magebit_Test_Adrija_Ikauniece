<?php

class Search extends Dbh {

    public function searchEmail($search) {
        $sql = "SELECT id, email, provider, date FROM emails WHERE email LIKE '%$search%';";
        $result = $this->connect()->query($sql);
        $count = mysqli_num_rows($result);

        if($count == 0) {
            echo "There is no results!";

        } else {

            echo "<table border='1' style='width: 60%; text-align: center; border-collapse: collapse;'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Provider</th>
            <th>Date</th>
            </tr>";

            while($row = $result->fetch_assoc()) {


                echo "<tr>";
                echo "<td>" . "<input type='checkbox' name='checkbox' style='float: left'/>" . $row['id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['provider'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</tr>";

            }
        echo "</table>";
        }
    }
}
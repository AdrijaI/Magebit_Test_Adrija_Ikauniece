<?php

class Table extends Dbh {

    public function getEmails($sql) {
        $result = $this->connect()->query($sql);

        echo "<table border='1' style='width: 60%; text-align: center; border-collapse: collapse;'>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Provider</th>
                <th>Date</th>
                </tr>";

        while($row = $result->fetch_assoc()) {

                
                echo "<tr>";
                echo "<td>" . "<input type='checkbox' name='checkbox' value='".$row['id']."' style='float: left'/>" . $row['id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['provider'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</tr>";

        }
        echo "</table>";

        
    }
}
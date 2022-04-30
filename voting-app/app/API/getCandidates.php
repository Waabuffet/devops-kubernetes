<?php

$query = "SELECT * FROM candidates;";

$result = Database::getInstance()->select($query, array());

while ($row = $result->fetch()) {
    echo "<option value='".$row['id']."'>".$row['name']."</option>";
}
?>
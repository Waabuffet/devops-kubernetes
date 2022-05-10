<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path.'/database/db.php';

$query = "SELECT c.name AS candidate, count(cv.candidate_id) AS votes FROM candidates c LEFT JOIN candidate_votes cv ON cv.candidate_id = c.id GROUP BY name ORDER BY votes DESC;";

$result = Database::getInstance()->select($query, array());

while ($row = $result->fetch()) {
    echo '
        <tr>
            <th>'.$row['candidate'].'</th>
            <td>'.$row['votes'].'</td>
        </tr>
    ';
}
<?php
require 'coondb.php';
require 'createcollection.php';

$cursor = $collection->find();

echo "<h2>All Students</h2>";
echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
			<th>Phone</th>
			<th>Course</th>
			<th>Gender</th>
			<th>City</th>
            <th>Actions</th>
        </tr>";

foreach ($cursor as $cur) {
    echo "<tr>
            <td>{$cur['name']}</td>
            <td>{$cur['age']}</td>
            <td>{$cur['email']}</td>
			<td>{$cur['phone']}</td>
			<td>{$cur['course']}</td>
			<td>{$cur['gender']}</td>
			<td>{$cur['city']}</td>
			
            <td>
                <a href='update.php?id={$student['_id']}'>Update</a> |
                <a href='delet.php?id={$student['_id']}'>Delete</a>
            </td>
        </tr>";
}
echo "</table>";
?>

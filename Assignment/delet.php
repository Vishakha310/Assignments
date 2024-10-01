<?php
require 'coondb.php';
require 'createcollection.php';


if (isset($_GET['id'])) {
    $id = new MongoDB\BSON\ObjectId($_GET['id']);
    $deleteResult = $collection->deleteOne(['_id' => $id]);

    if ($deleteResult->getDeletedCount() > 0) {
        echo "Student deleted successfully!";
    } else {
        echo "Error deleting student!";
    }
}

echo '<br><a href="read.php">Go Back</a>';
?>

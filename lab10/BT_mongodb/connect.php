<?php
require "../BT_mongodb/vendor/autoload.php";
$dbname = 'dct';
try {
    $m = new
        MongoDB\Client("mongodb+srv://thien:27112003@cluster0.1ko0tv3.mongodb.net/?retryWrites=true&w=majority");
    $db = $m->$dbname;
    // $db = $m->selectDB($dbname);
    //echo "<p>Connected!<p>";
    // echo "thanh cong";
} catch (Exception $ex) {
    print $ex;
    header("location:../error.html");
}

<?php
/* بدء الاتصال */
$con = mysqli_connect('127.0.0.1', 'root', '');

if (!$con) {
}

if (!mysqli_select_db($con, 'iot')) {
}

/* القراءة من قاعدة البيانات */
$sqlView = "SELECT engineName,engineValue FROM engine";
$result = mysqli_query($con, $sqlView);
if (!$result) {
    die("Error in query");
}

/* عرض البيانات */
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li>' . $row['engineName'] . ' = ' . $row['engineValue'] . '</li>';
}

/*  */
if (!mysqli_query($con, $sqlView)) {
}

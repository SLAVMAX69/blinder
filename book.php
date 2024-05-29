<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $bookingInfo = "Дата: $date, Час: $time\n";

    $file = 'bookings.txt';
    file_put_contents($file, $bookingInfo, FILE_APPEND | LOCK_EX);

    echo 'Вашето посещение е резервирано успешно!';
} else {
    echo 'Невалидна заявка.';
}
?>
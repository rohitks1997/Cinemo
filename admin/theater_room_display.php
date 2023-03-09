<?php
ini_set('display_errors', 1);
include('../db_connect.php');

$k = $_POST['id'];
$k1 = trim($k);
$sql = "SELECT * from theater_room INNER JOIN cinema ON theater_room.cinema_id = cinema.cinema_id WHERE cinema_name = '{$k1}'";
$result = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_array($result)) {
?>
<tr>
    <td>
        <center>
            <?php echo ($rows['cinema_name']) ?>
        </center>
    </td>
    <td>
        <center>
            <?php echo ($rows['room_number']) ?>
        </center>
    </td>
    <td>
        <center>
            <?php echo ($rows['room_type']) ?>
        </center>
    </td>
    </tr>
<?php
}
echo $sql;

?>
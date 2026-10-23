<?php
function get_foods($id = 0): array
{
    require_once __DIR__ . "/../config/conn.php";

    $food_data = array();

    if ($id == 0) {
        $sql = "SELECT * FROM foods";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
            array_push($food_data, $row);
        }
    } else {
        $sql = "SELECT * FROM foods WHERE f_id='$id'";

        $result = mysqli_query($conn, $sql);

        $food_data = mysqli_fetch_assoc($result);
    }


    mysqli_close($conn);


    return $food_data;
}

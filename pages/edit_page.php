<?php
require_once __DIR__ . '/../actions/get.php';

$id = $_GET['food_id'];
$food_data = get_foods($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center w-100 mt-5">
        <div class="w-25 border p-4 rounded-2">
            <h3 class="text-center">Edit Food</h3>
            <form action="../actions/update.php" method="post">
                <input type="hidden" name="id" value="<?= $food_data['f_id'] ?>">
                <div class="form-group mb-3">
                    <label for="">Food Name</label>
                    <input type="text" class="form-control" name="food_name" value="<?= $food_data['f_name'] ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="">Food Price</label>
                    <input type="number" class="form-control" name="food_price" value="<?= $food_data['f_price'] ?>" required>
                </div>

                <div class="d-flex justify-content-end form-group mb-2 mt-5">
                    <button class="btn btn-sm btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
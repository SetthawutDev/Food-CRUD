<?php
require_once __DIR__ . "/../actions/get.php";

$food_data = get_foods();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <button class="btn btn-sm btn-primary m-2" onclick="window.location.href='add_page.php'"><span>Add Food</span></button>
    <table class="table w-50 table-bordered align-middle m-2">
        <thead>
            <tr>
                <th colspan="5" class="table-primary">
                    <h1 class="h4 text-center">Food List</h1>
                </th>
            </tr>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Food Name</th>
                <th class="text-center">Price</th>
                <th colspan='2' class="text-center">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($food_data as $food) { ?>
                <tr>
                    <td class="text-center"><?= $food['f_id']; ?></td>
                    <td class="text-center"><?= $food['f_name']; ?></td>
                    <td class="text-center"><?= $food['f_price']; ?></td>
                    <td class="text-center" style="width: 15%;">
                        <button
                            class="btn btn-sm btn-success w-100 d-flex justify-content-center gap-2"
                            onclick="window.location.href='edit_page.php?food_id=<?= $food['f_id'] ?>'">
                            <img src="../icons/pen.svg"><span>Edit</span>
                        </button>
                    </td>
                    <td class="text-center" style="width: 15%;">
                        <button class="btn btn-sm btn-danger w-100 d-flex justify-content-center gap-2"
                            onclick="are_you_sure(<?= $food['f_id'] ?>);">
                            <img src="../icons/bin.svg"><span>Delete</span>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <div class="w-50 m-2">
        <figure class="bg-body-tertiary p-4"
            style="border-left: .35rem solid #fcdb5e; border-top: 1px solid #eee; border-right: 1px solid #eee; border-bottom: 1px solid #eee;">
            <i class="fas fa-quote-left fa-2x mb-4" style="color: #fcdb5e;"></i>
            <blockquote class="blockquote pb-2">
                <p>ผมฝึกเขียนด้วยตัวเองนะครับ ไม่ได้ใช้ AI. ผมตั้งใจจะฝึกใช้งาน Boostrap.</p>
            </blockquote>
            <figcaption class="blockquote-footer mb-0">
                Setthawut Srichanklad <cite>แต่ Quote Template อันนี้ ผมเอามาจากอันนี้คับ: https://mdbootstrap.com/docs/standard/extended/quotes/</cite>
            </figcaption>
        </figure>
    </div>



    <script>
        function are_you_sure(id) {
            if (confirm('Are you sure to delete?: ' + id)) {
                window.location.href = '../actions/delete.php?food_id=' + id;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
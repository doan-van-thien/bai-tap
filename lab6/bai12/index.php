<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đánh giá</title>
</head>

<body>
    <?php include("funtions.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // UPDATE RATING
        if (isset($_POST['rate_submit'])) {
            if (isset($_POST['rate'])) {
                $rate = $_POST['rate'];
                setRatingInfo($id, $rate);
            }
        }

        $html = getProduct($id);
        include("template/view-product.php");
    } else {
        $html = listProduct();
        include("template/list-products.php");
    } ?>

</body>

</html>
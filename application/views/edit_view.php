<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<?php
// echo "<pre>";print_r($singleProduct); die();
//   echo $products; die(); 
?>

<body>
    <form action="<?php echo base_url(); ?>update" method="POST">

        <div class="form-group container">
            <?php ?>
            <input type="hidden" name="id" value="<?php echo $singleProduct->id ?>" id="" class="form-control ">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $singleProduct->name ?>" id="" placeholder="Enter your name here" class="form-control ">
            <br>
            <label for="price">Price</label>
            <input type="text" name="price" value=" <?php echo $singleProduct->price ?>" id="" placeholder="Enter your Price here" class="form-control ">
            <br>
            <label for="quantity"> Quantity</label>
            <input type="text" name="quantity" value="<?php echo $singleProduct->quantity ?>" id="" placeholder="Enter your Quantity here" class="form-control ">
            <br>
            <a href="<?php echo base_url(); ?>list"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close </button></a>
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
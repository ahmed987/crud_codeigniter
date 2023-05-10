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
    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url(); ?>update" method="POST" id="editForm">
                    <div class="modal-body">

                        <div class="form-group container">
                            <input type="hidden" name="id" id="" class="form-control edit_id">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="" placeholder="Enter your name here" class="form-control edit_name" required="required">
                            <br>
                            <label for="price">Price</label>
                            <input type="text" name="price" id="" placeholder="Enter your Price here" class="form-control edit_price" required="required">
                            <br>
                            <label for="quantity"> Quantity</label>
                            <input type="text" name="quantity" id="" placeholder="Enter your Quantity here" class="form-control edit_quantity" required="required">
                            <br>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <a><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close </button></a>
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/custom_js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
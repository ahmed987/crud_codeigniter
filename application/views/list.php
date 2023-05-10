<?php include 'edit_view.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST view</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets\css\custom_css\style.css">

</head>

<body>
    <div class="jumbotron ">
        <h1 class="display-4  mt-3" align="center">CRUD in CodeIgniter</h1>
    </div>
    <div class="container " style="margin-bottom: 4%;">
        <div class="clear-flex">
            <h3 style="float:left">All Products</h3>
            <a href="#" class="btn btn-primary" style="float:right" value="" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Products</a>
        </div>

    </div>
    <div class="container ">


        <table class="table table-striped table-hover mt-4 display" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($product_details as $k => $products) : ?>
                    <tr>

                        <th scope="row"><?php echo $k + 1 ?></th>
                        <td><?php echo "$products->name" ?></td>
                        <td><?php echo "$products->price" ?></td>
                        <td><?php echo "$products->quantity" ?></td>
                        <td>
                            <a><button data-id='<?= encrypt($products->id) ?>' data-name="<?= $products->name ?>" data-price="<?= $products->price ?>" data-quantity="<?= $products->quantity ?>" type="button" class="btn btn-success edit_btn" data-bs-toggle="modal" data-bs-target="#createModal"> Edit</button></a>
                            <a data-id="<?php echo $products->id ?>" href="<?php echo base_url(); ?>delete/<?php echo $products->id ?>" class="btn btn-danger  delete_btn"> Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?php echo base_url(); ?>create" method="POST" id='createForm'>


                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group ">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="" placeholder="Enter your name here" class="form-control name " required="required">
                                <br>
                                <label for="price">Price</label>
                                <input type="text" name="price" id="" placeholder="Enter your Price here" class="form-control " required="required">
                                <br>
                                <label for="quantity"> Quantity</label>
                                <input type="text" name="quantity" id="" placeholder="Enter your Quantity here" class="form-control " required="required">
                                <br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".edit_btn", function() {
                id = JSON.stringify($(this).data('id'));
                name = $(this).data('name');
                price = $(this).data('price');
                quantity = $(this).data('quantity');



                $('.edit_id').val(id);
                $('.edit_name').val(name);
                $('.edit_price').val(price);
                $('.edit_quantity').val(quantity);

            })


            $('#myTable').DataTable();
        });
    </script>
    <script src="<?php echo base_url(); ?>assets/js/custom_js/validation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom_js/alert.js">

    </script>
</body>

</html>
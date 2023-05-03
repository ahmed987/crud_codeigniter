$(document).on('click', '.delete_btn', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    id = $(this).data('id');
    console.log(id);
    Swal.fire({
        title: 'Are you sure want to delete?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(url);
            console.log("success")

        }
    })
});
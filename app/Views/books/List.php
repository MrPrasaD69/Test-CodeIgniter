<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Book App</title>
</head>
<body>
    <div class="container-fluid bg-red shadow sm">
        <div class="container pb-2 pt-2">
            <div class="text-white h4">Book Application
            </div>
        </div>
    </div>
    <div class="bg-white shadow sm">
        <div class="container">
            <div class="row">
                <div class="nav nav-underline">
                    <div class="nav-link">Books / View</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-end">
                <a href="<?php echo base_url('book/create') ?>" class="btn btn-outline-primary btn-sm" >ADD</a>
            </div>
            
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-red text-white">
                        <div class="card-header-title">Books</div>
                    </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>No</th>
                                    <th>Genre</th>    
                                    <th>Action</th>
                                </tr>
                                
                                <?php if(!empty($books)){
                                    foreach($books as $book){
                                ?>
                                <tr>
                                    <td><?php echo $book['id'] ?></td>
                                    <td><?php echo $book['title'] ?></td>
                                    <td><?php echo $book['author'] ?></td>
                                    <td><?php echo $book['isbno'] ?></td>
                                    <td><?php echo $book['genre'] ?></td>
                                    <td><a href="<?php echo base_url("book/edit/".$book['id']); ?>" class="btn btn-success btn-sm m-1 1">Edit</a><a class="btn btn-danger btn-sm" onclick="confirmDelete('<?php echo $book['id'] ?>')">Delete</a></td>
                                </tr>
                                <?php } 
                                }
                                else{
                                ?>
                                <tr>
                                    <td colspan="5">No Records Found</td>
                                </tr>
                                <?php }
                                ?>
                            </table>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>

<script>
    confirmDelete=(id)=>{
        if(confirm("Are you sure you want to Delete?")){
            //console.log(id);
            window.location.href="<?php echo base_url('book/delete/');?>"+id;
        }
        
    }
</script>
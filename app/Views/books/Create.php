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
                    <div class="nav-link">Books / Create</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-end">
                <a href="<?php echo base_url('book'); ?>" class="btn btn-outline-primary btn-sm" >BACK</a>
            </div>
            
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header bg-red text-white">
                            <div class="card-header-title">Create Book</div>
                        </div>
                        <div class="card-body">
                            <form name="create-form" method="POST">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" id="title" class="form-control <?php echo (isset($validation) && $validation->hasError('title')) ? 'is-invalid' :'' ?>" value="<?php echo set_value('title') ?>" >
                                    <?php //validation for name field
                                        if(isset($validation) && $validation->hasError('title')){
                                            echo '<p class="invalid-feedback">'. $validation->getError('title').'</p>';
                                        }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input type="text" name="author" id="author" class="form-control <?php echo (isset($validation) && $validation->hasError('author')) ? 'is-invalid' :'' ?> " value="<?php echo set_value('author') ?>">
                                    <?php //validation for author field
                                        if(isset($validation) && $validation->hasError('author')){
                                            echo '<p class="invalid-feedback">'. $validation->getError('author').'</p>';
                                        }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Book No</label>
                                    <input type="text" name="isbno" id="isbno" class="form-control <?php echo (isset($validation) && $validation->hasError('isbno')) ? 'is-invalid' :'' ?>" value="<?php echo set_value('isbno') ?>" >
                                    <?php //validation for author field
                                        if(isset($validation) && $validation->hasError('isbno')){
                                            echo '<p class="invalid-feedback">'. $validation->getError('isbno').'</p>';
                                        }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Genre</label>
                                    <input type="text" name="genrename" id="genrename" class="form-control <?php echo (isset($validation) && $validation->hasError('genrename')) ? 'is-invalid' :'' ?>" value="<?php echo set_value('genrename') ?>" >
                                    <?php //validation for author field
                                        if(isset($validation) && $validation->hasError('genrename')){
                                            echo '<p class="invalid-feedback">'. $validation->getError('genrename').'</p>';
                                        }
                                    ?>
                                </div>

                                
                                <button type="submit" class="btn btn-outline-success btn-sm mt-3" >Save</button>
                            </form>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>
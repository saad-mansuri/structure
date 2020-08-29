<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="" placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="submit" class="btn btn-primary">
                    <a href="?page=<?php echo base64_encode("display_data_form"); ?>" class="btn btn-info">View</a>
                </div>
            </form>
        </div>    
    </div>
</div>



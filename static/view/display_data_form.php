<div class="container">
    <div class="">

<div class="text-center">
    <a href="/structure" class="btn btn-success btn-center">Logout</a>
    </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <?php 
                while ($row = $result->fetch_object()):
            ?>

                <tr>
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->email;?></td>
                    <td>
                        <a href="?page=<?php echo $_GET['page']; ?>&edit=<?php echo $row->id?>" class="btn btn-info">Edit</a>
                        <a href="?page=<?php echo $_GET['page']; ?>&delete=<?php echo $row->id;?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile;?>
        </table>
    </div>
</div>
<?php include '../include/nav.php'; ?>
            

                <a href="addition.php"><button class="btn btn-outline-success my-2">Export</button></a>
                
                <table class="table" border="1" >
                        <tr>
                            <th>#</th>
                            <th>product Id</th>
                            <th>Quantity</th>
                            <th>Export Date</th>
                            <th>Created By</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                        include '../include/connection.php';
                        $sql=mysqli_query($conn,"SELECT * FROM export");
                        $c=1;
                        while($r=mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $c++ ?></td>
                            <td><?php echo  $r['p_id'] ?></td>
                            <td><?php echo  $r['quantity'] ?></td>
                            <td><?php echo  $r['exportdate'] ?></td>
                            <td><?php echo  $r['created_by'] ?></td>
                            <td><a href="update.php?upd=<?php echo $r['exp_id'] ?>"><button class="btn btn-outline-success ">Update</button></a></td>
                            <td><a href="delete.php?dlt=<?php echo $r['exp_id'] ?>"><button class="btn btn-outline-danger ">Delete</button></a></td>
                        </tr>
                        <?php } ?>
                    </table>  
                    
                    
                
            </div>
<?php include '../include/footer.php'; ?>


<?php include '../include/nav.php'; ?>
       
                
                <table class="table" border="1" >
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                        include '../include/connection.php';
                        $ID=$_SESSION['id'];
                        $sql=mysqli_query($conn,"SELECT * FROM users WHERE user_id != '$ID' ");
                        $c=1;
                        while($r=mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $c++ ?></td>
                            <td><?php echo  $r['username'] ?></td>
                            <td><?php echo $r['password'] ?></td>
                            <td><a href="update.php?upd=<?php echo $r['user_id'] ?>"><button class="btn btn-outline-success ">Update</button></a></td>
                            <td><a href="delete.php?user_id=<?php echo $r['user_id'] ?>"><button class="btn btn-outline-danger ">Delete</button></a></td>
                        </tr>
                        <?php } ?>
                    </table>  
                    
                    
                
            </div>
<?php include '../include/footer.php'; ?>


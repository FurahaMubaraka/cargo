<?php include '../include/nav.php'; ?>

                <a href="addition.php"><button class="btn btn-outline-success my-2">Add product</button></a>
                
                <table class="table" border="1" >
                        <tr>
                          
                            <th>Product Name</th>
                            <th>Product Owner</th>
                            <th>Created at</th>
                            <th>Created By</th>
                            
                            <th colspan="2">Action</th>
                        </tr>
                        <tbody>
                        <?php
                        include '../include/connection.php';
                        $sql= "SELECT products.*, users.username FROM products INNER JOIN users ON products.created_by=users.user_id";
                        $result = $conn->query($sql);
                        $c=1;
                        if($result->num_rows > 0){
                        while($r=$result->fetch_assoc()){
                       
                        echo"<tr>";
                           
                            echo "<td>".$r['pname']."</td>";
                            echo "<td>".$r['pownername']."</td>";
                            echo "<td>".$r['created_at']."</td>";
                            echo "<td>".$r['username'] ."</td>";
                            echo "<td><a href='update.php?upd=".$r['p_id']."'><button class='btn btn-outline-success'>Update</button></a></td>";
                            echo "<td><a href='delete.php?dlt=".$r['p_id']."'><button class='btn btn-outline-danger '>Delete</button></a></td>";
                        echo "</tr>";
                    
                        }
                    } 
                    ?>
            </tbody>
           
                    </table>  
                    
                    
                
            </div>
<?php include '../include/footer.php'; ?>


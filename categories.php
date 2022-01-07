<?php

require('navbar.php');
$sql = "select * from categories order by categories desc";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Categories</title>
</head>


<body>

<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Custom Table</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">serial</th>
                                
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                             
                                             $i=1;
                                             while($rows=mysqli_fetch_assoc($result))
                                                    { ?>
                                                        <tr>
                                                        <td class="serial"><?php echo $i?></td>
                                                        <td><?php echo $rows['id'] ?></td>
                                                        <td><?php echo $rows['categories'] ?></td>
                                                        <td>
                                                            
                                                        <?php 

                                                        if($rows['quantity']>=1)
                                                        
                                                        {
                                                            echo "Available";
                    
                                                        }
                                                        else{
                                                            echo "Not Available";
                                                        }
                                                        
                                                        
                                                        ?>
                                                    
                                                        </td>
                                                        </tr>
                                                    
                
                                       <?php }  ?>
                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div>

    
</body>
</html>
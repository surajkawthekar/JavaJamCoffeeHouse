<div class="columnright">
                    <header>
                        <h1>JavaJam Coffee House</h1>
                    </header>
                    <p id="cart_p" align="center"><b>Shopping Cart</b></p>

							<?php 
                            echo '<table id ="cart_tab" align="center" cellpadding="10">';
                                echo '<tr id="cart_tablerow">';
                                echo '<td align="center"><b>Description</b></td>
                                      <td><b>Quantity</b></td>
                                      <td><b>Price</b></td></tr>';
                                $qty1 = 1;
                                $qty =1;
                                $cost1 = 0;
                                $numberOfRecords = 0;
                                $prodNumber = 0;
                                $currentProduct = "";
                                $totalCost = 0;
                                $num_dbRecords = 0;
                                if(isset($_POST["submit"])){
                                    if(isset($_SESSION['numberOfRecords'])){
                                        $_SESSION['numberOfRecords'] = $_SESSION['numberOfRecords'] + 1;
                                    }else{
                                        $_SESSION['numberOfRecords'] = 1;
                                                            
                                    }
                            
                                    if (isset($_SESSION['dbRecords']))
                                    {
                                        $num_dbRecords = $_SESSION['dbRecords'];
                                       
                                    }else{
                                        $num_dbRecords = 10;
                                    }
                                    $num_dbRecords = $num_dbRecords - 1;
                                    
                                    $numberOfRecords = $_SESSION['numberOfRecords'];
                                    
                                    while($num_dbRecords >= 0){
                                        
                                        if(isset($_POST["desc".$prodNumber])){
                                            echo '<tr id="cart_tablerow">';
                                            echo '<td>'.$_POST["desc".$prodNumber] .'</td>';
                                            $_SESSION['cost'.$prodNumber] = $_POST["cost".$prodNumber];
                                            $_SESSION['desc'.$prodNumber] = $_POST["desc".$prodNumber];
                                            $_SESSION['proId'.$prodNumber] = $_POST["proId".$prodNumber];
                                            
                                            $_SESSION['currentProduct'] = $_POST["desc".$prodNumber];
                                            if(isset($_SESSION['Qty'.$prodNumber])){
                                                $_SESSION['Qty'.$prodNumber] = $_SESSION['Qty'.$prodNumber] + 1;   
                                            }
                                            else{
                                                $_SESSION['Qty'.$prodNumber] = 1;
                                            }
                                            $qty = $_SESSION['Qty'.$prodNumber];
                                            echo '<td> '.$qty. '</td>';
                                            $cost1 = $_SESSION["cost".$prodNumber] * $qty;
                                            echo '<td>$'.$cost1 .'</td>';
                                            echo '</tr>';
                                        }
                                        $num_dbRecords = $num_dbRecords - 1;
                                        $prodNumber = $prodNumber + 1;
                                    }

                                    $prodNumber = 0;
                                    while($numberOfRecords >= 0)
                                    {
                                        if(isset($_SESSION['desc'.$prodNumber])){
                                            if($_SESSION['desc'.$prodNumber] != $_SESSION['currentProduct']){
                                                echo '<tr id="cart_tablerow">';
                                                echo '<td>'.$_SESSION['desc'.$prodNumber] .'</td>';
                                                $qty = $_SESSION['Qty'.$prodNumber];
                                                echo '<td> '.$qty. '</td>';
                                                $cost1 = $_SESSION['cost'.$prodNumber] * $qty;
                                                echo '<td>$'.$cost1.'</td>';
                                                echo '</tr>';   
                                            } 
                                        }
                                        $numberOfRecords = $numberOfRecords - 1;
                                        $prodNumber = $prodNumber + 1;
                                    }
                                        
                                    
                                    $numberOfRecords = 4;
                                    
                                    $prodNumber = 0;
                                    while($numberOfRecords >= 0){
                                        
                                        if(isset($_SESSION['desc'.$prodNumber])){
                                            $totalCost = $totalCost + ($_SESSION['cost'.$prodNumber] * $_SESSION['Qty'.$prodNumber]);
                                        }
                                        $prodNumber = $prodNumber + 1;
                                        $numberOfRecords = $numberOfRecords - 1;
                                    }
                                    echo '<tr id="cart_tablerow"><td></td><td>Total</td><td>$'.$totalCost.'</td></tr>';

                                }else{
                                    if(isset($_SESSION['numberOfRecords'])){
                                        $numberOfProduct = $_SESSION['numberOfRecords'];
                                    }else{
                                        $numberOfProduct = -1;
                                    }
                                $prodNumber = 0;
                                while($numberOfProduct >= 0 ){
                                    if(isset($_SESSION['desc'.$prodNumber])){
                                        echo '<tr id="cart_tablerow">';
                                        echo '<td id = "product">'.$_SESSION['desc'.$prodNumber] .'</td>';
                                        echo '<td id = "qty"> '.$_SESSION['Qty'.$prodNumber].' </td>';
                                        $cost = $_SESSION['Qty'.$prodNumber] * $_SESSION['cost'.$prodNumber]; 
                                        echo '<td id = "price">$'.$cost.'</td>';
                                        echo '</tr>';
                                    }
                                    $prodNumber = $prodNumber  + 1;
                                    $numberOfProduct = $numberOfProduct - 1;
                                }
                                $total = 0;
                                $numberOfRecords = 0;
                                if(isset($_SESSION['numberOfRecords'])){
                                    $numberOfRecords = $_SESSION['numberOfRecords'];
                                }else{
                                    $numberOfRecords = -1;
                                }
                                $prodNumber = 0;
                                while($numberOfRecords >= 0){
                                    
                                    if(isset($_SESSION['desc'.$prodNumber])){
                                        $total = $total + ($_SESSION['cost'.$prodNumber] * $_SESSION['Qty'.$prodNumber]);
                                    }
                                    $prodNumber = $prodNumber + 1;
                                    $numberOfRecords = $numberOfRecords - 1;
                                }
                                echo '<tr id="cart_tablerow"><td></td><td>Total</td><td>'.$total.'</td></tr>';
                                echo '</table>';

                            }     
                        ?>
                         <tr> <td></td><td> <form method="post" action="<?php echo base_url();?>index.php/GearController/gear" align="center"> <input type="submit" name="continue" value="Continue Shopping""> </form> </td> <td> <form method="post" action="<?php echo base_url();?>index.php/GearController/placeyourorder" > <input type="submit" name="submit" value="Place Order" class="cart_input" > </form> </td> </tr>
                   </table>
               </div>

</div>
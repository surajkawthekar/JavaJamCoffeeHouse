
            
            
                    <div class="columnright" id="scrollmusic">
                    <header>
                        <h1>JavaJam Coffee House</h1>
                    </header>
                    <p id="cart_p" align="center">Shopping Cart</p>
                            <?php
                            echo '<table id ="cart_tab" align="center" border="0" cellpadding="10">';
                                echo '<tr id="cart_tablerow">';
                                echo '<td align="center"><b>Description</b></td>
                                      <td><b>Quantity</b></td>
                                      <td><b>Price</b></td>';
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
                                echo '<tr id="cart_tablerow"><td></td><td>Total</td><td>$'.$total.'</td>';
                                echo '</table>';
                                

                            ?>
                       
                <?php
                    echo '<div class="row mb-3">';

                        echo '<div class="">';
                    
                            
                            if(isset($_POST["submit"])){
                               if($this->form_validation->run() == TRUE){
                                    echo "<p> Your order is placed Successfully ! </p>";
                                }
                            }

                            echo form_open('GearController/checkValidationErrors');
                        
                            echo form_fieldset('Fill Details');
                           
                           
                           echo '<div class="row">';
                                echo '<div class="text-right">';
                                
                                echo form_label('Name:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_name = array('name'=>'myName', 'id'=>'myName', 'placeholder'=>'Please Enter Name');
                                echo form_input($data_name);
                                echo '<div class = "error">';
                                
                                        echo form_error('myName');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="text-right">';
                                
                                echo form_label('Email:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_email = array('name'=>'myEmail', 'id'=>'myEmail', 'placeholder'=>'xyz@abc.com');
                                echo form_input($data_email);
                                echo '<div class = "error">';
                                        echo form_error('myEmail');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="text-right">';
                                
                                echo form_label('Address:');
                                echo '</div>';
                                echo '<div class="col-x-12 col-md-5 col-lg-5">';
                                
                                $data_address = array('name'=>'myAddress', 'id'=>'myAddress', 'placeholder'=>'Enter Address');
                                echo form_input($data_address);
                                echo '<div class = "error">';
                                        echo form_error('myAddress');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="text-right">';
                                
                                echo form_label('City:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_city = array('name'=>'myCity', 'id'=>'myCity', 'placeholder'=>'Enter City');
                                echo form_input($data_city);
                                echo '<div class = "error">';
                                        echo form_error('myCity');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="text-right">';
                            
                                echo form_label('State:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_state = array('name'=>'myState', 'id'=>'myState', 'placeholder'=>'Enter State');
                                echo form_input($data_state);
                                echo '<div class = "error">';
                                        echo form_error('myState');
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="text-right">';
                                
                                echo form_label('Zip:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_zip = array('name'=>'myZip', 'id'=>'myZip', 'placeholder'=>'Enter Zip');
                                echo form_input($data_zip);
                                echo '<div class = "error">';
                                        echo form_error('myZip');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="text-right">';
                                
                                echo form_label('Credit Card:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_credit = array('name'=>'myCredit', 'id'=>'myCredit', 'placeholder'=>'Enter Credit Card Number');
                                echo form_input($data_credit);
                                echo '<div class = "error">';
                                        echo form_error('myCredit');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="text-right">';
                        
                                echo form_label('Month:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_month = array('name'=>'myMonth', 'id'=>'myMonth', 'placeholder'=>'Enter the Month');
                                echo form_input($data_month);
                                echo '<div class = "error">';
                                        echo form_error('myMonth');
                                echo '</div>';                                
                                echo '</div>';
                                echo '<div class="text-right">';
                            
                                echo form_label('Year:');
                                echo '</div>';
                                echo '<div class="">';
                                
                                $data_year = array('name'=>'myYear', 'id'=>'myYear', 'placeholder'=>'Enter the Year');
                                echo form_input($data_year);
                                echo '<div class = "error">';
                                        echo form_error('myYear');
                                echo '</div>';
                                echo '</div>';
                            echo '</div>';

                           
                            echo '<input id = "orderButton" type="submit" name="submit" value="Order Now">';
                    
                           echo form_fieldset_close();
                    
                           echo form_close();

                           
                           ?>
                        </div>
                    </div>
                    
                </section>
            </article>
    </section>
    
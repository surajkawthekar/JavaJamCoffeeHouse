<div class="columnright">
					<header>
						<h1>JavaJam Coffee House</h1>
					</header>

					<div id="space">
						
					</div>
					<h2 id="headerfont">Jobs at JavaJam</h2>
					<p id="paragraph2"><b>Want to work at JavaJam?Fill out the form below to start your application.Required fields are marked with an asterisk(*).</b></p>
					<?php
							if($this->uri->segment(2)=="inserted")
							{
								echo "Data Insert Success!";
							}
						?>
						
					<?php

							 
                            //$attributes = array('id' => 'jobs_form');
                            echo form_open('JobsController/form_validation');

                            echo '<table cellpadding="5" id="signup">';
                            echo '<tr>';
                             echo "<td>" .form_label('Name:') . "</td>";
                              
                                $data_name = array('name'=>'username', 'placeholder'=>'Please Enter Name');
                                echo "<td>" .form_input($data_name). "</td>";
                                echo '<div class = "error">';
                                echo form_error('username');
                                echo "</div>";
                            echo "</tr>";

                            echo "<tr>";
                                echo "<td>" .form_label('Email:'). "</td>";
                               
                                $data_email = array('name'=>'email', 'placeholder'=>'xyz@abc.com');
                                echo "<td>".form_input($data_email)."</td>";
                               echo '<div class = "error">';
                                echo form_error('email');
                                echo "</div>";
                           		echo "</tr>";
                           
                            echo "<tr>";
                                echo "<td>" .form_label('Experience:'). "</td>";
                               
                                $data_exp = array('name'=>'exp', 'placeholder'=>'Please enter experience');
                                echo "<td>".form_input($data_exp)."</td>";
                                echo '<div class = "error">';
                                echo form_error('exp');
                                echo "</div>";
                            
                            echo "</tr>";

                            echo "<tr>";
								echo '<td><input type="submit" name="submit" value="Apply Now"></td>';
							echo "</tr> </table>";
							 echo form_close();
					?>
					
		</div>
		</div>
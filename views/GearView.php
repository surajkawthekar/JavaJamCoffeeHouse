


					<div class="columnright" id="scrollmusic">
					<header>
						<h1>JavaJam Coffee House</h1>
					</header>
					<img id="heroguitar" src="<?php echo base_url();?>.\images\gear.jpeg">
					<h2 id="headerfont">JavaJam Gear</h2>
					<p id="paragraph1">JavaJam gear not only looks good, it's good to your wallet, too.</p>
					<p id="paragraph1"> Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug!</p>
				
			<?php
			$pro1=0;
				foreach($products as $rec)
					{
										echo '<form method="POST" action="cart">';
                                        echo "<table class='tablefont'>";
                                        echo "<tr>";
                                        echo "<td id='table1' rowspan='2'><img id='gear_img' height='95px' width='100px' src=".$rec ->Product_Image_URL." ></td>";
                                      	echo "<td id='geartabletd' valign='top'> "  .$rec ->Name.' '.$rec ->Description. ' '.$rec ->Price."</td>";
                                        echo "</tr>";
                                        echo '<input type="hidden" name="desc'.$pro1.'" id="desc'.$pro1.'" value="'.$rec ->Name.'">';
                                        echo '<input type="hidden" name="cost'.$pro1.'" id="cost'.$pro1.'" value="'.$rec ->Price.'">';
                                         echo '<input type="hidden" name="proId'.$pro1.'" id="proId'.$pro1.'" value="'.$rec ->ProductId.'">';
                                        echo "<td id='geartabletd' valign='top' rowspan='2'><input type='submit' name = 'submit' value ='Add to Cart'></td>";
                                        echo "</table>";
                                        $pro1 = $pro1 + 1;
                                        //$_SESSION['dbRecords'] = $pro1;
                                        echo '</form>';
                                      
                                    
                                    }
			?>
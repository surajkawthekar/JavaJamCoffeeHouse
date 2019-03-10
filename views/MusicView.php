<div class="columnright" id="scrollmusic">
					<header>
						<h1>JavaJam Coffee House</h1>
					</header>
					<img id="heroguitar" src="<?php echo base_url();?>.\images\heroguitar.jpg">
					<h2 id="headerfont">Music at JavaJam</h2>
					<p id="paragraph1">The first Friday night each month at JavaJam is a special night. Join us from 8pm to 11pm for some music you won't want to miss!</p>
				<?php
				$month="";
					foreach($singers as $s)
					{			
								if($month== $s ->Month_Year){
								//echo '<p id="month1"><strong>'.$s ->Month_Year.'</strong></p>';
								echo '<table id="musictable" class="table2">';
								echo '<td id="table1">';
								echo '<img src="'.$s ->Musician_Image_URL.'" alt="melaniethumb" height="50px" width="50px"></td>';
								echo '<td valign="top">'.' ' .$s ->Name.' '.$s ->Description.'</td>';
								echo '</table>';
								$month=$s ->Month_Year;
							}
							else{
								echo '<p id="month1"><strong>'.$s ->Month_Year.'</strong></p>';
								echo '<table id="musictable" class="table2">';
								echo '<td id="table1">';
								echo '<img src="'.$s ->Musician_Image_URL.'" alt="melaniethumb" height="50px" width="50px"></td>';
								echo '<td valign="top">'.' ' .$s ->Name.' '.$s ->Description.'</td>';
								echo '</table>';
								$month=$s ->Month_Year;
							}

					}

				?>
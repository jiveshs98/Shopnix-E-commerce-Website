 <div class="block_content verticalmenu_block" id="_desktop_top_menu">
						<ul class="top-menu  container" id="top-menu" data-depth="0">
							<?php
							 	while($rec= mysqli_fetch_array($sql))
								{
									echo "<li class='category' >
						<a
							class='dropdown-item' href='' data-depth='0'>


														$rec[c_name]
						</a>

								</li>";
								}
							?>
						</ul>
</div>								

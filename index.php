<?php include_once("inc/header.php");?>
	<?php include_once 'inc/aside.php';?>
<!-- 	<table>
		<tr>
			<th>id</th>
		</tr>
		<?php 
			$select=mysqli_query($con,"SHOW TABLES");
			while ($row=mysqli_fetch_array($select)) 
			{
				?>
				<tr>
					<td><?= $row[0]?></td>
				</tr>
				<?php
			}
		?>
	</table> -->
	
				<!-- <table class="tb border w-100 shadow">
					<thead>
						<tr class="bb bg-light">
							<th>Id</th>
							<th>col</th>
							<th>col</th>
							<th>col</th>
							<th>col</th>
							<th>col</th>
							<th colspan="100">
								<span class="flex between">Actions<input type="checkbox" name=""></span></th>
							
						</tr>
					</thead>
					<tbody>
					
						<tr class="bb">
							<td>1</td>
							<td>data</td>
							<td>data</td>
							<td>data</td>
							<td>data</td>
							<td>data</td>
							<td align='right'>
								<a title="delete" href="#">&times;</a>
								<a title="edit" href="#">[_]</a>
								<a title="view" href="#">0_0</a>
								<a title="Export" href="#">&#8594;</a>
								<a title="check" href="#"><input type="checkbox" name=""></a>
								
							</td>
							
						</tr>














						<tr class="bb">
							<td>1</td>
							<td>data</td>
							<td>data</td>
							<td>data</td>
							<td>data</td>
							<td>data</td>
							<td align='right'>
								<a title="delete" href="#">&times;</a>
								<a title="edit" href="#">[_]</a>
								<a title="view" href="#">0_0</a>
								<a title="Export" href="#">&#8594;</a>
								<a title="check" href="#"><input type="checkbox" name=""></a>
								
							</td>
							
						</tr>
					</tbody>




					<tfoot>
						<tr>
							<td colspan="10000000" class="small">
								<div class="flex between items">
									<span>showing 10 resualt out of 1000</span>
								<div>
									<button class="btn bg-dark">&#8592;</button>
									<span>
										<button class="btn">1</button>
										<button class="btn">2</button>
										<button class="btn">3</button>
										<button class="btn bg-dark">4</button>
										<button class="btn">5</button>
									</span>
									<button class="btn bg-dark">&#8594;</button>
									
								</div>
								</div>
							</td>
						</tr>
					</tfoot>
				</table> -->
<?php include_once 'inc/footer.php';?>
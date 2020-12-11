<?php include('navigation.php') ?>
<p class="h2">Reports of Store</p>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Number of Types</h5>
		        <p class="card-text"><?php echo $no_of_types ?></p>
		      </div>
		   </div>
		</div>
		<div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Number of Items</h5>
		        <p class="card-text"><?php echo $no_of_items[0]->x; ?></p>
		      </div>
		   </div>
	  </div>
	</div>
	<div class="row">
		<div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Financial Value of the Store</h5>
		        <p class="card-text">Rs.<?php echo $f_value[0]->y; ?></p>
		      </div>
		   </div>
		</div>
	</div>
</div>
</body>
</html>
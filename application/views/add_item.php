<?php include('navigation.php') ?>
<p class="h2">Add Items</p>
	<div class="row">
        <div class="col-md-8 mx-auto">
            <div class="jumbotron mt-3">
                <h2 class="text-center">Add Item</h2>
                <form method="post">
                    <div class="form-group">
                        
                        <label for="name">Name</label>
                        <input type="text" class="form-control"  name="name" value="" required>
                        
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="" required>

                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" value="" required>
                    </div>
                    <input type="submit" value="Confirm" class="btn btn-primary" name="add">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php include('navigation.php') ?>
	<div class="row">
        <div class="col-md-8 mx-auto">
            <div class="jumbotron mt-3">
                <h2 class="text-center">Update Item</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="id">Item Code</label>
                        <input type="text" class="form-control" readonly="true" name="name" value="<?php echo $item_data[0]->item_id ?>" required>

                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $item_data[0]->name ?>" required>
                        
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="<?php echo $item_data[0]->quantity ?>" required>

                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $item_data[0]->price ?>" required>
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary" name="update">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
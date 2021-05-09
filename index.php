<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
		<h1 class="white-text center"> Inventory Management </h1>

		<a href="stores.php" class="white-text"> Stores to be managed </a> <br>

		<?php
			include "db_connect.php";
		?>
		<div class="leftbox">
			<h2 class="center">Simple Searches</h2>
			<form action="search_item_num.php">
				Please enter an item number to search for:<br>
				<input type="text" name="item_num">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_item_name.php">
				Please enter an item name to search for:<br>
				<input type="text" name="item_name">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_quantity.php" method="post">
				Please enter a specific quantity to search for:<br>

				<label for="qty">Choose % of quantity:</label>

				<select name="qty">
				<option value="nothing"></option>
				<option value="100">100%</option>
				<option value="75">75%</option>
				<option value="50">50%</option>
				<option value="25">25%</option>
				</select>

				<label for="compare">Choose:</label>
				<select name="compare">
				<option value="nothing"></option>
				<option value="equal">equal</option>
				<option value="less">less than</option>
				<option value="more">greater than</option>
				</select>
				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_item_price.php" method="post">
				Please enter a specific price to search for:
				<input type="text" name="price_input"><br>
				
				<label for="compare">Choose a comparison:</label>

				<select name="compare">
				<option value="nothing"></option>
				<option value="less">Less than</option>
				<option value="more">Greater than</option>
				</select>
				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_delivery.php">
				Please enter (Y,N) to search for if an item needs delivery or not:<br>
				<input type="text" name="delivery">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_demand.php">
				Please enter (Y,N) to search for if an item has good or bad demand:<br>
				<input type="text" name="demand">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_rating.php" method="post">
				Please enter a specific rating to search for:
				<input type="text" name="rating_input"><br>
				
				<label for="compare">Choose a comparison:</label>

				<select name="compare">
				<option value="nothing"></option>
				<option value="equal">Equal to</option>
				<option value="less">Less than</option>
				<option value="more">Greater than</option>
				</select>

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_item_type.php">
				Please enter an item type to search for:<br>
				<input type="text" name="item_type">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_store_num.php">
				Please enter a store number to search for:<br>
				<input type="text" name="store_num">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="search_order_num.php">
				Please enter an order number to search for:<br>
				<input type="text" name="order_num">

				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="rightbox">
			<h2 class="center"> Special Searches </h2>

			<form action="ss_inventory.php">                <!-- NEED TO GET DONE -->
				Inventory in store:<br>
				<input type="text" name="store_num">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="ss_order_num_items.php">                <!-- NEED TO GET DONE -->
				Items ordered for order num:<br>
				<input type="text" name="order_num">

				<input type="submit" value="Submit">
			</form><hr>

			<form action="ss_ratings.php" method="post">
				Please enter a store number:
				<input type="text" name="store"><br>
				
				<label for="compare">Choose (Y,N) to search for good or bad ratings:</label>

				<select name="compare">
				<option value="nothing"></option>
				<option value="Y">Y</option>
				<option value="N">N</option>
				</select>

				<input type="submit" value="Submit">
			</form><hr>

			<form action="ss_delivery.php" method="post">
				Please enter a store number:
				<input type="text" name="store"><br>
				
				<label for="compare">Choose (Y,N) to search for items that need delivery or don't:</label>

				<select name="compare">
				<option value="nothing"></option>
				<option value="Y">Y</option>
				<option value="N">N</option>
				</select>

				<input type="submit" value="Submit">
			</form><hr>

			<form action="ss_item_type_str.php" method="post">
				Please enter a store number:
				<input type="text" name="store"><br>
				
				<label for="type">Choose an item type to search for:</label>

				<select name="type">
				<option value="nothing"></option>
				<option value="Packaged Goods">Packaged Goods</option>
				<option value="Frozen Goods">Frozen Goods</option>
				<option value="Dairy">Dairy</option>
				<option value="Produce">Produce</option>
				<option value="Meat">Meat</option>
				<option value="Cleaning Supplies">Cleaning Supplies</option>
				<option value="Canned Goods">Canned Goods</option>
				<option value="Alcohol">Alcohol</option>
				</select>

				<input type="submit" value="Submit">
			</form>
		</div>
		
		<?php
			$mysqli->close();
		?>

	</body>
</html>
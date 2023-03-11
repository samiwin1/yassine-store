
                <?php
// Connect to database
$host = 'localhost';
$dbname = 'yassinedb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    die();
}



// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = $_POST['product_id'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  // Add the product to the cart
  $stmt = $pdo->prepare("INSERT INTO cart (product_id, quantity, price) VALUES (?, ?, ?)");
  $stmt->execute([$product_id, $quantity, $price]);
}


?>
<html>
    <body>
        
   
<?php
// Connect to database
$host = 'localhost';
$dbname = 'yassinedb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    die();
}


// Retrieve the contents of the cart
$stmt = $pdo->query("SELECT * FROM cart");
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display the contents of the cart in an HTML table -->



<!DOCTYPE html>
<html>
<head>
	<title>My Cart</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- additional CSS styles here -->
</head>
<body>
    
	<div class="container">
		<h1>My Cart</h1>
		<table class="table">
        
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($cart_items as $item): ?>
      <?php
        // Retrieve the product information for this item
        $product_stmt = $pdo->prepare("SELECT id_p,nom_p,quantite_p,price FROM products WHERE id_p = ?");
        $product_stmt->execute([$item['id_p']]);
        $product = $product_stmt->fetch(PDO::FETCH_ASSOC);

        // Calculate the total cost of this item
        $total = $item['quantite_p'] * $item['price'];
      ?>
      <tr>
      <td><?= $product['id_p'] ?></td>
        <td><?= $product['nom_p'] ?></td>
        <td><?= $item['quantite_p'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $total ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
		<!-- additional cart functionality here -->
	</div>
	<!-- additional JavaScript code here -->
</body>
</html>




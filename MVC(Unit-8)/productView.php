<!-- The view displays the data passed by the controller
It should only contain minimal PHP to display variables -->

<h1>products list</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <?php echo $product['name']; ?>
            <?php echo $product['price']; ?>
        </li>
    <?php endforeach; ?>
</ul>

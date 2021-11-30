<?php
$products = [
    [
        'id' => 1,
        'name' => 'sp a',
        'price' => 3000
    ],
    [
        'id' => 2,
        'name' => 'sp b',
        'price' => 2000
    ],
    [
        'id' => 3,
        'name' => 'sp c',
        'price' => 1500
    ]
];

?>

<table border="1">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($products as $key => $value): ?>
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['price']?></td>
                <td>
                    <a href="add-to-cart.php?id=<?= $value['id']?>">Add</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>
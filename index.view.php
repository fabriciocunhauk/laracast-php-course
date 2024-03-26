<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => '1968',
            'purchaseUrl' => 'http://example.com',
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => '2021',
            'purchaseUrl' => 'http://example.com',
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => '2011',
            'purchaseUrl' => 'http://example.com',
        ],
    ];

    function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredBooks = array_filter($books, function ($book) {
        return $book['author'] === 'Andy Weir';
    });

    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?>
            </a>
        </li>
        <?php endforeach;  ?>
    </ul>

    <!-- <form action="your_script.php" method="post">
        <input type="hidden" name="action" value="myFunction">
        <button type="submit">Click me</button>
    </form> -->

    <!-- <button type="button" onclick="filterByAuthor()">Click</button> -->

</body>

</html>
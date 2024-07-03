<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHPForBeginners</title>
</head>

<body>
    <h1>Recomended Books</h1>

    <?php
    $books = [
        [
            'title' => 'Do Androids Dream of Electric Sheap',
            'releaseYear' => 1968,
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'The Langoliers',
            'releaseYear' => 1990,
            'author' => 'Stephen King',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Project Hail Mary',
            'releaseYear' => 2021,
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'The Martian',
            'releaseYear' => 2011,
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ],
    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Stephen King') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['title']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
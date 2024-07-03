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
    $movies = [
        [
            'title' => 'Star Wars',
            'releaseYear' => 1977,
            'director' => 'George Lucas',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Rogue One: A Star Wars Story',
            'releaseYear' => 2016,
            'director' => 'Stephen King',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'releaseYear' => 2001,
            'director' => 'Peter Jackson',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'The Godfather',
            'releaseYear' => 1972,
            'director' => 'Francis Ford Coppola',
            'purchaseUrl' => 'http://example.com'
        ],
    ];

    function filterByRecent($movies)
    {
        $filteredMovies = [];

        foreach ($movies as $movie) {
            if ($movie['releaseYear'] >= 2000) {
                $filteredMovies[] = $movie;
            }
        }

        return $filteredMovies;
    }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['title'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
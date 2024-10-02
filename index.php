<!DOCTYPE html>
<html lang="es">
    <head>
       <meta charset="UTF-8">
       <title>Demo ASIX</title>
    </head>
    <body>
        <h1>
            <?php
                echo "Hello World!<br>";
                $nom = "Joan ";
                echo $nom . "World!<br>";
                $x = 5;
                $y = 2;
                echo "Resultat: " . $x + $y . "<br>";

//              Array
//                $books1 = [
//                    "Dune",
//                    "The Hobbit",
//                    "The Lord Of The Rings: The fellowship of the ring",
//                    "Harry Potter: The philosopher's Stone",
//                    "A Song of Ice and Fire: A Game of Thrones",
//                    "Foundation",
//                    "Do Androids Dreams of Electric Sheep?"
//                ];
//            echo $books1[1];
//            var_dump($books1);

                $books = [
                        [
                            "title" => "Dune",
                            "author" => "Frank Herbert",
                            "releaseYear" => "1965"
                        ],
                        [
                            "title" => "The Hobbit",
                            "author" => "J. R. R. Tolkien",
                            "releaseYear" => "1937"
                        ],
                        [
                            "title" => "The Lord Of The Rings: The fellowship of the ring",
                            "author" => "J. R. R. Tolkien",
                            "releaseYear" => "1954"
                        ],
                        [
                            "title" => "Harry Potter: The philosopher's Stone",
                            "author" => "J. K. Rowling",
                            "releaseYear" => "1997"
                        ],
                        [
                            "title" => "A Song of Ice and Fire: A Game of Thrones",
                            "author" => "George R. R. Martin",
                            "releaseYear" => "1996"
                        ],
                        [
                            "title" => "Foundation",
                            "author" => "Issac ",
                            "releaseYear" => "1951"
                        ],
                        [
                            "title" => "Do Androids Dreams of Electric Sheep?",
                            "author" => "Philip K. Dick",
                            "releaseYear" => "1968"
                        ],
                ]

            ?>
        </h1>
<!--        <p>Llista de bools1:</p>-->
<!--        <ul>-->
<!--            --><?php //foreach ($books as $book) :?>
<!--                <li>--><?php //= $book ?><!--</li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->
        <p>Llista de bools1:</p>
        <ul>
            <?php foreach ($books as $book) :?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
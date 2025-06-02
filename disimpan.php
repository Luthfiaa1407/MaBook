<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Favorit Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom right, #f8cdd8, #b4b7df);
        }
    </style>
</head>

<body class="min-h-screen">
    <header class="bg-blue-600 text-white p-6">
        <h1 class="text-3xl font-bold">Buku Favorit Saya</h1>
        <p class="mt-2">Koleksi buku-buku yang paling saya sukai</p>
    </header>

    <main class="container mx-auto my-8">
        <section class="bg-white rounded-lg shadow-md p-6">
            <ul class="space-y-4">
                <?php
                $books = [
                    [
                        "title" => "Laskar Pelangi",
                        "author" => "Andrea Hirata",
                        "desc" => "Sebuah kisah inspiratif tentang sekelompok anak di Belitung yang berjuang untuk mendapatkan pendidikan.",
                        "image" => "https://placehold.co/50x70"
                    ],
                    [
                        "title" => "Bumi Manusia",
                        "author" => "Pramoedya Ananta Toer",
                        "desc" => "Novel yang menceritakan kehidupan masyarakat Indonesia pada masa penjajahan Belanda.",
                        "image" => "https://placehold.co/50x70"
                    ],
                    [
                        "title" => "Sapiens: A Brief History of Humankind",
                        "author" => "Yuval Noah Harari",
                        "desc" => "Sebuah analisis mendalam tentang sejarah manusia dari zaman prasejarah hingga modern.",
                        "image" => "https://placehold.co/50x70"
                    ],
                    [
                        "title" => "1984",
                        "author" => "George Orwell",
                        "desc" => "Novel distopia yang menggambarkan masyarakat totaliter yang dikendalikan oleh pengawasan dan propaganda.",
                        "image" => "https://placehold.co/50x70"
                    ],
                    [
                        "title" => "The Alchemist",
                        "author" => "Paulo Coelho",
                        "desc" => "Sebuah kisah tentang pencarian makna hidup dan mengikuti impian kita.",
                        "image" => "https://placehold.co/50x70"
                    ],
                    [
                        "title" => "Harry Potter and the Sorcerer's Stone",
                        "author" => "J.K. Rowling",
                        "desc" => "Kisah petualangan seorang penyihir muda di sekolah sihir Hogwarts.",
                        "image" => "https://placehold.co/50x70"
                    ]
                ];

                foreach ($books as $index => $book) {
                    echo '<li class="' . ($index < count($books) - 1 ? 'border-b pb-4' : '') . ' flex items-start">';
                    echo '<img src="' . $book["image"] . '" alt="Cover buku ' . htmlspecialchars($book["title"]) . '" class="mr-4">';
                    echo '<div>';
                    echo '<h2 class="text-xl font-semibold">' . htmlspecialchars($book["title"]) . '</h2>';
                    echo '<p class="text-gray-600">Penulis: ' . htmlspecialchars($book["author"]) . '</p>';
                    echo '<p class="mt-2">' . htmlspecialchars($book["desc"]) . '</p>';
                    echo '</div></li>';
                }
                ?>
            </ul>
        </section>
    </main>

    <footer class="bg-blue-600 text-white text-center p-4">
        <p>&copy; 2023 Buku Favorit Saya. Semua hak dilindungi.</p>
    </footer>
</body>

</html>

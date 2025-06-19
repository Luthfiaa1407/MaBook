<?php require_once(_DIR_ . '/config/config.php') ?>
<?php require_once(_DIR_ . '/functions/helper.php') ?>
<?php require_once(_DIR_ . '/functions/books.php') ?>
<?php require_once(_DIR_ . '/functions/authors.php') ?>
<?php require_once(_DIR_ . '/functions/categories.php') ?>
<?php require_once(_DIR_ . '/functions/publishers.php') ?>
<?php
// ambil query parameter dari url
$search = $_GET['search'] ?? null;
$categoryId = $_GET['category_id'] ?? null;
$authorId = $_GET['author_id'] ?? null;
$publisherId = $_GET['publisher_id'] ?? null;
$year = $_GET['year'] ?? null;

// apply filternya
$filters = [];
if (isset($categoryId)) $filters['category_id'] = $categoryId;
if (isset($authorId)) $filters['author_id'] = $authorId;
if (isset($publisherId)) $filters['publisher_id'] = $publisherId;
if (isset($year)) $filters['year'] = $year;
if (isset($search)) $filters['search'] = $search;

$books = listBooks($filters, ['limit' => 999]);
$authors = listAuthors([], ['limit' => 999]);
$categories = listCategories([], ['limit' => 999]);
$publishers = listPublishers([], ['limit' => 999]);
$years = listBookYears();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="src/output.css">
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B]">
    <?php require_once(_DIR_ . '/include/header.php') ?>

    <div class="w-11/12 max-w-[1200px] mx-auto mt-12">

        <div>
            <div class="font-unifraktur text-mabook-light text-4xl font-bold">Koleksi Maboo<span class="font-crimson">k</span></div>
            <div class="h-[2px] w-48 bg-mabook-midtone mt-4"></div>
            <div class="w-full flex justify-between items-center mt-2 gap-3">
                <select id="filter-category" class="mabook-form-control">
                    <option value="">- Pilih kategori -</option>
                    <?php foreach ($categories as $category) : ?>
                        <option <?= $categoryId == $category['id'] ? 'selected' : '' ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <select class="mabook-form-control" id="filter-author">
                    <option value="">- Pilih penulis -</option>
                    <?php foreach ($authors as $author): ?>
                        <option value="<?= $author['id'] ?>" <?php if ($author['id'] == $authorId): ?>selected<?php endif; ?>><?= $author['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <select class="mabook-form-control" id="filter-publisher">
                    <option value="">- Pilih penerbit -</option>
                    <?php foreach ($publishers as $publisher): ?>
                        <option value="<?= $publisher['id'] ?>" <?php if ($publisher['id'] == $publisherId): ?>selected<?php endif; ?>><?= $publisher['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <select class="mabook-form-control" id="filter-year">
                    <option value="">- Pilih tahun -</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                </select>
            </div>
            <div class="grid m-4 grid-cols-4 gap-8 mt-8">
                <?php foreach ($books as $book) : ?>
                    <a href="#?book_id=<?= $book['id'] ?>" class="group">
                        <div class="group-hover:-translate-y-1 duration-200 text-mabook-light h-full flex flex-col items-start justify-start p-4 border border-mabook-midtone/25 gap-5 bg-mabook-primary relative rounded-xl overflow-hidden font-crimson">
                            <img src="<?= url($book['cover']) ?>" class="w-full">
                            <div class="flex flex-col gap-3">
                                <h2 class="text-3xl"><?= $book['title'] ?></h2>
                                <div>
                                    <div>By: <span><?= $book['author']['name'] ?></span></div>
                                    <div>Penerbit: <span><?= $book['publisher']['name'] ?>, <?= $book['year'] ?></span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
        </div> <!-- end value proposition -->

    </div> <!-- end container -->

    <?php require_once(_DIR_ . '/include/footer.php') ?>
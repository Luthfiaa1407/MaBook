<?php require_once(__DIR__ . '/../config/config.php') ?>
<?php require_once(__DIR__ . '/../functions/helper.php') ?>
<?php require_once(__DIR__ . '/../functions/authors.php') ?>

<?php
$filters = [];
$page = $_GET['page'] ?? 1;
$limit = $_GET['limit'] ?? 10;
$authors = listAuthors($filters, ['page' => $page, 'limit' => $limit]);
$countAuthors = countAuthors($filters);
$totalPage = ceil($countAuthors / $limit);

// handle delete via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // eksekusi backend delete author
    deleteAuthor($id);
    header('Location: authors.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mabook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/mabook/src/output.css">
</head>

<body class="bg-[url('https://www.transparenttextures.com/patterns/black-paper.png')] bg-[#1A120B]">
    <?php require_once(__DIR__ . '/../include/header.php') ?>

    <div class="w-11/12 max-w-[1200px] mx-auto mt-12 flex items-start gap-4 relative">
        <?php require_once(__DIR__ . '/../include/admin-sidebar.php') ?>

        <div class="w-full px-3">
            <div>
                <div class="font-crimson text-mabook-light flex justify-between items-center">
                    <div class="text-3xl">Data Penulis</div>
                    <a href="author-create.php" class="bg-mabook-midtone text-white/80 p-2 rounded-xl duration-200 hover:-translate-y-0.5 active:translate-y-1">
                        <div class="flex gap-2 items-center font-semibold">
                            <i class="fas fa-plus"></i>
                            Tambah penulis
                        </div>
                    </a>
                </div>
                <div class="bg-mabook-primary w-full p-3 mt-3">
                    <table class="border-collapse border border-mabook-light/40 table-auto w-full font-crimson text-mabook-light">
                        <thead>
                            <tr>
                                <th class="p-2 border border-mabook-light/50">#</th>
                                <th class="p-2 border border-mabook-light/50">Nama</th>
                                <th class="p-2 border border-mabook-light/50">Website</th>
                                <th class="p-2 border border-mabook-light/50">Deskripsi</th>
                                <th class="p-2 border border-mabook-light/50"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($authors as $index => $author): ?>
                                <tr>
                                    <td class="p-2 border border-mabook-light/50"><?= (($page - 1) * $limit) + $index + 1 ?></td>
                                    <td class="p-2 border border-mabook-light/50"><?= $author['name'] ?></td>
                                    <td class="p-2 border border-mabook-light/50"><?= $author['website'] ?></td>
                                    <td class="p-2 border border-mabook-light/50"><?= $author['description'] ?></td>
                                    <td class="p-2 border border-mabook-light/50">
                                        <div class="flex gap-2">
                                            <a href="author-update.php?id=<?= $author['id'] ?>"><i class="fas fa-edit"></i></a>
                                            <form action="#" method="POST" onsubmit="return confirm('Anda yakin?')">
                                                <input type="hidden" name="id" value="<?= $author['id'] ?>">
                                                <button type="submit" class="cursor-pointer" onclick=""><i class="fas fa-trash text-red-400"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="flex gap-3 justify-center mt-4">
                        <button onclick="window.location='authors.php?page=<?= $page - 1 ?>'" <?= $page <= 1 ? 'disabled' : '' ?> class="mabook-pagination-item disabled:!border-mabook-light/30  disabled:!text-mabook-light/30 cursor-pointer"><i class="fas fa-chevron-left"></i></button>
                        <?php for ($i = 0; $i < $totalPage; $i++): ?>
                            <a href="authors.php?page=<?= $i + 1 ?>" class="mabook-pagination-item <?= $page == $i + 1 ? '!bg-mabook-light !text-mabook-primary' : '' ?>"><?= $i + 1 ?></a>
                        <?php endfor; ?>
                        <button onclick="window.location='authors.php?page=<?= $page + 1 ?>'" <?= $page >= $totalPage ? 'disabled' : '' ?> class="mabook-pagination-item disabled:!border-mabook-light/30  disabled:!text-mabook-light/30 cursor-pointer"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div><!-- end admin content -->


    </div> <!-- end container -->

    <?php require_once(__DIR__ . '/../include/footer.php') ?>
</body>

</html>
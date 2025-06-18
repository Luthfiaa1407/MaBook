<?php require_once(__DIR__ . '/../config/config.php') ?>
<?php require_once(__DIR__ . '/../functions/helper.php') ?>
<?php require_once(__DIR__ . '/../functions/authors.php') ?>

<?php
$id = $_GET['id'];
if (empty($id)) die('Halaman tidak valid, <a href="authors.php"><< Kembali</a>');

$author = getAuthor($id);

// handler buat submit 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $website = $_POST['website'];
    $description = $_POST['description'];
    $photo = $_FILES['photo'] ?? null;

    // validasi
    if (empty($name)) $errors['name'] = "Nama tidak boleh kosong";
    if (empty($website)) $errors['website'] = "Website tidak boleh kosong";
    if (empty($description)) $errors['description'] = "Deskripsi tidak boleh kosong";
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: author-edit.php?id=' . $id);
        exit;
    }

    // eksekusi backend update author
    if (editAuthor($id, $name, $website, $description, $photo)) {
        $_SESSION['success'] = "Penulis berhasil diperbarui";
        header('Location: authors.php');
    } else {
        $_SESSION['error'] = "Penulis tidak dapat diperbarui";
        header('Location: author-edit.php?id=' . $id);
    }
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
                    <div class="text-3xl">Edit Penulis</div>
                    <a href="authors.php" class="bg-mabook-midtone text-white/80 py-2 px-4 rounded-xl duration-200 hover:-translate-y-0.5 active:translate-y-1">
                        <div class="flex gap-2 items-center font-semibold">
                            <i class="fas fa-chevron-left"></i>
                            Kembali
                        </div>
                    </a>
                </div>
                <div class="flex gap-3 items-start mt-3">
                    <div class="bg-mabook-primary w-full p-5 lg:w-8/12">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $author['id'] ?>">
                            <div class="mb-3">
                                <label for="name" class="mabook-label">Nama</label>
                                <input type="text" id="name" name="name" value="<?= $old['name'] ?? $author['name'] ?>" class="mabook-form-control" placeholder="Tuliskan nama penulis...">
                                <?php if (isset($errors['name'])) : ?>
                                    <span class="italic text-red-400 text-sm"><?= $errors['name'] ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="website" class="mabook-label">Website</label>
                                <input type="text" id="website" name="website" value="<?= $old['website'] ?? $author['website'] ?>" class="mabook-form-control" placeholder="Tuliskan alamat website penulis...">
                                <?php if (isset($errors['website'])) : ?>
                                    <span class="italic text-red-400 text-sm"><?= $errors['website'] ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="mabook-label">Deskripsi</label>
                                <textarea name="description" id="description" placeholder="Tuliskan deskripsi tentang penulis..." class="mabook-form-control"><?= $old['description'] ?? $author['description'] ?></textarea>
                                <?php if (isset($errors['description'])) : ?>
                                    <span class="italic text-red-400 text-sm"><?= $errors['description'] ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="mabook-label">Foto Penulis</label>
                                <input type="file" accept="image/*" name="photo" id="photo" class="mabook-form-control" />
                                <?php if (isset($errors['photo'])) : ?>
                                    <span class="italic text-red-400 text-sm"><?= $errors['photo'] ?></span>
                                <?php endif; ?>
                            </div>
                            <button class="mabook-btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                    <div class="w-full lg:w-4/12 bg-mabook-primary p-4 sticky top-8">
                        <label class="mabook-label">Foto Penulis</label>
                        <img src="<?= !empty($author['photo']) ? url($author['photo']) : url('images/default-author.jpg') ?>" alt="Foto Penulis" class="w-full h-auto mt-2" id="photo-preview">
                    </div>
                </div>
            </div>
        </div><!-- end admin content -->
    </div> <!-- end container -->

    <?php require_once(__DIR__ . '/../include/footer.php') ?>

    <script>
        // Preview image sebelum upload
        document.getElementById('photo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photo-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
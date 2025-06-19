<?php
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../functions/helper.php');


// Ambil data kategori
$query = "SELECT * FROM categories";
$result = mysqli_query($conn, $query);
$kategoriList = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mabook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../src/output.css">

</head>

<body class="bg-[#1a120b] text-mabook-light font-crimson min-h-screen">
  <?php require_once(__DIR__ . '/../include/header.php') ?>

  <main class="bg-[#1a120b] text-mabook-light font-crimson py-12 px-6 min-h-screen">
    <section class="max-w-[1200px] mx-auto">
      <h1 class="text-4xl font-unifraktur text-mabook-light mb-3 text-center">Kategori Buku</h1>
      <p class="text-mabook-light/70 text-lg mb-8 text-center italic">
        Temukan genre literatur yang menggugah pikiran dan memperluas wawasan Anda.
      </p>

<div class="category-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 1200px; margin: 0 auto; padding: 20px;">

<?php foreach ($kategoriList as $kategori) : ?>
    <div class="category-card bg-mabook-dark rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
        <!-- Gambar -->
<img src="../images/<?= htmlspecialchars($kategori['gambar']) ?>" 
alt="<?= htmlspecialchars($kategori['name']) ?>" class="category-img" />


        <!-- Konten -->
        <div class="category-content p-4">
            <h3 class="category-title text-xl font-bold text-mabook-light mb-1"><?= htmlspecialchars($kategori['name']) ?></h3>
            <p class="category-desc text-sm text-mabook-midtone mb-3"><?= htmlspecialchars($kategori['description']) ?></p>
            <a href="kategori_detail.php?id=<?= $kategori['id'] ?>" class="category-btn inline-block px-4 py-2 bg-mabook-midtone text-mabook-dark rounded hover:bg-mabook-light transition">
                Lihat Buku
            </a>
        </div>
    </div>
<?php endforeach; ?>

        </div>
      </div>
    </section>
  </main>

  <?php require_once(__DIR__ . '/../include/footer.php') ?>
</body>

</html>
<?php require_once(__DIR__ . '/../config/db.php') ?>
<?php require_once(__DIR__ . '/../config/config.php') ?>
<?php require_once(__DIR__ . '/../functions/helper.php') ?>

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
    <h1 class="text-4xl font-unifraktur text-mabook-light mb-3 text-center"> Kategori Buku</h1>
    <p class="text-mabook-light/70 text-lg mb-8 text-center italic">
      Temukan genre literatur yang menggugah pikiran dan memperluas wawasan Anda.
    </p>

    <div class="scroll-wrapper overflow-x-auto pb-4">
      <div class="category-scroll flex gap-6 px-4">
        <!-- Card 1 -->
        <div class="category-card">
          <img src="../images/1984.jpg" alt="Fiksi" class="category-img" />
          <div class="category-content">
            <h3 class="category-title">Fiksi</h3>
            <p class="category-desc">Cerita imajinatif dan dunia spekulatif yang penuh makna.</p>
            <a href="kategori_detail.php?id=1" class="category-btn">Lihat Buku</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="category-card">
          <img src="../images/laskar-pelangi.jpg" alt="Non Fiksi" class="category-img" />
          <div class="category-content">
            <h3 class="category-title">Non Fiksi</h3>
            <p class="category-desc">Biografi, sejarah, dan refleksi kehidupan nyata.</p>
            <a href="kategori_detail.php?id=3" class="category-btn">Lihat Buku</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

    <?php require_once(__DIR__ . '/../include/footer.php') ?>
</body>
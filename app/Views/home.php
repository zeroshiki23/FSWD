<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>

<h1 class="text-center mt-4">Welcome to MyApp</h1>
<p class="text-center mb-5">This is the homepage. Enjoy learning CodeIgniter 4!</p>

<h3 class="text-center mb-4">Profil Team</h3>

<div class="container">
  <div class="row justify-content-center">
    <?php foreach ($profiles as $p): ?>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <img src="<?= base_url('uploads/photos/' . $p['photo']) ?>" class="card-img-top" alt="<?= esc($p['name']) ?>" style="height: 300px; object-fit: cover;">
          <div class="card-body text-center">
            <h5 class="card-title"><?= esc($p['name']) ?></h5>
            <p class="mb-1"><i class="fas fa-envelope"></i> <?= esc($p['email']) ?></p>
            <p class="mb-1"><i class="fas fa-phone"></i> <?= esc($p['phone']) ?></p>
            <p class="mb-1"><i class="fas fa-map-marker-alt"></i> <?= esc($p['address']) ?></p>
            <p class="mb-1"><i class="fas fa-graduation-cap"></i> <?= esc($p['study_program']) ?></p>
            <div class="mt-2">
              <a href="<?= esc($p['instagram']) ?>" target="_blank"><i class="fab fa-instagram"></i> Instagram</a><br>
              <a href="<?= esc($p['youtube']) ?>" target="_blank"><i class="fab fa-youtube"></i> YouTube</a><br>
              <a href="<?= esc($p['tiktok']) ?>" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?= $this->endSection() ?>

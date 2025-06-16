<?= $this->extend('layouts/layout') ?>
<?= $this->section('content') ?>
<h1 class="mb-3 text-center">Welcome to MyApp</h1>
<p class="text-center">This is the homepage. Enjoy learning CodeIgniter 4!</p>
<hr>

<h2 class="mt-4 text-center">Profil Team</h2>
<?php if (!empty($profiles)) : ?>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($profiles as $index => $profile): ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if ($profile['photo']) : ?>
                            <img src="<?= base_url('uploads/photos/' . $profile['photo']) ?>" class="card-img-top" alt="<?= esc($profile['name']) ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= esc($profile['name']) ?></h5>
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <th><i class="fas fa-envelope"></i></th>
                                    <td><?= esc($profile['email']) ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-phone-alt"></i></th>
                                    <td><?= esc($profile['phone']) ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-map-marker-alt"></i></th>
                                    <td><?= esc($profile['address']) ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-graduation-cap"></i></th>
                                    <td><?= esc($profile['study_program']) ?></td>
                                </tr>
                                <?php if (!empty($profile['instagram'])) : ?>
                                    <tr>
                                        <th><i class="fab fa-instagram"></i></th>
                                        <td><a href="<?= esc($profile['instagram']) ?>" target="_blank">Instagram</a></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (!empty($profile['youtube'])) : ?>
                                    <tr>
                                        <th><i class="fab fa-youtube"></i></th>
                                        <td><a href="<?= esc($profile['youtube']) ?>" target="_blank">YouTube</a></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if (!empty($profile['tiktok'])) : ?>
                                    <tr>
                                        <th><i class="fab fa-tiktok"></i></th>
                                        <td><a href="<?= esc($profile['tiktok']) ?>" target="_blank">TikTok</a></td>
                                    </tr>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php if (($index + 1) % 4 == 0 && ($index + 1) < count($profiles)): ?>
                    </div><div class="row justify-content-center mt-4">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php else : ?>
    <p class="text-center">Belum ada data profil yang ditambahkan.</p>
<?php endif; ?>
<?= $this->endSection() ?>

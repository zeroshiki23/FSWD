<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<!-- Content Header -->
<div class="content-header">
  <div class="container-fluid">
    <h1 class="m-0">Dashboard</h1>
  </div>
</div>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <!-- Total Profil -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $totalProfile ?></h3>
            <p>Total Profil</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="<?= base_url('profile') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Bounce Rate (static example) -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>
            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="fas fa-chart-bar"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- User Registrations (static example) -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>
            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-plus"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Unique Visitors (static example) -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="fas fa-chart-pie"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<?= $this->endSection() ?>

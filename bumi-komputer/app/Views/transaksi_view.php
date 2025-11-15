<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaksi - BUMI KOMPUTER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


  <style>
    body {
      background: #f5f6fa;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background: #212529;
      padding-top: 70px;
      z-index: 1000;
    }

    .sidebar a {
      padding: 12px 20px;
      display: flex;
      align-items: center;
      color: #adb5bd;
      text-decoration: none;
      font-size: 15px;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background: #0d6efd;
      color: white;
    }

    .sidebar i {
      margin-right: 12px;
      font-size: 18px;
    }

    /* Navbar */
    .top-navbar {
      position: fixed;
      top: 0;
      left: 250px;
      width: calc(100% - 250px);
      z-index: 2000;
      background: #0d6efd;
    }

    .navbar-brand {
      font-weight: 600;
      color: white !important;
    }

    /* Content */
    .content {
      margin-left: 250px;
      padding: 100px 30px 30px;
    }

    .card-dashboard {
      border: none;
      border-radius: 12px;
      box-shadow: rgba(0, 0, 0, 0.1) 0 3px 8px;
      transition: 0.2s ease-in-out;
    }

    .card-dashboard:hover {
      transform: translateY(-5px);
    }

    .logout-btn {
      position: absolute;
      bottom: 20px;
      width: 100%;
    }

    .logout-btn:hover {
      background: #dc3545 !important;
      color: white !important;
    }

    .logout-btn:hover i {
      color: white !important;
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="index.php?action=index">
      <i class="bi bi-house-door"></i> Dashboard
    </a>
    <a href="index.php?action=produk">
      <i class="bi bi-box-seam"></i> Produk
    </a>
    <a href="index.php?action=pelanggan">
      <i class="bi bi-people"></i> Pelanggan
    </a>
    <a href="index.php?action=transaksi" class="active">
      <i class="bi bi-receipt"></i> Transaksi
    </a>
    <a href="index.php?action=login&subaction=logout" class="logout-btn">
      <i class="bi bi-box-arrow-right"></i> Logout
    </a>
  </div>

  <!-- Navbar -->
  <nav class="navbar top-navbar navbar-dark px-3">
    <span class="navbar-brand">BUMI KOMPUTER</span>
  </nav>
  <div class="content">
    <h3 class="fw-bold mb-4">Daftar Transaksi</h3>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
      <a href="index.php?action=transaksi&subaction=tambah" class="btn btn-primary">+ Tambah Transaksi</a>
    </div>

    <table class="table table-hover align-middle">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Nama Pelanggan</th>
          <th>Nama Barang</th>
          <th>Jumlah</th>
          <th>Total Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php if (!empty($data)): ?>
          <?php $nomor = 1; ?>
          <?php foreach ($data as $transaksi): ?>
            <tr>
              <td><?= $nomor++; ?></td>
              <td><?= $transaksi['nama_pelanggan']; ?></td>
              <td><?= $transaksi['nama_barang']; ?></td>
              <td><?= $transaksi['jumlah']; ?></td>
              <td><?= $transaksi['total_harga']; ?></td>
              <td>
                <a href="index.php?action=detail_transaksi&id=<?= $transaksi['id_transaksi']; ?>"
                  class="btn btn-warning btn-sm">Detail Transaksi</a>

                <a href="index.php?action=transaksi&subaction=hapus&id=<?= $transaksi['id_transaksi']; ?>"
                  class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center">Belum ada data transaksi.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
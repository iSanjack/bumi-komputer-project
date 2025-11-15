<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pelanggan - BUMI KOMPUTER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <a href="index.php?action=pelanggan" class="active">
      <i class="bi bi-people"></i> Pelanggan
    </a>
    <a href="index.php?action=transaksi">
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
  <!-- CONTENT -->
  <div class="content">
    <h3 class="fw-bold mb-4">Daftar Pelanggan</h3>
    <div class="card-custom">
      <!-- Header tabel -->
      <div class="d-flex justify-content-between mb-3">
        <a href="index.php?action=pelanggan&subaction=tambah" class="btn btn-primary">
          + Tambah Pelanggan
        </a>
      </div>

      <!-- TABEL -->
      <table class="table table-hover align-middle">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th width="180">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($data as $row): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['alamat']; ?></td>
              <td>
                <a href="index.php?action=pelanggan&subaction=edit&id=<?= $row['id_pelanggan'] ?>"
                  class="btn btn-warning btn-sm">Edit</a>

                <a href="index.php?action=pelanggan&subaction=hapus&id=<?= $row['id_pelanggan'] ?>"
                  class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
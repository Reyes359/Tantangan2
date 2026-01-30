<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="navbar-brand" href="<?php echo e(route('jurusan.index')); ?>">Daftar Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('jurusan.create')); ?>">Tambah Jurusan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  <?php /**PATH C:\Users\u\Documents\Materi_Laravel\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
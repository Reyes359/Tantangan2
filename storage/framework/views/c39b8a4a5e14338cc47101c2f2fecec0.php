
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Jurusan</h1>
    <a href="<?php echo e(route('jurusan.create')); ?>" class="btn btn-primary">Tambah Jurusan</a>
  </div>

  <?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
  <?php endif; ?>

  <div class="card">
    <div class="card-body p-0">
      <table class="table mb-0">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
     
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
            <th scope="row"><?php echo e($i + 1); ?></th>
            <td><?php echo e($jurusan->nama_jurusan); ?></td>
 
            <td>
              <a href="<?php echo e(route('jurusan.edit', $jurusan->id)); ?>" class="btn btn-sm btn-warning">Edit</a>

              <form action="<?php echo e(route('jurusan.destroy', $jurusan->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus jurusan ini?');">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <tr>
            <td colspan="4" class="text-center">Belum ada data jurusan.</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HYPE AMD\Downloads\Materi_Laravel\resources\views/jurusan/index.blade.php ENDPATH**/ ?>
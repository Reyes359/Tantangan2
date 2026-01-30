

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4">Detail Jurusan</h1>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Jurusan</label>
                        <p class="form-control-plaintext"><?php echo e($jurusan->nama_jurusan); ?></p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <p class="form-control-plaintext"><?php echo e($jurusan->deskripsi ?? '-'); ?></p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Dibuat Pada</label>
                        <p class="form-control-plaintext"><?php echo e($jurusan->created_at->format('d-m-Y H:i')); ?></p>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="<?php echo e(route('jurusan.edit', $jurusan->id)); ?>" class="btn btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <a href="<?php echo e(route('jurusan.index')); ?>" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\u\Documents\Materi_Laravel\resources\views/jurusan/show.blade.php ENDPATH**/ ?>
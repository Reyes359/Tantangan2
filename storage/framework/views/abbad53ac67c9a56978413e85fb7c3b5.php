<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            font-family: Arial, sans-serif;
        }
        .section {
            margin-bottom: 30px;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        h3, li {
            color: #555;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Daftar Siswa Hip Hop cabang Banyuwangi</h2>
            <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <h3><?php echo e($student); ?></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h3>Tidak ada data siswa.</h3>
            <?php endif; ?>
        </div>

        <div class="section">
            <h2>Daftar Kelas</h2>
            <ul>
                <?php $__empty_1 = true; $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li><?php echo e($cls); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li>Tidak ada data kelas.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\u\Documents\Materi_Laravel\resources\views/student/index.blade.php ENDPATH**/ ?>
<?php declare(strict_types=1);
$level = $level ?? 0; ?>

<ul class="my-0">
    <?php $__currentLoopData = $items;
$__env->addLoop($__currentLoopData);
foreach ($__currentLoopData as $label => $item) {
    $__env->incrementLoopIndices();
    $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('_nav.menu-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php } $__env->popLoop();
$loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/html/_bases/base_pfed/laravel/Modules/Job/docs/source/_nav/menu.blade.php ENDPATH**/ ?>
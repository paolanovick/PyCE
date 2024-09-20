<!-- resources/views/vinos/index.blade.php -->

<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1>Listado de Vinos</h1>
    <h2>Vinos Ricos</h2>

    <div>
        Ejemplo de imagen:
        <?php
            $variable_de_la_base = 'public/storage';

        ?>
        <img src="public/storage/imagenes/<?php echo e($variable_de_la_base); ?>" />
    </div>
    <div class="wine-list">
        <?php $__currentLoopData = $vinos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vino): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="wine-item">
                <h3><?php echo e($vino->nombre); ?></h3>
                <p><?php echo e($vino->descripcion); ?></p>
                <p>Precio: $<?php echo e($vino->precio); ?></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xamppNuevo\htdocs\paola\resources\views/vinos/index.blade.php ENDPATH**/ ?>
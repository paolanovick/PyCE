<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Asesorías']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Asesorías']); ?>
     <?php $__env->slot('title', null, []); ?> Te asesoramos <?php $__env->endSlot(); ?>
    <h1>Asesorías</h1>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $asesorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asesoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($asesoria->titulo); ?></h5>
                        <p class="card-text"><?php echo e($asesoria->descripcion); ?></p>
                        <p><strong>Precio Mensual:</strong> $<?php echo e($asesoria->precio_mensual); ?></p>
                        <a href="<?php echo e(route('asesorias.show', $asesoria->id)); ?>"><?php echo e($asesoria->titulo); ?></a>
                        <!-- Botón de Inscripción -->
                        <a href="<?php echo e(route('asesorias.request', $asesoria->id)); ?>"
                            class="btn btn-secondary">Inscripción</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No hay asesorías disponibles.</p>
        <?php endif; ?>
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
<?php /**PATH C:\xamppNuevo\htdocs\paola\resources\views/home/asesoria.blade.php ENDPATH**/ ?>
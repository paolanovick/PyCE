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
     <?php $__env->slot('title', null, []); ?> home <?php $__env->endSlot(); ?>

    <h1>Bienvenido a Nuestra Tienda de Vinos</h1>

    <section>
        <h2>Últimos Artículos del Blog</h2>
        <article>
            <h3>Cómo Elegir el Vino Perfecto</h3>
            <img src="path-to-your-image/blog-article1.jpg" alt="Cómo Elegir el Vino Perfecto" class="img-fluid">
            <p>En este artículo, exploramos los factores clave para elegir el vino ideal para cualquier ocasión...</p>
        </article>
        <article>
            <h3>Los Mejores Vinos de la Temporada</h3>
            <img src="path-to-your-image/blog-article2.jpg" alt="Mejores Vinos de la Temporada" class="img-fluid">
            <p>Descubre cuáles son los vinos más recomendados para esta temporada...</p>
        </article>
    </section>


    
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
<?php /**PATH C:\xamppNuevo\htdocs\paola\resources\views/home.blade.php ENDPATH**/ ?>
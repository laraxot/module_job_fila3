<?php $__env->startSection('content'); ?><h1 id="installazione">Installazione</h1>

<p>Un'applicazione Laravel fresca è il modo ideale per iniziare con questo pacchetto.</p>

<p>Per installare il bacchetto basta mettere il seguente comando nella linea di comando:</p>

<pre><code class="language-console">composer require laraxot/module_job

php artisan module_job:install
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
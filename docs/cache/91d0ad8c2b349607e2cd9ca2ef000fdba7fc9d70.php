<?php declare(strict_types=1);
$__env->startSection('content'); ?><h1 id="aggiornamenti">Aggiornamenti</h1>

<p>Cms onsiste in un pacchetto PHP.</p>

<p>Quindi per aggiornare basta dare il comando in console:</p>

<p>composer update laraxot/module_job</p>

<p>Assicurarsi di cancellare la cache delle viste di Laravel dopo l'aggiornamento:</p>

<pre><code class="language-console">php artisan view:clear
</code></pre>

<p>Infine, se si sono pubblicati il file di configurazione o i modelli Blade, assicurarsi che le personalizzazioni siano aggiornate con i valori predefiniti.</p>

<h3>Verifica dei pacchetti installati</h3>

<p>È possibile utilizzare il comando Artisan incorporato per visualizzare le versioni installate dei pacchetti:</p>

<pre><code class="language-console">php artisan module_job:show-versions
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
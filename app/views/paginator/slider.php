<?php
	$presenter = new Presenters\Paginator\BootstrapPresenter($paginator);
?>

<!-- Traduction Laravel-france -->
<!-- Maj:4/05/2013 - pagination.php -->

<div class="pagination">
	<ul class="pull left">
		<li>
		<?php echo Lang::get('pagination.slider.showing') ?>
		<?php echo $paginator->getFrom(); ?>
		-
		<?php echo $paginator->getTo(); ?>
		<?php echo Lang::get('pagination.slider.of') ?>
		<?php echo $paginator->getTotal(); ?>
		<?php echo Lang::choice('pagination.slider.items', $paginator->getTotal()) ?>
		</li>
	</ul>

	<ul class="pull-right">
		<?php echo $presenter->render(); ?>
	</ul>
</div>

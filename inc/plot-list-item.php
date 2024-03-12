<?php

namespace UI\Lib;



function PlotListItem ( $props ) {
	[ 'number' => $number, 'area' => $area, 'directionFacing' => $directionFacing, 'value' => $value ] = $props;

	?>
	<div class="row space-min-bottom">
		<div class="columns inline-bottom small-12 large-3 h3">№ <?= $number ?></div>
		<div class="columns inline-bottom small-7 large-5 label text-uppercase"><span class="strong text-green"><?= $area ?> sft</span> - <?= $directionFacing ?> Facing -<br>Plot Value <span class="strong text-yellow"><?= $value ?> Lakhs</span></div>
		<div class="columns inline-bottom small-5 large-4 xlarge-3 xlarge-offset-1"><button class="button fill-light block js_request_quote" data-unit="<?= $number ?>" data-c="buy-get-a-quote">get a quote</button></div>
	</div>
	<?php
}

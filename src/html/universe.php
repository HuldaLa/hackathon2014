<?php $this->layout("layout") ?>

<?php $this->start('content') ?>
<h1>
<?php
	echo $this->universe['name'];
?>
	<span class="category">
	(<?php
		echo $this->universe['category'][0]['name'];
	?>)
	</span>
</h1>

<div class="sidebar hidden">
	<div class="toggle"></div>
</div>
<div class="timeline_container">
</div>

<script type="text/javascript">
	// This script tag is dirty bs, but we had no other choice, because the template engine
	// does not offer a way to pass variables to javascript global out of the box.
	// Time is money ^^
	var timelineDataUrl = '<?php echo $this->url('/universes/getTimeLineData/' . $this->universe['id']); ?>';
</script>

<?php $this->end() ?>
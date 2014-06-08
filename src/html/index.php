<?php $this->layout("layout") ?>

<?php $this->start('content') ?>
<h1>Hello!</h1>
    

<a href="<?php echo $this->url('/characters/create'); ?>" class="btn btn-default">Add Character</a>
<a href="<?php echo $this->url('/events/create'); ?>" class="btn btn-default">Add Event</a>
<a href="<?php echo $this->url('/places/create'); ?>" class="btn btn-default">Add Place</a>
<?php $this->end() ?>
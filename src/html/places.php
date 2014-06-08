<?php $this->layout("layout") ?>

<?php $this->start('content') ?>


<div class="container">
  <table class="table table-striped">
    <?php foreach($this->places as $place): ?>
      <tr>
        <td><?php echo $place['id'] ?></td>
        <td><?php echo $place['name']; ?></td>
      </tr>
    <?php endforeach ?>
  </table>

  <div>
    <a href="<?php echo $this->url('/places/create'); ?>" class="btn btn-default">Add Place</a>
  </div>
</div>

<?php $this->end(); ?>
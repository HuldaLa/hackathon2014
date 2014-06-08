<?php $this->layout("layout") ?>

<?php $this->start('content') ?>

<div class="container">

  <div class="row">
    <?php foreach($this->universes as $univers): ?>
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $univers['name'] ?></h3>
        </div>
        <div class="panel-body">
          <?php echo $univers['description'] ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <a href="<?php echo $this->url('/universes/create'); ?>" class="btn btn-default">Add Universe</a>
</div>

<?php $this->end() ?>
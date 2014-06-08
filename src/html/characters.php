<?php $this->layout("layout") ?>

<?php $this->start('content') ?>
    <!-- Select Basic -->
    <div class="container">
        <table class="table table-striped">
            <?php foreach($this->characters as $character): ?>
                <tr>
                    <td><?php echo $character['id'] ?></td>
                    <td><?php echo $character['name'] ?></td>
                </tr>
            <?php endforeach ?>
        </div>
    </div>
<?php $this->end() ?>
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
        </table>
        <div>
            <a href="<?php echo $this->url('/characters/create'); ?>" class="btn btn-default">Add Character</a>
        </div>
    </div>
<?php $this->end() ?>
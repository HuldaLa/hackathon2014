<?php $this->layout("layout") ?>

<?php $this->start('content') ?>
<form class="form-horizontal" method="POST">
  <fieldset>

    <!-- Form Name -->
    <legend>Orte</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Bezeichnung</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="z.B. Mittelerde" class="form-control input-md" required="">
      <span class="help-block"></span>  
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Beschreibung</label>
      <div class="col-md-5">                     
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Speichern</button>
      </div>
    </div>

  </fieldset>
</form>
<?php $this->end(); ?>
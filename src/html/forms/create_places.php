<?php $this->layout("layout") ?>

<?php $this->start('content') ?>
<form class="form-horizontal">
  <fieldset>

    <!-- Form Name -->
    <legend>Orte</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Bezeichnung</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="z.B. Azeroth" class="form-control input-md" required="">
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

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="category">Universum</label>
      <div class="col-md-5">
        <select id="category" name="universes" class="form-control">
          <option value="1">Univers I</option>
          <option value="2">Univers II</option>
        </select>
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
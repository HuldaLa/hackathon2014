<?php $this->layout("layout") ?>

<?php $this->start('content') ?>
<form class="form-horizontal">
  <fieldset>

    <!-- Form Name -->
    <legend>Events</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Name</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="Titel" class="form-control input-md" required="">
      <span class="help-block">Titel des Ereignisses</span>  
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Beschreibung</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="category">Zeiteinordnung</label>
      <div class="col-md-5">
        <select id="category" name="universes_categories" class="form-control">
        </select>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="characters">Protagonisten</label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="characters-0">
          <input type="checkbox" name="characters" id="characters-1" value="1">
          <img src="<?php echo $this->url('/img/large-rexxar.jpg'); ?>" alt="Rexxar" title="Rexxar" />
        </label>
      </div>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="category">Ort</label>
      <div class="col-md-5">
        <select id="place" name="place" class="form-control">
          <option value="1">Mittelerde</option>
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
<?php $this->end() ?>
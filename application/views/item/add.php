




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form class="form-horizontal" method="post" action="<?=base_url()?>item/insert">
<fieldset>

<!-- Form Name -->
<legend>Item Information</legend>
<?php if(validation_errors()): ?>
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <?=validation_errors()?>
        </div>

    </div>
<?php endif; ?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">ID</label>  
  <div class="col-md-6">
  <input  disabled id="id" name="id" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Name</label>  
  <div class="col-md-6">
    <?=form_error('name')?>
    <input  value="<?=set_value('name')?>" id="name" name="name" type="text" placeholder="" class="form-control input-md">
  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="description">Description</label>
  <div class="col-md-6">                     
    <textarea  class="form-control" id="description" name="description"><?=set_value('description')?></textarea>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="price">Price</label>
  <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon">PhP</span>
      <input id="price" value="<?=set_value('price')?>" name="price" class="form-control" placeholder="" type="text">
    </div>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="button">Back</label>
  <div class="col-md-6">
    <a href="<?=base_url()?>item/index" id="button" name="button" class="btn btn-default">Back</a>
    <button href="<?=base_url()?>item/index" id="button" name="button" class="btn btn-success">ADD</button>
  </div>
</div>

</fieldset>
</form>






    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form class="form-horizontal" action="<?=base_url()?>item/update" method="post">
<fieldset>

<!-- Form Name -->
<legend>Item Information</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">ID</label>  
  <div class="col-md-4">
  <input  readonly value="<?=$item->id?>" id="id" name="id" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input  value="<?=$item->name?>" id="textinput" name="name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea  class="form-control" id="description" name="description"> <?=$item->description?> </textarea>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">PhP</span>
      <input value="<?=$item->price?>" id="price" name="price" class="form-control" placeholder="" type="text">
    </div>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button"></label>
  <div class="col-md-4">
  <a href="<?=base_url()?>item/index" id="button" name="button" class="btn btn-default">Back</a>
    <button href="<?=base_url()?>item/update" id="button" name="button" class="btn btn-warning">Update</button>
  </div>
</div>

</fieldset>
</form>

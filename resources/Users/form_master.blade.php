<div style="margin-top:20px;"></div>
<h3>Create New projects</h3>
<table class="table table-hover table-md">
  {{-- New projects form Section --}}
  <div class="form-row">
      <div class="input-container">
        <label for="name" class="input-label col-md-5">Project Name</label>
        <input class="col-md-7" id="name" type="textbox" name="name" value="{{ $projects->name }}" required />
      </div>
  </div>
        
  <div class="form-row">
      <div class="input-container">
        <label for="type" class="input-label col-md-5">Type</label>
        <div class="col-md-4 col-sm-12">
            <select id="day" name="day" type="day" class="form-control">
              <option value="webdev">webdev</option>
              <option value="webdev">software</option>
              <option value="webdev">projectmanagement</option>
              <option value="webdev">embedded</option>
            </select>
        </div>
  </div>
        
  <div class="form-row">
    <div class="input-container">
      <label for="url" class="input-label col-md-5 col-sm-12">Url</label>
      <input class="col-md-7 col-sm-12" id="url" type="textbox" name="url" value="{{ $projects->url }}" required />
    </div>
  </div>
    
  <div class="form-row">
    <div class="input-container">
      <label for="github" class="input-label col-md-5 col-sm-12">Github</label>
      <input class="col-md-7 col-sm-12" id="github" type="github" name="github"required />
    </div>
  </div>

  <div class="form-row">
      <div class="input-container">
        <label for="img" class="input-label col-md-5">Img</label>
        <input class="col-md-7" id="img" type="img" name="img"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="video" class="input-label col-md-5">Video</label>
        <input class="col-md-7" id="video" type="video" name="video"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="description" class="input-label col-md-5">Description</label>
        <input class="col-md-7" id="description" type="description" name="description"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="keywords" class="input-label col-md-5">Keywords</label>
        <input class="col-md-7" id="keywords" type="keywords" name="keywords"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="order" class="input-label col-md-5">Order</label>
        <input class="col-md-7" id="order" type="order" name="order"required />
      </div>
  </div>

  <div class="form-group">
    <button type='submit' class="btn btn-success">Save</button>
  </div>

</table>

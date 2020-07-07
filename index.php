<?php
  require 'header.php';
?>
    
    <!-- Add New Student -->
    <div class="container" id="addStu">
      <div class="mt-5">
       <h1 class="text-center mb-5">Add New Student</h1>
     </div>

     <form class="container" method="POST" action="addstudent.php" enctype="multipart/form-data"> <!-- because of include file -->
       <div class="form-group row">
         <label for="profile" class="col-sm-2 col-form-label">Profile</label>
         <div class="col-sm-10">
           <input type="file" class="form-control-file" id="profile" name="profile">
         </div>
       </div>
       <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
              <label class="form-check-label" for="gridRadios1">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
              <label class="form-check-label" for="gridRadios2">
                Female
              </label>
            </div>
            
          </div>
        </div>
      </fieldset>

      <div class="form-group row">
       <label for="address" class="col-sm-2 col-form-label">Address</label>
       <div class="col-sm-10">
        <textarea class="form-control"  id="address" name="address"> </textarea> 
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
</div>

<!-- Edit Existing Student -->

<div class="container" id="editStudentform">
  <div class="mt-5">
    <h1 class="text-center mb-5">Edit Existing Student</h1>
  </div>
  <form class="container">
    <div class="form-group row">
      <label for="profile" class="col-sm-2 col-form-label">Profile</label>
      <div class="col-sm-10">
       <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Profile</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Profile</a>
        </li>

      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="male" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="female" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>

      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <textarea class="form-control"  id="address"> </textarea> 
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>

<!-- table -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="table_data">
  </tbody>
</table>
<?php
  require 'footer.php';
?>



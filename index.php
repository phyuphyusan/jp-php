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
          <input class="form-check-input" type="radio" name="gender" value="Male" checked="">
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" value="Female">
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
  <form method="POST" action="updatestudent.php" enctype="multipart/form-data">
   <input type="hidden" name="edit_id" id="edit_id">
   <input type="hidden" name="edit_oldprofile" id="edit_oldprofile">
   <div class="form-group row">
    <label for="profile" class="col-sm-2 col-form-label">Profile</label>
    <div class="col-sm-10">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>

        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
         <img src="" id="oldphoto" width="100">
       </div>
       <div class="tab-pane fade show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

        <input type="file" class="form-control-file mt-3" id="edit_photo" name="photo">

      </div>

    </div>

  </div>
</div>
<div class="form-group row">
  <label for="name" class="col-sm-2 col-form-label">Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter Name">
  </div>
</div>
<div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" id="edit_email" name="email">
  </div>
</div>
<fieldset class="form-group">
  <div class="row">
    <legend class="col-form-label col-sm-2 pt-0 ">Gender</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="edit_male" value="Male">
        <label class="form-check-label" for="gridRadios1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="edit_female" value="Female">
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
    <textarea class="form-control"  id="edit_address" name="address"> </textarea> 
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



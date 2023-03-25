<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="styles/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>

<body>
  <div class="container-fluid admin_panel">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="" class="list-group-item side_menu">Patients</a>
          <a href="" class="list-group-item">Patient Details</a>
          <a href="" class="list-group-item">Add New Patient</a>
          <a href="" class="list-group-item">Payment/Checkout</a>
        </div>
        <hr />
        <div class="list-group">
          <a href="" class="list-group-item side_menu">Staff</a>
          <a href="" class="list-group-item">Staff Details</a>
          <a href="" class="list-group-item">Add New Staff</a>
          <a href="" class="list-group-item">Remove Staff Members</a>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <div class="card-body card_title">Book an Appointment</div>
          <div class="card-body">
            <form action="">
              <div>
                <label for="firstname" class="panel-label">Firstname</label>
                <input type="text" id="first_name" name="first_name" class="text-control" placeholder="Firstname" />
              </div>
              <div>
                <label for="Lastname" class="panel-label">Lastname</label>
                <input type="text" id="last_name" name="last_name" class="text-control" placeholder="Lastname" />
              </div>
              <div>
                <label for="email" class="panel-label">Email</label>
                <input type="text" id="email" name="email" class="text-control" placeholder="Email" />
              </div>
              <div>
                <label for="contact" class="panel-label">Contact</label>
                <input type="text" id="contact" name="contact" class="text-control" placeholder="Contact address" />
              </div>
              <div>
                <label for="email">Appointment</label>
                <select id="appointment" class="text-control">
                  <option value="">Please select....</option>
                  <option value="">Dr. Runor</option>
                  <option value="">Dr. Ogaga</option>
                </select>
              </div>
              <div>
                <label class="panel-label">&nbsp;</label>
                <input type="submit" value="Enter Patient" class="bttn-signup"/>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>
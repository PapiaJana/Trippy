<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <style>
    .add_pack {
      align-items: center;
      margin-left: 25%;
      margin-right: 25%;
      padding-top: 5%;
      padding-bottom: 5%;
      padding-left: 15%;
    }

    .btn {
      background-color: #98dff5;
      text-decoration: none;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      border: 2px solid #98dff7;
      border-radius: 5px;
      align-items: center;
    }

    .btn:hover {
      background-color: #fff;
    }

    button {
      text-align: center;
    }

    body {
      background-image: url("../img/gallery1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;

    }

    .container-fluid div {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <!-- form -->
  <section>
    <div class="container-fluid">
      <div class="row my-4">
        <div class=" col-md-12">
          

          <form action="add_service_action.php" class="add_pack" method="post" enctype="multipart/form-data">
          <h1 class="text-center text-light" style="color: black; text-align:center;text-decoration:underline; font-size:30px;">Add Service</h1>
            <!-- <div class="form-group from">
              <label for="destination" class="text-light">Select India : </label>
              <input type="text" class="form-control   " id="destination" placeholder="which india?" name="destination"><br>
            </div> -->
           
            <div class="form-group from">
              <label for="service" class="text-light"> Service : </label>
              <input type="text" class="form-control   " id="service" placeholder="service Name" name="service"><br>
            </div>
            <div class="form-group from">
              <label for="description" class="text-light">Description : </label>
              <textarea class="form-control " id="description" placeholder="description" name="description"></textarea>
            </div>
            <div class="form-group">
                  <label for="">Image : </label>
                  <input type="hidden" name="old_img" value="<?php echo $data['image'] ?>" />
                  <input type="file" class="form-control" name="pic" id="pic" accept="image/*" onchange="viewImage(this)">
                </div>
           
            <div class="row">
              <!-- <div class="form-group from col-md-6">
                <label for="stock_count" class="text-light">Stock count</label>
                <input type="int" class="form-control " id="stock_count" placeholder="+" name="stock_count">
              </div> -->
              <!-- <div class="form-group from col-md-6">
                <label for="fstatus" class="text-light">Package Status:</label><br>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="available" value="available" class="form-check-input " name="p_status"><span class="text-white">Available</span>
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="unavailable" value="unavailable" class="form-check-input" name="p_status"><span class="text-white">Unavailable</span>
                  </label>
                </div>
              </div> -->
            </div>
            <div class="row">
              <div class="col-md-5">
               
                <!-- <div class="form-group">
                    <img src="../assets/service_image/<?php echo $data['image'] != '' ? $data['image'] : 'no-image.png'; ?>" alt=" " style="height:100px;width:100px" id="view_profile_pic">
                </div> -->
              </div><br>
              <div class="form-group from">
                <button type="submit" class="btn  " onclick="return formValidate();">Add</button>
              </div>
          </form>

        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
  <script>
    function formValidate() {
      let destination = document.getElementById("destination").value;
      let days = document.getElementById("days").value;
      let price = document.getElementById("price").value;

      let stock_count = document.getElementById("stock_count").value;
      if (destination == "" || destination == " ") {
        alert("Please Enter destination name.....");
        document.getElementById("destination").focus();
        return false;
      } else if (days == "" || days == " ") {
        alert("Please Enter how many days.....");
        document.getElementById("days").focus();
        return false;
      } else if (price == "" || price == " ") {
        alert("Please enter price...");
        document.getElementById("price").focus();
        return false;
        // } else if (stock_count == "" || stock_count == " ") {
        //   alert("Please enter stock stock_count...");
        //   document.getElementById("stock_count").focus();
        //   return false;}
        //  else {
        //   return true;
      }
    }

    function viewImage(input) {
      if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
          $("#view_profile_pic")
            .attr("src", e.target.result)
            .height(100)
            .width(100);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</body>

</html>
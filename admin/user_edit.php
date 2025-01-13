<?php
include("admin_function.php");
$user_id = base64_decode($_GET['uid']);
//echo $user_id;
$data = getUserDetails($user_id);
//echo"<pre>";
//print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="admin_style.css">
    <style>
        .edit_user{
            padding-left:20% ;
            padding-right:20% ;
            align-items: center;
            
            
        }
        .btn{
           background-color:orange;
        }
        
    </style>
</head>

<body class="reg">
    <div class="container ">
        <main>
            <div class="py-5 text-center">
                <h2 style="color:orange;">Edit form</h2>
            </div>

            <div class="row g-5">

                <div class=" edit_user">
                    <form action="user_edit_action.php" class="needs-validation" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php echo $data['id']; ?>" />
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="fname" class="form-label">First name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="<?php echo $data['fname'] ?>" required="" fdprocessedid="dd7v42">
                                <div class="invalid-feedback">
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="<?php echo $data['lname'] ?>" required="" fdprocessedid="qo6a7g">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" value="<?php echo $data['email'] ?>" fdprocessedid="jatyxr" readonly>

                            </div>

                            <div class="col-6">
                                <label for="address" class="form-label">Phone No. </label>
                                <input type="text" class="form-control" name="address" id="address" placeholder=""value="<?php echo $data['phone'] ?>" required="" fdprocessedid="56cse">

                            </div>
                        </div>
                      <div class="row">
                        

                        <div class="col-md-6">
                        <label for="state">State</label>
                        <select id="state" name="state" class="form-control">
                            <option selected>West Bangal</option>
                            <option>Odisha</option>
                            <option>Andhra Pradesh</option>
                            <option>Bihar</option>
                            <option>Tripura</option>
                            <option>Panjab</option>
                            <option>Rajasthan</option>
                        </select>
                            
                        </div>
                        </div>

                        <!-- <div class="col-md-3 ">
                            <h4><label for="zip" class="form-label">Zip</label></h4>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="" required="" fdprocessedid="c9ye68">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div> -->
         

                <!-- <h4 class="mb-3" >Gender</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="male" value="male" name="gender" type="radio" class="form-check-input" checked="" required="" <?php echo $data['gender'] == 'Male' ? 'checked' : ''; ?>>

                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input id="female" value="female" name="gender" type="radio" class="form-check-input" required="" <?php echo $data['gender'] == 'Female' ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                        <input id="other" value="other" name="gender" type="radio" class="form-check-input" required="" <?php echo $data['gender'] == 'Others' ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div> -->
               
                <div class="col-6">
                <label for="" class="form-label">Image <small>(Optional)</small></label>
                <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                <input type="file" class="form-control" name="pic" id="pic" accept="image/*" onchange="viewImage(this)" >
              </div>
              <div class="col-6">

                <img src="../assets/user_image/<?php echo $data['image'] != '' ? $data['image'] : 'no-image.png';
                                          ?>" alt="" style="height:100px;width:100px" id="view_profile_pic" />
              </div>

                <hr class="my-4">

                <center><button class=" btn  btn-lg " type="submit" fdprocessedid="g2865" name="userEditBtn" value="userEditBtn">Submit</button></center>
                </form>
            </div>
    </div>
    </main>
    </div>


    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script> -->


    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>

    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function viewImage(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $("#view_profile_pic")
                        .attr("src", e.target, result)
                        .height(100)
                        .width(100);
                };
                reader.readAsDaraURL(input.files[0])
            }
        }
    </script>
</body>

</html>
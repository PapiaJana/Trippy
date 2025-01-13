<?php
session_start();
include("admin_function.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Packages </title>
    <!----------------CSS Link--------------->
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <!----------------Icon Link--------------->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!----------------Bootstrap Link--------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous">
    <!----------------Font Awsome Link--------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        .container {
            margin: 5px;
            padding: 0;
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #333;
            overflow: auto;
        }

        .container h1 {
            color: #fff;
            font-weight: bolder;
            padding-left: 13px;
            padding-top: 10px;
        }

        /*adding styles to links */
        .container a {
            text-decoration: none;
            display: block;
            padding: 18px;
            color: #fff;
            font-weight: bolder;
            font-size: 20px;
        }

        .container a.active {
            background-color: orange;
            color: black;
        }

        /* .container>a:hover:not(.active) {
    background-color: #403b3b;
} */

        div.content {
            margin-left: 230px;
            padding: 40px 40px;
            height: 100vh;
        }

        @media screen and (max-width:500px) {
            .container {
                width: 100%;
                height: auto;
                position: relative;
            }

            .container a {
                float: left;
            }

            div.content {
                margin-left: 0;
                background-color: rgb(242, 242, 110);
            }
        }

        @media screen and (max-width:300px) {
            .container a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body class="main_content">


<div class="container">
        <!--container class will contain the links-->
        <h1><span style="color: orange;">T</span>RIPPY</h1><hr>
        <a href="dashboard.php" >Dashboard</a>
        <a href="user_list.php" >User List</a>
        <a href="category_list.php" >Category List</a>
        <a href="package_list.php" >Package List</a>
        <a href="service_list.php" class="active">Service List</a>
        <a href="book_list.php">Book List</a>
        <a href="contact_list.php">Contact List</a>
       
    </div>

    <div class="content ">
        <div class="container-fluid vw-100" style="padding-right:300px;"> <!-- pt-4 px-4 -->
            <div class="row g-2">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <span>
                            <h4 class="mb-4 text-dark fs-5 fw-5">All Service<a href="add_service.php " style="margin-left: 70%;" class=" btn btn-warning">+add service</a></h4>
                        </span>

                        <div class="table-responsive "  >
                            <table class="table table-bordered table-striped table-hover w-100  " id="example">
                                <thead>
                                    <tr class="table-warning">
                                        <th>SL</th>
                                        <th>Service</th>
                                        <th>Description</th>
                                       

                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $alldata = getAllService();
                                    if (!empty($alldata)) {
                                        foreach ($alldata as $key => $data) {
                                    ?>
                                            <tr>
                                                <td><?php echo ($key + 1); ?></td>
                                                <td><?php echo $data['service']; ?></td>
                                                <td><?php echo $data['description']; ?></td>
                                                

                                                <td><img src="../assets/service_image/<?php echo $data['image'] != '' ? $data['image'] : 'no-image.png'; ?>" alt="" style="height:50px;" id="view_profile_pic"></td>

                                                <td>
                                                    <a href="service_edit.php?uid=<?php echo base64_encode($data['id']); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="service_delete.php?uid=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger delete_btn" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                                                </td>

                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='6' class='text-center'>No Record Found...</td></tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="JS/script.js"></script>

    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>
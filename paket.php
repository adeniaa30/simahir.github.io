<?php include 'controller/controll.php';
if( isset($_SESSION["login"]) === false ) {
	header("Location: index.php");
	exit;
};
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mahir Mengemudi</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
				.isi:hover{
                background-color: violet;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin: auto;
                border-radius: 15px;
                background: rgba(0, 0, 0, 0.5);
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                margin-bottom: 20px;
            }
            th {
                background-color: cadetblue;
								text-align: center;
            }
            td{
                text-align: center;
            }
            th, td{
                padding: 15px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                color: white;
            }
            caption{
                margin-bottom: 20px;
                font-family: Goudy Old Style;
                font-size: 30px;
                color: black;
            }
            #cont{
                position: relative;
                width: 100%;
                /* background-image: linear-gradient(to bottom right, aquamarine, pink, violet); */
            }
				</style>
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>MAHIR</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Everyday, 8:00 - 20:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>081 2177 12345</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>mahirmengemudi@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

												<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link">Back to Home</a>
                            </div>

                            <div class="ml-auto">
                                <a class="btn" href="registrasi/registrasi.php">Hai, <?php echo $_SESSION["username"]; ?> </a>
                            </div>
														<div class="nav-item dropdown">
																<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
																<div class="dropdown-menu">
																		<a href="#" class="dropdown-item">My Profile</a>
																		<a href="paket.php" class="dropdown-item">My Course</a>
																		<a class="dropdown-item" href="signout.php">Logout</a>
																</div>
														</div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <div id="paket" class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Detail Paket</p>
                        <h2><?php echo $_SESSION["username"]; ?></h2>
                    </div>
										<form>
											<?php
											$id = 1;
											$username = $_SESSION["username"];
											$tampilkan = mysqli_query($koneksi, "SELECT email, nama, no_wa, alamat, paket, hari, jam, metode, catatan_admin from pendaftaran where username = '$username'");
											while($data = mysqli_fetch_array($tampilkan)) :
											?>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vemailDesa?>"
                              placeholder="<?=$data['email']?>" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vwebDesa?>"
                              placeholder="<?=$data['nama']?>" readonly>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nomor WA</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['no_wa']?>" readonly>
                          </div>
                      </div>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Alamat</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['alamat']?>" readonly>
                          </div>
                      </div>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Paket</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['paket']?>" readonly>
                          </div>
                      </div>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Hari</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['hari']?>" readonly>
                          </div>
                      </div>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Jam</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['jam']?>" readonly>
                          </div>
                      </div>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Metode Pembayaran</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['metode']?>" readonly>
                          </div>
                      </div>
											<div class="form-group row">
                          <label class="col-sm-2 col-form-label">Catatan Admin</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?=@$vfbDesa?>"
                              placeholder="<?=$data['catatan_admin']?>" readonly>
                          </div>
                      </div>
											<?php endwhile; ?>
										</form>

                </div>
            </div>
            <!-- Contact End -->


            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Jl. Suromulang Timur IV No. 18</p>
                                <p><i class="fa fa-phone-alt"></i>081 2177 12345</p>
                                <p><i class="fa fa-envelope"></i>mahirmengemudi@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Building Construction</a>
                                <a href="">House Renovation</a>
                                <a href="">Architecture Design</a>
                                <a href="">Interior Design</a>
                                <a href="">Painting</a>
                            </div>
                        </div> -->
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">Home</a>
                                <a href="">About</a>
                                <a href="">Fact</a>
                                <a href="">Team</a>
                                <a href="">Contact</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Subscribe</h2>
                                <p>
                                    Tinggalkan email anda di sini untuk mendapatkan informasi menarik !
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">mahirmengemudi</a>, All Right Reserved.</p>
                        </div>
                        <!-- <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

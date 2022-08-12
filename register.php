<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="KodePengguna" name="KodePengguna" type="text" placeholder="Ketik Kode Pengguna Anda" />
                                                        <label for="KodePengguna">KodePengguna</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="NamaPengguna" name="NamaPengguna" type="text" placeholder="Ketik Nama Pengguna" />
                                                        <label for="NamaPengguna">Nama Pengguna</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
  <label for="Alamat">Alamat:</label>
  <textarea class="form-control" rows="5" id="Alamat" name="Alamat" title="Silahkan Ketik Alamat Anda" ></textarea>
</div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="NoHP" name="NoHP" type="text" placeholder="Ketik Nomor Anda" />
                                                        <label for="NoHP">No. HP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" name="bCreate">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Punya akun? ayo kita login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> 
        <?php if (isset($_POST['bCreate'])) {
            $KodePengguna=filter_var($_POST['KodePengguna'],FILTER_SANITIZE_STRING);
            $NamaPengguna=filter_var($_POST['NamaPengguna'],FILTER_SANITIZE_STRING);
            $Alamat=filter_var($_POST['Alamat'],FILTER_SANITIZE_STRING);
            $inputPassword=filter_var($_POST['inputPassword'],FILTER_SANITIZE_STRING);
            $NoHP=filter_var($_POST['NoHP'],FILTER_SANITIZE_STRING);
            include("koneksidb.php");
            $sqlinsert="insert into Pengguna (KodePengguna,NamaPengguna,Alamat,Password,NoHP,TanggalDaftar) values ('".$KodePengguna."','".$NamaPengguna."','".$Alamat."','".$inputPassword."','".$NoHP."',now())";
            //echo $sqlinsert;exit();
            $qinsert=mysqli_query($koneksi,$sqlinsert);
            if ($sqinsert) {
                echo "<h3>Record sudah tersimpan !</h3>";
            } else {
                echo "<h3>Record belum tersimpan !</h3>";
            }
        }
        ?>
    </body>
</html>


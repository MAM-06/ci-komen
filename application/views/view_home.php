<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>An-Namiroh Travel indo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">An Namiroh Travelindo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/uts">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">PT. An Namiroh Travelindo</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">website service desk</div>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://kastara.id/wp-content/uploads/2020/08/Haji.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Rencanakan perjalanan umrah istimewa bersama keluarga, kolega, atau orang-orang terdekat anda</p>
                            <p class="fs-5 mb-4">Umrah Lebih Nyaman, Pesawat Direct, Hotel Lebih Dekat,Penyelenggara Tersertifikasi Kemenag RI</p>
                            <h2 class="fw-bolder mb-4 mt-5">Disclaimer:</h2>
                            <p class="fs-5 mb-4">1) Perkiraan keberangkatan dapat berubah sesuai perubahan kuota provinsi/kab/kota/haji khusus dan perubahan regulasi; </p>
                            <p class="fs-5 mb-4">2) Perkiraan keberangkatan hanya dihitung untuk jemaah yang belum batal atau belum berangkat; </p>
                            <p class="fs-5 mb-4">3) Selama masa operasional haji, dilakukan perubahan tahun awal menjadi tahun berikutnya untuk antisipasi jemaah yang akan berangkat. Selesai masa operasional, perkiraan berangkat semua jemaah dalam status poin 2 dimulai dari musim haji berikutnya; </p>
                            <p class="fs-5 mb-4">4) Jika nomor porsi anda mundur pada masa operasional haji, silakan cek kembali setelah masa operasional haji.</p>
                        </section>
                    </article>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <!-- <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div> -->
                    <div class="w3-row-padding">
                    
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Jadwal Umroh 2022-2023 /1443 H</div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-9">
                                <?php  foreach ($content->result() as $row): ?>
                                <div class="w3-col s1">
                                <div class="w3-blue w3-padding-medium">
                                <h3> →
                                <a href="<?php echo site_url('komentar/detail/').$row->content_id ?>"><?php echo $row->content_title;?></a>
                                </h3>
                                </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-body">Semoga Allah mudahkan anda untuk melaksanakan Ibadah Umroh bersama kami pada musim umroh 2022 2023/1443 H. <br>Aamiin Allahumma Aamiin. <br><br>Sesungguhnya umrah yang satu hingga umrah yang berikutnya merupakan penebus dosa-dosa yang ada diantara kedua umrah tersebut, dan haji yang mabrur tidak ada balasan baginya yang setimpal kecuali surga. <br><br>(Hadīts riwayat Imam Al Bukhari)</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">09020620031  &Conint;  M. Khotibul Umam</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    </body>
</html>

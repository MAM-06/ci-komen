<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An Namiroh Travelindo</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
        .container {
            padding-left: 15%;
            padding-right: 15%;
        }
        .child{
             margin-left: 50px;
        }
        .modal {
            width: 40% !important;
        }
        textarea {
            width: 100%;
            height: 80px;
        }
    </style>
    
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">An Namiroh Travelindo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/ci-komen/">home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
        <h1><?php echo $content_title;?></h1>
        <hr>Durasi       :<?php echo $waktu;?>
        <br>Hotel        :<?php echo $content_body;?>
        <br>Harga Mulai  :<?php echo $harga;?>
        <div class="w3-panel w3-blue">
            <p>Kolom Komentar:</p>
        </div>
        <form method="POST" action="<?php echo site_url('komentar/kirim') ?>">
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input type="hidden" value="<?php echo $content_id;?>" name="id">
                    <input class="w3-input w3-border" type="text" placeholder="Nama" name="nama">
                </div>
                <div class="w3-half">
                    <input class="w3-input w3-border" type="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="w3-padding">
                <textarea style="width: 100%;" name="isi"></textarea>
            </div>
            <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Kirim Komentar</button>
        </form>
    </div>
    <?php
        $content_id =  $content_id;
        $query = $this->db->query("SELECT * FROM table_comment WHERE comment_status='0' AND comment_content_id = '$content_id'");
        foreach ($query->result() as $utama):
    ?>
    <div class="container">
        <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
            <p>
                <b><?php echo $utama->comment_nama?></b>
                <br><?php echo $utama->comment_isi?>
                <br><button class="w3-button w3-tiny w3-blue" onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='block'">Balas</button>
            </p>
        </div>
    </div>
        <?php
            $content_id = $content_id;
            $comment_id=$utama->comment_id;
            $query = $this->db->query("SELECT * FROM table_comment WHERE comment_status='$comment_id' AND comment_content_id = '$content_id'");
            foreach ($query->result() as $balasan):
        ?>
        <div class="container">
            <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue child">
                <p>
                    <b><?php echo $balasan->comment_nama?></b>
                    <br><?php echo $balasan->comment_isi?>
                </p>
            </div>
        </div>
        <?php endforeach;?>
        <div id="<?php echo $utama->comment_id?>" class="w3-modal">
            <div class="w3-modal-content modal">
                <header class="w3-container w3-blue">
                    <span onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Balas Komentar</h2>
                </header>
                <div class="w3-container">
                    <form class="w3-container" method="POST" action="<?php echo site_url('komentar/balas') ?>">
                        <input type="hidden" name="comment_id" value="<?php echo $utama->comment_id?>">
                        <input type="hidden" name="content_id" value="<?php echo $content_id?>">
                        <div class="w3-section">
                        <br>         
                        <textarea style="width: 100%;" name="isi"></textarea>
                        <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
                <footer class="w3-container w3-blue w3-border-top w3-padding-16"></footer>
            </div>
        </div>
    <?php endforeach;?>
</body>
</html>
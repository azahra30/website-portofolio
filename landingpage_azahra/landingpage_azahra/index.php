
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive portofolio website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
    include 'koneksi.php';
    $query = "SELECT * FROM users";
    $query_sql = mysqli_query($koneksi,$query);
    $tampil = mysqli_fetch_assoc($query_sql);
    ?>
    <header class="header">
        <a href="#home" class="logo"><?php echo $tampil['name'] ?></a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#education">Education</a>
            <a href="#experience">Experience</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>


    <section class="home" id="home">
        <div class="home-content">
            <h1>HELLO I'M <?php echo $tampil['name'] ?></h1>
            <h3 class="text-animation">I'M A <span></span></h3>
             <p><?php echo $tampil['description'] ?></p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
            </div>

            <div class="btn-group">
                <a href="#contact" class="btn">CONTACT</a>
            </div>
        </div>
            <div class="home-img">
                <img src="img.jpg" alt="">
            </div>
        </div>
    </section>
    
    <section class="education" id="education">
        <h2 class="heading">Education</h2>
        <?php
    include 'koneksi.php';
    $education_query = "SELECT * FROM education";
    $query_sql = mysqli_query($koneksi,$education_query);
    $ambildata= mysqli_fetch_all($query_sql,MYSQLI_ASSOC);

    foreach ($ambildata as $tampil){
    ?>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
                <div class="timeline-date">2013-2015</div>
            </div>
            <div class="timeline-content">
                <h3><?php echo $tampil['name'] ?></h3>
                <p><?php echo $tampil['description'] ?></p>
                </div>
        </div>
        
        <?php
    }
    ?>
    </section>
    <section src="experience" id="experience">
        <h2 class="heading">Experience</h2>
        <?php
    include 'koneksi.php';
    $experience_query = "SELECT * FROM experience";
    $query_sql = mysqli_query($koneksi,$experience_query);
    $ambildata= mysqli_fetch_all($query_sql,MYSQLI_ASSOC);

    foreach ($ambildata as $tampil){
    ?>
        <div class="experience-container">
            <div class="experience-box">
                <div class="experience-info">
                    <h4><?php echo $tampil['company_name'] ?></h4>
                    <p><?php echo $tampil['job_description'] ?></p>
                </div>
            </div>
        <?php
    }
    ?>
    </section>
    <section class="portofolio" id="portofolio">
        <h2 class="heading">Portofolio</h2>
        <?php
    include 'koneksi.php';
    $portofolio_query = "SELECT * FROM portofolio";
    $query_sql = mysqli_query($koneksi,$portofolio_query);
    $ambildata= mysqli_fetch_all($query_sql,MYSQLI_ASSOC);

    foreach ($ambildata as $tampil){
    ?>

        <div class="portofolio-box">
            <div class="portofolio-card">
                <div class="portofolio-item">
                    <img src="<?php echo $tampil['image'] ?>" alt="">
                <p><?php echo $tampil['description'] ?></p>
                </div> 
            </div>
               <?php
    }
    ?>
    </section>

  <section class="contact" id="contact">
    <h2>Contact me</h2>

    <form action="#">
        <div class="input-box">
            <div class="input-field field">
                <input type="text" placeholder="Full name" id="name" class="item" autocomplete="off">
            </div> 
            <div class="input-field field">
                <input type="text" placeholder="Email" id="email" class="item" autocomplete="off">
            </div> 
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Phone" id="Phone" class="item" autocomplete="off">
                </div> 
                <div class="input-field field">
                    <input type="text" placeholder="From" id="text" class="item" autocomplete="off">
                </div> 
        </div>
        <div class="textarea-field field">
            <textarea name="" id="message"cols="30" rows="10" placeholder="Your Massage" class="item" autocomplete="off"></textarea>
        </div>
        <button type="submit">Send message</button>
    </form>
  </section>

    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-whatsapp'></i></a>
        </div>
        <ul class="list">
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
        <p class="copyright">
            &copy;AZAHRADIVAAYU 
        </p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
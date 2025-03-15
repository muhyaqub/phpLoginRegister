<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

.about {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: rgb(136, 68, 199);
    color: white;
    text-align: center;
    padding: 20px;
}


.about-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 600px;
}


.about-container img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 3px solid #dcaef1;
    margin-bottom: 20px;
}


.about-text h1 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.about-text p {
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 15px;
}


.btn {
    display: inline-block;
    padding: 10px 20px;
    color:  #dcaef1;
    background: white;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.btn:hover {
    background: #dcaef1;
    color: white;
}

@media (min-width: 768px) {
    .about-container {
        flex-direction: row;
        text-align: left;
        max-width: 800px;
    }

    .about-container img {
        margin-right: 20px;
    }
}

</style>
<body>
<?php include "layout/html/login-header.html"?>
    <section class="about">
        <div class="about-container">
            <img src="asset/images/profile.jpg" alt="Foto Profil">
            <div class="about-text">
                <h1>Halo! Saya Muh Yaqub Alief</h1>
                <p>Saya adalah seorang Gamers yang memiliki passion di bidang IT. Saya suka bermain game dengan genre FPS,Survival,Adventure dan juga RPG .</p>
                <p>Di waktu luang, saya menikmati membuat website sederhana dan berbagi ilmu seputar dunia pemrograman terutama web develper.Jika ada kritik dan saran mohon hubungi saya!</p>
                <a href="https://wa.me/6281242921501?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda" class="btn">Hubungi Saya</a>
            </div>
        </div>
    </section>
    <?php include "layout/html/footer.html" ?>
</body>
</html>

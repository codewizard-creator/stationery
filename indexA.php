

<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <nav class="nav">
        <ul class="nav-main-list">
            <li class="nav-main-list-item nav-item"><a href="indexA.php">Ana Sayfa</a></li>
            <li class="nav-main-list-item nav-item"><a>Hakkımızda</a></li>
            <li class="nav-main-list-item third nav-item"><a>İletişim</a></li>
            <li class="nav-main-list-item nav-item"><a>Ürünler</a>
                <ul class=nav-sub-list>
                    <li class="nav-sub-list-item nav-item border-top"><a href="ürünler.php?ad=kalem">Kalem</a></li>
                    <li class="nav-sub-list-item nav-item"><a href="ürünler.php?ad=kitap">Kitap</a></li>
                    <li class="nav-sub-list-item nav-item"><a href="ürünler.php?ad=dersnotu">Ders Notları</a></li>
                    <li class="nav-sub-list-item nav-item"><a>Defter</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <header class="header">
        <div class="container">
            <h1 class="heading">Başar Kırtasiye'ye hoşgeldin</h1>
            <p class="header-p">Bizle ilgili bilgi edinebileceğin bir site </p>
        </div>
    </header>

    <main class="ana">
        <div class="contain">
            <div class="about">
                <h2>Hakkımızda</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolore minus voluptates fugit! Necessitatibus magnam asperiores excepturi consequuntur provident eius, fugiat doloribus eaque eum molestiae similique? Voluptatem excepturi iusto quo.</p>
            </div>
            <div class="duyurular">
                <div class="dersnotu">
                    Yüzde 20 indirim!
                </div>
                <br>
                <div class="dersnotu">
                    DERS NOTLARI!
                </div>
            </div>
    </main>

    <section class="programme">
        <h3>İhtiyaçlarınıza göre listeleyin</h3>


        <form class="forflex" action="ürünliste.php" method="post">
            <div class="kalem">
                <h4>Kalem türü</h4>
                <input type="radio" name="ürünad" id="kalem" value="kalem">
                <div class="check-group">
                    <label for="uçlu">Uçlu</label>
                    <input type="checkbox" name="kategorino[]" class="pencil" id="uçlu" value="uçlu">
                    <label for="tükenmez">Pilot</label>
                    <input type="checkbox" name="kategorino[]" class="pencil" id="pilot" value="pilot">
                    <label for="kurşun">Kurşun</label>
                    <input type="checkbox" name="kategorino[]" class="pencil" id="kurşun" value="kurşun">
                </div>
            </div>
            <div class="kitap">
                <h4>Ders Kitapları</h4>
                <input type="radio" name="ürünad" id="kitap" value="kitap">
                <div class="check-group">
                    <label for="hikaye">Hikaye</label>
                    <input type="checkbox" name="kategorino[]"  class="book" id="hikaye" value="hikaye">
                    <label for="Ders">Ders</label>
                    <input type="checkbox" name="kategorino[]" class="book" id="ders" value="ders">
                    <label for="Kg">Kişisel Gelişim</label>
                    <input type="checkbox" name="kategorino[]" class="book" id="Kg" value="kg">
                </div>
            </div>
            <div class="dersnot">
                <h4>Ders Notları</h4>
                <input type="radio" name="ürünad" id="dersnotu" value="dersnotu">

                <div class="check-group">
                    <label for="mat">Matematik</label>
                    <input type="checkbox" name="kategorino[]" class="note" id="mat" value="mat">
                    <label for="">Makina müh.</label>
                    <input type="checkbox" name="kategorino[]" class="note" id="kimya" value="mühendislik">
                    <label for="">Biyoloji</label>
                    <input type="checkbox" name="kategorino[]" class="note" id="biyoloji" value="3">
                </div>
            </div>
            <input class="submitbut" type="submit" value="Onayla">


        </form>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>
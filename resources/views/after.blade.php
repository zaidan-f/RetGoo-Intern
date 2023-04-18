<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Internship-System</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">


    <!-- Web page CSS -->
    <link rel="stylesheet" href="/css/style.css" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Thank You</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav>
      <span><img class="logo" src="logo.png" alt="" width="20%"></span>
      <a href="/" class="logo">
        <h3>
          RetGoo <br> Internship System
        </h3>
      </a>
      <div class="theme-switch">
          <input type="checkbox" class="checkbox" id="checkbox" />
          <label for="checkbox" class="label">
             <ion-icon name="partly-sunny-outline" class="sun"></ion-icon>
             <ion-icon name="moon-outline" class="moon"></ion-icon>
             <div class="switcher"></div>
          </label>
      </div>
      <img class="navimg" src="/avatars/{{ Auth::user()->avatar }}">
      <a href="/account">
        <div class="nama">
        <p>{{ auth()->user()->name ?? '' }}</p>
      </div>
    </a>
  </nav>
    
    <!-- Hero section -->
    <section class="hero">
        <img class="jempol" src="https://i.postimg.cc/c6q9h7g1/Group-578.png" alt="">
        <img class="imgrtg" src="https://i.postimg.cc/3xsW3kMM/Group-577.png" alt="">
        <div class="intro-text">
          <h1>
            <span class="data">Terimakasih telah mengisi form Data Peserta Prakerin di PT. RetGoo Sentris Informa</span>
          </h1>
          <form action="/form">
            @csrf
          <Button class="btn red" >Lihat Jawaban </Button>
          <Button class="btn red" formaction="/landing" >Kembali</Button></form>
        </div>
        <img class="clap" src="https://i.postimg.cc/43Frt95y/Group-579.png" alt="">
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>RetGoo</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by Zaidan</a>
          </div>
        </div>
    </footer>


        <!-- Web page script -->
    <script src="/js/app.js"></script>
    
        <!-- Ion icons CDN -->
    <script
          type="module"
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Web page CSS -->
    <link rel="stylesheet" href="/css/styles.css" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav>
        <span><img src="logo.png" alt="" width="20%"></span>
        <a href="#" class="logo">
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
    </nav>
    
    <!-- Hero section -->
    <section class="hero">
        <div class="intro-text">
          <h1>
            <span class="data">Data Peserta Prakerin RetGoo</span>
          </h1>
          <p>
            <span class="data2">Data Peserta yang Akan Melaksanakan Prakerin <br> di PT. RetGoo Sentris Informa</span>
          </p>
          <form action="/form" method="POST">
            @csrf
          <Button class="btn red" >Enter Form </Button>
        </div>
        <div class="imagepc">
          <img src="pc.png" alt="" width="90%">
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


        <!-- Web page script -->
    <script src="/js/app.js"></script>
    
        <!-- Ion icons CDN -->
    <script
          type="module"
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    </body>
</html>
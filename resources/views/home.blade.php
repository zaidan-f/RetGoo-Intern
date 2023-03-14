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
        <a href="#" class="logo">
          <h1>
            <span class="title">Laravel</span><span class="test">Test</span>
            <span class="punch">&#x1F44A;</span>
          </h1>
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
            <span class="Welcome">Welcome <b>{{ auth()->user()->name ?? '' }}</b> To The</span> <br/>
            <span class="Site"> Testing Site!</span>
          </h1>
          <p>
            Here are a video about Laravel Framework in 100 seconds
          </p>
          <form action="/logout" method="POST">
            @csrf
          <Button class="btn red" >Logout </Button>
        </div>
        <div class="i-frame">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rIfdg_Ot-LI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </section>
<br>
<br>
<br>
    <!-- About section -->
    <section class="about" id="about">
        <h3>Welcome To Testing Site</h3>
        <p>
            We're excited to have you join our community and explore all that we have to offer.
        </p>
  
        <h3> Thank you for choosing our site, and we hope you enjoy your time with us!</h3>
        <p>
            Whether you're here to connect with like-minded individuals, learn something new, or just have fun, we've got you covered.
        </p>
    </section>


    <!-- Footer -->
    <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Me and Myself 2022</span></strong>. All Rights Reserved
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
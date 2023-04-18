<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ auth()->user()->name ?? '' }}</title>
        <link rel="stylesheet" type="text/css" href="/css/account.css">    
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    
        <title>Account Page</title>
      </head>
<body>
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

    <section class="banner">
    </section>

    <section class="profile">
      <img class="accimg" src="/avatars/{{ auth::user()->avatar }}" alt="">
    <div class="namaprofil">
      <h1>
        <span class="name">{{ auth()->user()->name ?? '' }}</span>
      </h1>
      <a href="/profile"><Button class="btn" formaction="/profile">Edit Profil<ion-icon name="pencil-sharp" class="pencil"></ion-icon></Button></a>
    </div>
    </section>

    <section class="details">
    <div class="data">
      <p><ion-icon name="mail" class="icondt"></ion-icon>{{ auth()->user()->email ?? '' }}</p><br>
      <p><ion-icon name="business" class="icondt"></ion-icon>{{ auth()->user()->sekolah ?? '' }} </p><br>
      <p><ion-icon name="laptop-outline" class="icondt"></ion-icon>{{ auth()->user()->jurusan ?? '' }}</p><br>
      <p><ion-icon name="calendar-sharp" class="icondt"></ion-icon>{{ auth()->user()->tgl_mulai ?? '' }}  Sampai  {{ auth()->user()->tgl_selesai ?? '' }}</p><br>
      <p><ion-icon name="home" class="icondt"></ion-icon>{{ auth()->user()->alamat ?? '' }}</p><br>
      <p><ion-icon name="call" class="icondt"></ion-icon>{{ auth()->user()->telpon ?? '' }}</p><br>
    </div>
    </section>

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
    

      <script src="/js/app.js"></script>
    
      <script
              type="module"
              src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
      </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Internship-System</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
    <div class="form">
        <div class="form-content">
            <h1>Data Peserta Prakerin RetGoo</h1>
            <p>Data Peserta Prakerin  di PT.RetGoo Sentris Informa</p>
            <div class="title">
                <h3>1. Personal Information</h3>
            </div>
            <div class="content">
                <input type="text" placeholder="Nama Lengkap ">
            </div>
            <div class="content">
                <input type="text" placeholder="Tempat Lahir ">
            </div>
            <div class="content">
                <input type="date" placeholder="Tanggal Lahir ">
            </div>
        <div class="display">
            <div class="radio">
                <label class="label">Jenis Kelamin</label><br>
                <br>
                <input type="radio" placeholder="Jenis Kelamin " name="jenis_kelamin">Laki-laki<br>
                <input type="radio" placeholder="Jenis Kelamin " name="jenis_kelamin">Perempuan
            </div>
            <br>
            <div class="pilihan">
                <label for="">Agama</label><br>
                <br>
                <input type="radio" placeholder="Agama " name="agama">Islam
                <input type="radio" placeholder="Agama " class="cbl" name="agama">Katolik
                <input type="radio" placeholder="Agama " class="cbl" name="agama">Protestan<br>
                <input type="radio" placeholder="Agama " name="agama">Hindu
                <input type="radio" placeholder="Agama " name="agama" class="b">Budha
                <input type="radio" placeholder="Agama " name="agama" class="u">Konghucu
            </div>
        </div>
            <div class="content">
                <input type="text" placeholder="NISN">
            </div>
            <div class="content">
                <input type="text" placeholder="No Telepon ">
            </div>
            <div class="content">
                <input type="text" placeholder="No Whatsapp ">
            </div>
            <div class="content">
                <input type="text" placeholder="Akun Telegram">
            </div>
            <div class="content">
                <input type="text" placeholder="Alamat Email ">
            </div>
            <div class="content">
                <input type="text" placeholder="Alamat Domisili ">
            </div>
            <br>
            <div class="disla">
            <div class="content">
                <label for="">Jurusan Siswa Prakerin </label><br>
                <br>
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan">Rekayasa Perangkat Lunak (RPL)
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan" class="tkj">Teknik Komputer dan Jaringan (TKJ)<br>
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan">Multimedia
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan" class="s">Animasi<br>
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan">Administrasi Perkantoran
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan" class="dkv">Desain Komunikasi Visual<br>
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan">Akuntansi
                <input type="radio" placeholder="Jurusan Siswa Prakerin *" name="jurusan" class="i">Sistem Informasi Jaringan Aplikasi (SIJA)<br>
            </div>
        </div>
        <div class="title">
            <h3>2. Data Orang Tua</h3>
        
        <div class="title">
            <label>Data Ayah</label>
            <p class="d">Memberikan informasi mengenai Ayah dari siswa Prakerin</p>
        </div>

        <div class="content">       
            <input type="text" name="nama" placeholder="Nama Ayah" required="">
        </div>

        <div class="content">        
            <input type="text" name="pekerjaan" placeholder="Pekerjaan" required="">
        </div>

        <div class="content">       
            <input type="text" name="nohp" placeholder="No HP/WA" required="">
        </div>

        <div class="content">
                <input type="text" name="alamat" placeholder="Alamat" required="">
        </div>
<br>
        <div class="title">
            <label>Data Ibu</label>
            <p class="d">Memberikan informasi mengenai Ibu dari siswa Prakerin</p>
        </div>

        <div class="content">
            <input type="text" name="nama" placeholder="Nama Ayah" required="">
        </div>

        <div class="content">
            <input type="text" name="pekerjaan" placeholder="Pekerjaan" required="">
        </div>

        <div class="content">
            <input type="text" name="nohp" placeholder="No HP/WA" required="">
        </div>

        <div class="content">
            <input type="text" name="alamat" placeholder="Alamat" required="">
        </div>

        <div class="title">
            <h3>3. Data Sekolah</h3>
            <p class="d"> Informasi terkait Sekolah asal siswa Prakerin</p>
        </div>

        <div class="content">
            <input type="text" value="" placeholder="Nama Sekolah" required>
        </div>

        <div class="content">
            <input type="text" value="" placeholder="Alamat Sekolah" required>
        </div>

        <div class="content">
            <input type="text" value="" placeholder="Nama Kepala Sekolah" required>
        </div>

        </div>

        <div class="title">
            <h3>4. Pembimbing Prakerin Sekolah</h3>
            <p class="d"> Informasi terkait dengan pembimbing prakerin dari sekolah</p>
        </div>
        <div class="content">
            <input type="text" value="" placeholder="Nama Pembimbing" required>
        </div>
        <div class="content">
            <input type="text" value="" placeholder="No Handphone" required>
        </div>
        <div class="content">
            <input type="text" value="" placeholder="Alamat Pembimbing" required>
        </div>
        <div class="title">
            <h3>5. Penyelengaraan Prakerin</h3>
            <p class="d">Memberikan informasi terkait dengan penyelenggaraan Prakerin di PT RetGoo Sentris Informa </p>
            <p for="Masuk">Tanggal Masuk</p>
        </div>
        <div class="content">
            <input type="date" placeholder="Tanggal Masuk" id="Masuk" name="Tanggal Masuk">
        </div>
        <div class="title">
            <p for="Selesai">Tanggal Selesai</p>
        </div>
        <div class="content">
            <input type="date" placeholder="Tanggal Selesai" id="Keluar" name="Tanggal Selesai">
        </div>
        <div class="content">
            <input type="text" placeholder="Nama Pembimbing" id="Pembimbing" name="Nama Pembimbing">
        </div>
       
        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="title">
            <h3>6. Lampiran</h3>
            <p  class="d">Upload file yang dibutuhkan pada tempat yang telah disediakan.</p>
            </div>   
            <div class="tulis">    
                <label >Portofolio</label>
                <p  class="d">Menyertakan project/karya yang pernah dibuat sebelumnya untuk menunjukkan kompetensi yang dimiliki. Misalkan untuk BPA dan Engineering portofolio berupa screenshoot aplikasi yang pernah dibuat. Untuk Graphic designer menyertakan desain visual yang pernah dibuat. Disarankan dalam format PDF.</p>
                <input type="file" name="file">
            </div>
            <br>
            <div class="tulis">
                <label class="tulis">Foto (Formal dan Close Up)</label><br><br>
                <input type="file" id="file" style="margin-bottom: 20px;">
            </div>
            <button class="btnkirim" type="submit">Kirim</button>
        </form>
    </div>
    </div>
</body>
</html>
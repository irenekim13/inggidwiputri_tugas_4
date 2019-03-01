<html>
<head>
    <title>Himpunan Mahasiswa Fisika|UNAND</title>
    <style>
body {
     font-family: sans-serif;
    background: #d5f0f3;
}
 
h1{
    text-align: center;
    /*ketebalan font*/
    font-weight: 300;
}
 

.content {
     width: 80%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     background-image: url("download.JPEG");
     padding: 30px;
     text-align: left;
}  
.tulisan_login{
    text-align: center;
    /*membuat semua huruf menjadi kapital*/
    text-transform: uppercase;
}
 
.kotak_login{
    width: 350px;
    background: white;
    /*meletakkan form ke tengah*/
    margin: 80px auto;
    padding: 30px 20px;
}
 
label{
    font-size: 11pt;
}
 
.form_login{
    /*membuat lebar form penuh*/
    box-sizing : border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
 
.tombol_login{
    background: #46de4b;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}

.tombol_signup{
    background: #ff0000;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}
 
.link{
    color: #232323;
    text-decoration: none;
    font-size: 10pt;
}
</style>
  
</head>
<body>
<!--     <h1>HIMPUNAN MAHASISWA FISIKA <br/> UNIVERSITAS ANDALAS</h1>
    <!-- cek pesan notifikasi -->
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
 -->    </body>
    <div class="content">
    <div class="kotak_login">


 <p class="tulisan_login"> Selamat Datang <br> Silahkan Log in atau sign up </p>
 
        <form method="post" action="cek_login.php">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="Password ..">
 
            <input type="submit" class="tombol_login" value="LOGIN">
 
            <br/>
            <br/>
            <center>
                 <input type="submit" class="tombol_signup" value="SIGN UP">
                 <a href="form_daftar.php">Daftar Baru</a>
             </center>
        </form>
 
 </div>    

</body>
    
 
</body>
</html>
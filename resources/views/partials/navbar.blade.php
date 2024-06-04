<nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto {{ ($title === "Home" ? 'active' : '') }}" href="/">Home</a></li>
      <li><a class="nav-link scrollto {{ ($title === "Pendaftaran" ? 'active' : '') }}" href="pendaftaran">Formulir Pendaftaran</a></li>
      <li><a class="nav-link scrollto {{ ($title === "Cek-bukti" ? 'active' : '') }}" href="cek-bukti">Bukti Pendaftaran</a></li>
      <li><a class="nav-link scrollto {{ ($title === "Verifikasi" ? 'active' : '') }}" href="verifikasi">Verifikasi Berkas</a></li>
      <li><a class="nav-link scrollto {{ ($title === "Hasil" ? 'active' : '') }}" href="hasil?limit=10">Hasil Akhir</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
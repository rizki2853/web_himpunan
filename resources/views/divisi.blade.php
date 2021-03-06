@extends('layout/main_layout')
@section('body')

  <section class="hero-section container">
    <div class="hero-background">
      <video autoplay="" loop="" class="hero__background-video hero__background-video--light">
        <source src="assets/video-bg-light.mp4" type="video/mp4">
      </video>
    </div>
    <div class="hero-left">
      <h1>DIVISI HMIF</h1>
      <div class="tagline">
        <span>‘‘</span>
        <p>Informatika Beda! Informatika Satu! <br>
          <span>Informatika Beda tapi Satu!</span>
        </p>
      </div>
      <button class="button cta-button" onclick="location='#divisi'">
        <span>Lihat Divisi</span>
      </button>
    </div>
    <div class="hero-right">
      <img src="assets/logo_hmif.svg" alt="">
      <img src="assets/logo_ifunram.png" alt="">
      <img src="assets/logo_unram.png" alt="">
    </div>
  </section>
  <span class="anchor" id="divisi"></span>
  <div class="anchor" id="divisi-pemda"></div>
  <section class="filter-division container">
    @foreach($divisis as $divisi)
      <button class="btn-pill {{ ($divisi->divisi_name === 'pemda') ? 'active' : '' }}" id="btn-{{ $divisi->divisi_name }}" onclick="changeDivisionFilter('{{ $divisi->divisi_name }}')">{{ $divisi->divisi_name }}</button>
    @endforeach
  </section>

  <!-- Pemda -->
  <div id="pemda">
    <section class="divisi container" id="divisi-pemda">
      <div class="divisi-left">
        <img src="assets/pemda.png" alt="Divisi Pemda 2022">
        <p>Divisi Pemberdayaan Anggota 2022</p>
      </div>
      <div class="divisi-right">
        <div class="divisi-item what-is-hmif">
          <h2>TUGAS DIVISI PEMBERDAYAAN ANGGOTA</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis suscipit esse, eos sequi dolor aliquid similique mollitia repudiandae atque aliquam ratione animi dolorem eum id commodi dolorum eius provident tempora.</p>
        </div>
      </div>
    </section>
    <section class="program container" id="program-pemda">
      <h2>PROGRAM KERJA</h2>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">1. PELATIHAN</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. Algoritma & Pemrograman</div>
          <div class="program-card">
            2. Pemrograman Web Dasar
          </div>
          <div class="program-card">
            3. Pengolahan Citra Digital
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">2. KOMUNITAS</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. Desain
          </div>
          <div class="program-card">
            2. E-Talk
          </div>
          <div class="program-card">
            3. Software Development
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">3. SOSIALISASI LAB</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item left">
          <div class="program-title">4. KELOMPOK BELAJAR</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
      </div>
    </section>
    <div class="anchor" id="structure-pemda"></div>
    <section class="org-structure container">
      <h2>ANGGOTA DIVISI PEMDA HMIF 2022</h2>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/pemda-indira.png" alt="">
          <h3>Indra Yunia</h3>
          <p>Coordinator<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/pemda-nurul.png" alt="">
          <h3>Nurul Wahida</h3>
          <p>Sekretaris<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/pemda-ari.png" alt="">
          <h3>M. Ari Rifqi</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/pemda-uno.png" alt="">
          <h3>Pramudya Eko N.T</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/pemda-ran.png" alt="">
          <h3>Pangeran M.W</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/pemda-hasbi.png" alt="">
          <h3>Hasbiallah Al Amin</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/pemda-daden.png" alt="">
          <h3>Daden Kasandi</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/pemda-ghine.png" alt="">
          <h3>Ghina Kamilah Ramdahni</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/pemda-indah.png" alt="">
          <h3>Indah Annisa Putri</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
    </section>
  </div>

  <!-- ADVO -->
  <div class="hide" id="advokasi">
    <section class="divisi container" id="divisi-advo">
      <div class="divisi-left">
        <img src="assets/advo.png" alt="Divisi Advokasi 2022">
        <p>Divisi Advokasi 2022</p>
      </div>
      <div class="divisi-right">
        <div class="divisi-item what-is-hmif">
          <h2>TUGAS DIVISI ADVOKASI</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis suscipit esse, eos sequi dolor aliquid similique mollitia repudiandae atque aliquam ratione animi dolorem eum id commodi dolorum eius provident tempora.</p>
        </div>
      </div>
    </section>
    <section class="program container" id="program-advo">
      <h2>PROGRAM KERJA</h2>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">1. ?????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. ??????</div>
          <div class="program-card">
            2. ?????
          </div>
          <div class="program-card">
            3. ?????????
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">2. ???????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. ????
          </div>
          <div class="program-card">
            2. ???????
          </div>
          <div class="program-card">
            3. ???????
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">3. ?????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item left">
          <div class="program-title">4. ????????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
      </div>
    </section>
    <div class="anchor" id="structure-advo"></div>
    <section class="org-structure container">
      <h2>ANGGOTA DIVISI ADVOKASI HMIF 2022</h2>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/advo-dinan.png" alt="">
          <h3>Lalu Herdinan Eka T.</h3>
          <p>Coordinator<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/advo-fahrez.png" alt="">
          <h3>Fahreza Aldi Kusuma</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/advo-rafli.png" alt="">
          <h3>Rafli Gunawan Hadi</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/advo-alfiana.png" alt="">
          <h3>Alfiana Ayuan Sari</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/advo-alisya.png" alt="">
          <h3>Alisyia Kornelia U.</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/advo-daus.png" alt="">
          <h3>Muh. Firdaus</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/advo-nadya.png" alt="">
          <h3>Nadya Amara</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/advo-nurun.png" alt="">
          <h3>Nurun Latifah</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
    </section>
  </div>

  <!-- ORGAN -->
  <div class="hide" id="organisasi">
    <section class="divisi container" id="divisi-organ">
      <div class="divisi-left">
        <img src="assets/organ.png" alt="Divisi Organisasi 2022">
        <p>Divisi Organisasi 2022</p>
      </div>
      <div class="divisi-right">
        <div class="divisi-item what-is-hmif">
          <h2>TUGAS DIVISI ORGANISASI</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis suscipit esse, eos sequi dolor aliquid similique mollitia repudiandae atque aliquam ratione animi dolorem eum id commodi dolorum eius provident tempora.</p>
        </div>
      </div>
    </section>
    <section class="program container" id="program-organ">
      <h2>PROGRAM KERJA</h2>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">1. ?????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. ??????</div>
          <div class="program-card">
            2. ?????
          </div>
          <div class="program-card">
            3. ?????????
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">2. ???????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. ????
          </div>
          <div class="program-card">
            2. ???????
          </div>
          <div class="program-card">
            3. ???????
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">3. ?????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item left">
          <div class="program-title">4. ????????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
      </div>
    </section>
    <div class="anchor" id="structure-organ"></div>
    <section class="org-structure container">
      <h2>ANGGOTA DIVISI ORGANISASI HMIF 2022</h2>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/organ-aura.png" alt="">
          <h3>Aura Trisdayanti.</h3>
          <p>Coordinator<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/organ-husnu.png" alt="">
          <h3>Husnul Khotimah</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/organ-fira.png" alt="">
          <h3>Novianda Shafira S.Y</h3>
          <p>Anggota<br>(Angkatan 2019)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/organ-lala.png" alt="">
          <h3>Lala Rianti L. P</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/organ-putri.png" alt="">
          <h3>Nur Rahmah Utami P.</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/organ-ami.png" alt="">
          <h3>Nurul Umami</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/organ-arsyad.png" alt="">
          <h3>Ahmad Arsyad S. M</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/organ-nova.png" alt="">
          <h3>M. Halimudin Nova</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/organ-zidan.png" alt="">
          <h3>Mursyidhan Ariefbillah</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
    </section>
  </div>

  <!-- KESEK -->
  <div class="hide" id="kesekretariatan">
    <section class="divisi container" id="divisi-kesek">
      <div class="divisi-left">
        <img src="assets/kesek.png" alt="Divisi Kesekretariatan 2022">
        <p>Divisi Kesekretariatan 2022</p>
      </div>
      <div class="divisi-right">
        <div class="divisi-item what-is-hmif">
          <h2>TUGAS DIVISI KESEKRETARIATAN</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis suscipit esse, eos sequi dolor aliquid similique mollitia repudiandae atque aliquam ratione animi dolorem eum id commodi dolorum eius provident tempora.</p>
        </div>
      </div>
    </section>
    <section class="program container" id="program-kesek">
      <h2>PROGRAM KERJA</h2>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">1. ?????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. ??????</div>
          <div class="program-card">
            2. ?????
          </div>
          <div class="program-card">
            3. ?????????
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">2. ???????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item right">
          <div class="program-card">
            1. ????
          </div>
          <div class="program-card">
            2. ???????
          </div>
          <div class="program-card">
            3. ???????
          </div>
        </div>
      </div>
      <div class="program-wrapper">
        <div class="program-item left">
          <div class="program-title">3. ?????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
        <div class="program-item left">
          <div class="program-title">4. ????????</div>
          <div class="program-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse possimus pariatur totam dolore sapiente illo laborum aliquam ab explicabo quos, eum placeat velit doloribus. Tenetur nulla unde maxime non.</p></div>
        </div>
      </div>
    </section>
    <div class="anchor" id="structure-kesek"></div>
    <section class="org-structure container">
      <h2>ANGGOTA DIVISI KESEKRETARIATAN HMIF 2022</h2>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/sekret-dedy.png" alt="">
          <h3>Dedy Razuna A.</h3>
          <p>Coordinator<br>(Angkatan 2019)</p>
        </div>
        <div class="structure-card">
          <img src="assets/sekret-lanang.png" alt="">
          <h3>M. Lanang Agung A.</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/sekret-kholilul.png" alt="">
          <h3>M. Kholilul Adrian</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/sekret-anggun.png" alt="">
          <h3>Anggun Dwi Rizkika</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/sekret-yuni.png" alt="">
          <h3>Wahyuningsih</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/sekret-latifatul.png" alt="">
          <h3>Lathifatul Mahabbati</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
      <div class="org-structure-wrapper">
        <div class="structure-card">
          <img src="assets/sekret-agung.png" alt="">
          <h3>Nugroho Agung Prasetiyo</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
        <div class="structure-card">
          <img src="assets/sekret-azam.png" alt="">
          <h3>Moh. Azzam Al Husaini</h3>
          <p>Anggota<br>(Angkatan 2020)</p>
        </div>
      </div>
    </section>
  </div>
@endsection

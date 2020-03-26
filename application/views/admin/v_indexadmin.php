  <!-- <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        <div class="container">
          <h3>Home</h3>
          <p>Ini adalah halaman home</p>
          <div class="card" style="width:200px">
            <img class="card-img-top" src="<?php echo base_url();?>img/avatar/profile-pic.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>menu satu</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>menu dua</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Menu 3</h3>
      <p>menu tiga  </p>
    </div>
  </div>
</div> -->
<div class="container-fluid">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#dasboard">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#masterdata">Master Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#pengolahandata">Pengolahan Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#profil">Profil</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="dasboard" class="container tab-pane active"><br>
      <!-- isi -->
      <h3>Dashboard</h3>
      <p>Ini adalah halaman home</p>
        <!-- bagi dua layer -->
        <div class="row">
          <div class="col-sm-3">
            <div class="card" style="width:200">
              <img class="card-img-top" src="<?php echo base_url();?>img/avatar/profile-pic.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 style="justify" class="card-title">Deni</h4>
                <p class="card-text">Administrator</p>
                <a href="#" class="btn btn-success btn-block">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="container">
              <!-- tampilkan view -->
            <div class="container-fluid" align="center">
              <span class="btn btn-app btn-lg btn-secondary no-hover">
                  <span class="line-height-1 bigger-170 blue"> 0 </span>

                  <br />
                  <span class="line-height-1 smaller-90"> Dilihat </span>
              </span>

              <span class="btn btn-app btn-lg btn-warning no-hover">
                  <span class="line-height-1 bigger-170"> 0 </span>

                  <br />
                  <span class="line-height-1 smaller-90"> Disukai </span>
              </span>

              <span class="btn btn-app btn-lg btn-success no-hover">
                  <span class="line-height-1 bigger-170"> 0 </span>

                  <br />
                  <span class="line-height-1 smaller-90"> Pendaftar </span>
              </span>

              <span class="btn btn-app btn-lg btn-primary no-hover">
                  <span class="line-height-1 bigger-170"> 0 </span>

                  <br />
                  <span class="line-height-1 smaller-90"> Diterima </span>
              </span>

              <span class="btn btn-app btn-lg btn-danger no-hover">
                  <span class="line-height-1 bigger-170"> 0 </span>

                  <br />
                  <span class="line-height-1 smaller-90"> Ditolak </span>
              </span>

              <span class="btn btn-app btn-lg btn-info no-hover">
                  <span class="line-height-1 bigger-170"> 0 </span>

                  <br />
                  <span class="line-height-1 smaller-90"> Album </span>
              </span>
            </div>

              <br>
              <br>
              <!-- tabel data Administrator -->
              <table class="table table-bordered table-sm">
                <tbody>
                  <tr>
                    <td class="bg-light text-dark" align="right" style="width:200px">Username</td>
                    <td><?php echo $this->session->userdata("nama"); ?></td>
                  </tr>
                  <tr>
                    <td class="bg-light text-dark" align="right">Lokasi</td>
                    <td>Talang Padang, Tanggamus</td>
                  </tr>
                  <tr>
                    <td class="bg-light text-dark" align="right">Usia</td>
                    <td>32</td>
                  </tr>
                  <tr>
                    <td class="bg-light text-dark" align="right">Terdaftar</td>
                    <td>04-05-2018</td>
                  </tr>
                  <tr>
                    <td class="bg-light text-dark" align="right">Status</td>
                    <td>Online</td>
                  </tr>
                  <tr>
                    <td class="bg-light text-dark" align="right">Tentang Saya</td>
                    <td>Administrator Pendaftaran Siswa Baru NU</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    <div id="masterdata" class="container tab-pane fade"><br>
      <!-- isi -->
      <h3>Master Data</h3>
      <p>Ini adalah halaman master data</p>
          <!-- insert -->
          <div class="row">
            <div class="col-sm-3">
              <div id="accordion">
                <div class="card">
                  <div class="card-header text-light">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                      Administrator
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                      ini halaman master administrator
                    </div>
                  </div>
                </div>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header text-light">
                      <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        Master Informasi
                      </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                        ini halaman Master informasi
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-9">

            </div>
          </div>
        </div>
    </div>
    

  </div>
      <div id="pengolahandata" class="container tab-pane fade"><br>
      <!-- isi -->
      <h3>Pengolahan Data</h3>
      <p>Ini adalah halaman pengolahan data</p>
          <!-- insert -->
          <div class="row">
            <div class="col-sm-3">
              <button type="button" class="btn btn-primary btn-block">Button 1</button>
              <button type="button" class="btn btn-default btn-block">Button 2</button>
            </div>
            <div class="col-sm-9">
              menu kanan
            </div>
          </div>
    </div><br>
    <div id="profil" class="container tab-pane fade"><br>
      <!-- isi -->
      <h3>Profil</h3>
      <p>Ini adalah halaman profil</p>
          <!-- insert -->
          <div class="row">
            <div class="col-sm-3">
              <button type="button" class="btn btn-primary btn-block">Button 1</button>
              <button type="button" class="btn btn-default btn-block">Button 2</button>
            </div>
            <div class="col-sm-9">
              menu kanan
            </div>
          </div>
    </div><br>
</div>

<?php
    include('_partials/header.php');
?>
    <?php
        include('_partials/navbar.php');
    ?>

<body>
  <div class="wrapper" id="wrapper">
    <header>
      <div class="banner row" id="banner">
        <div class="parallax text-center" style="background-image: url(assets/images/<?php echo $biografi['foto'] ?>);">
          <div class="parallax-pattern-overlay">
            <div class="container text-center" style="height:600px;padding-top:170px;">
              <a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="<?= base_url('assets/images/3.png'); ?>" alt=""/></a>
              <h2 class="intro"><a href="index.html"><?php echo $biografi['nama_lengkap'] ?></a></h2>
            </div>
          </div>
        </div>
	  </div>
</header>
      
    

    <!--aboutus-->
   <section id="biodata" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="<?= base_url('assets/images/team/4.jpg'); ?>" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hallo Teman Teman!</h3>
              <p><?php echo $biografi['deskripsi']?></p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Name : </span> <span class="pro-detail"><?php echo $biografi['nama_lengkap'];?></span></li>
                  <li><span class="pro-title"> Jenis Kelamin : </span> <span class="pro-detail"><?php echo $biografi['jenis_kelamin'];?></span></li>
                  <li><span class="pro-title"> Tempat Tanggal Lahir : </span> <span class="pro-detail"><?php echo $biografi['ttl'];?></span></li>
                  <li><span class="pro-title"> Agama : </span> <span class="pro-detail"><?php echo $biografi['agama'];?></span></li>
                  <li><span class="pro-title"> Alamat : </span> <span class="pro-detail"><?php echo $biografi['alamat'];?></span></li>
                  <li><span class="pro-title"> Kota  : </span> <span class="pro-detail"><?php echo $biografi['kota'];?>, Indonesia</span></li>
                  <li><span class="pro-title"> E-mail : </span> <span class="pro-detail">nandadhika01@gmail.com</span></li>
                  <li><span class="pro-title"> Nomor HP : </span> <span class="pro-detail"><?php echo $biografi['no_telp'];?></span></li>
                </ul>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </section>


    <!--skills-->
    <section class="specialties" id="specialties">
      <div class="container">
        <div class="heading text-center">
          <h2>Skill </h2>
          <h3>Dibawah ini adalah beberapa skill yang saya pelajari saat menjadi pelajar di SMK 5 MALANG, walaupun masih belum bisa semuanya, tetapi saya akan selalu berusaha agar bisa mendalami semuanya</h3>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s" ">
					<div class="skill ">

            <?php foreach ($skill as $data):?> 
						<div class="progress-wrap ">
							<h3><?php echo $data->nama_skill?></h3>
							<div class="progress ">
							  <div class="progress-bar color1 " role="progressbar " aria-valuenow="<?php echo $data->value?> " aria-valuemin="0 " aria-valuemax="100 " style="width: <?php echo $data->value?>% ">
								<span class="bar-width "><?php echo $data->value?>%</span>
							  </div>
							</div>
						</div>
            <?php endforeach; ?>
					</div>
				</div>

				<div class="col-md-6 wow fadeInRight " data-wow-offset="0 " data-wow-delay="0.6s "">
            <img src="<?= base_url('assets/images/6.jpg" class="img-responsive');?>">
          </div>
        </div>
      </div>

      


    <!--portfolio-->
    <section class="gallery" id="gallery">
      <div class="container">
        <div class="heading text-center">
          <h2>Portfolio</h2>
          <h3>Ini adalah beberapa portofolio saya </h3>
        </div>

        <div id="grid-gallery" class="grid-gallery">
          <section class="grid-wrap">
            <ul class="grid">
              <li class="grid-sizer"></li>
              <!-- for Masonry column width -->
              <!-- <?php foreach ($work as $data):?> 
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/<?php echo $data->gambar?>'); ?>" alt="" />
                  <figcaption>
                    <h3><?php echo $data->nama_project?></h3>
                    <p><?php echo $data->jenis_project?></p>
                  </figcaption>
                </figure>
              </li>
              <?php endforeach;?> -->

              
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/aseandnnew.jpg'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Promosi Game</h3>
                    <p>Dari game Dragon Nest</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revo 9.png'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Promosi Game</h3>
                    <p>Dari game Dragon Nest</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revo 10.png'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Promosi Game</h3>
                    <p>Dari game Dragon Nest</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revo11.png'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Promosi Game</h3>
                    <p>Dari game Dragon Nest</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/fia ub.jpg'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Banner </h3>
                    <p>FIA UB MALANG</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/ub.jpg'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Banner</h3>
                    <p>FIA UB MALANG</p>
                  </figcaption>
                </figure>
              </li>

              <li>
                <figure>
                  <img src="<?= base_url('assets/images/ub2.jpg'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Banner</h3>
                    <p>FIA UB MALANG</p>
                  </figcaption>
                </figure>
              </li>

              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revjek3.jpg'); ?>" alt="" />
                  <figcaption>
                    <h3>Desain Background </h3>
                    <p>Aplikasi Revjek</p>
                  </figcaption>
                </figure>
              </li>

            </ul>
          </section>
          <!-- // end small images -->

          <section class="slideshow">
            <ul>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/aseandnnew.jpg'); ?>" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revo 9.png'); ?>" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revo 10.png'); ?>" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revo11.png'); ?>" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/fia ub.jpg'); ?>" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="<?= base_url('assets/images/ub.jpg'); ?>" alt="" />
                </figure>
              </li>

              <li>
                <figure>
                  <img src="<?= base_url('assets/images/ub2.jpg'); ?>" alt="" />
                </figure>
              </li>

              <li>
                <figure>
                  <img src="<?= base_url('assets/images/revjek3.jpg'); ?>" alt="" />
                </figure>
              </li>
            </ul>
            <nav>
              <span class="icon nav-prev"></span>
              <span class="icon nav-next"></span>
              <span class="icon nav-close"></span>
            </nav>
            <div class="info-keys icon">Navigate with arrow keys</div>
          </section>
          <!-- // end slideshow -->
        </div>
        <!-- // grid-gallery -->
      </div>
    </section>

    <!--education-->
    <section class="feedback" id="feedback">
      <div class="container">
        <div class="heading">
          <h2>Pendidikan</h2>
          <h3>Ini adalah pendidikan terakhir saya hingga saat ini.</h3>
        </div>
      </div>

      <div class="container">
      <?php foreach ($pendidikan as $data):?> 
        <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="text-center">
            <div class="hi-icon-wrap hi-icon-effect">
              <h4><?php echo $data->nama_sekolah?></h4>
              <h5><?php echo $data->tahun_lulus?></h5>
              <i class="fa fa-book"></i>
              
            </div>
          </div>
        </div>
<?php endforeach; ?>
      </div>
    <!--contact-->
    <section class="contact" id="contact">
      <div class="container">
        <div class="heading">
          <h2>Kontak Saya</h2>
          <h3>Jika ada yang perlu ditanyakan silahkan kontak saya </h3>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="contact-info">
            <div class="col-md-5">
              <h4>Info Kontak Saya</h4>
              
              <ul>
                <li><i class="fa fa-home fa-2x"></i> Jl. Hamid Rusdi gg 6b/2048</li>
                <li><i class="fa fa-phone fa-2x"></i> 081553939906</li>
                <li><i class="fa fa-envelope fa-2x"></i> nandadhika01@gmail</li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="contact submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!--footer-->
    <section class="footer" id="footer">
      <p class="text-center">
        <a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
      </p>
      <div class="container">
        <ul>
          <li><a href="https://www.facebook.com/strawberry.is.pink"><i class="fa fa-facebook"></i></a></li>
          
          <li><a href="https://api.whatsapp.com/send?phone=6281553939906"><i class="fa fa-mobile"></i></a></li>
          <li><a href="https://www.instagram.com/n.andadick22"><i class="fa fa-instagram "></i></a></li>
          
        </ul>
       
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyResume
          -->
         
        </div>
      </div>
    </section>

 


</body>

<?php
    include('_partials/script.php');
?>
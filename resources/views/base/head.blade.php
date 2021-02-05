<?php
use TCG\Voyager\Models\Post;
$posts = TCG\Voyager\Models\Post::all();
?>
<link rel="stylesheet" href="/icofont/icofont.min.css">

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset("/img/profile-img.jpg")}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/">Sam Boesjes</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.linkedin.com/in/sam-boesjes/" class="linkedin"><i class="icofont-linkedin"></i></a>
          <a href="https://www.instagram.com/sam.boesjes/" class="instagram"><i class="icofont-instagram"></i></a>
          <a href="https://www.facebook.com/sam.boesjes" class="facebook"><i class="icofont-facebook"></i></a>
          <a href="https://twitter.com/SamBoesjes" class="twitter"><i class="icofont-twitter"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="icofont-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="icofont-user-suited"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="icofont-ui-file"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio"><i class="icofont-address-book"></i> Portfolio</a></li>
          <li><a href="#contact"><i class="icofont-envelope"></i> Contact</a></li>
          <li><a href="/admin"><i class="icofont-lock"></i>Login in</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Sam Boesjes</h1>
      <p>I'm a <span class="typed" data-typed-items="Worker, Developer, Music lover, Sensualist"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hello, my name is Sam Boesjes. I'm doing the vocational college Webdeveloper at the Grafisch Lysceam Utrecht.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Lqyt1O2fj8zoJ24rF4G7Fl6wnBrX08i9" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer.</h3>
            <p class="font-italic">
              Here is some basic information about me.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 January 2003</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.u534268.gluweb.nl</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +31 6 44290066</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Utecht, Netherlands</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 18</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> MBO</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> sam.boesjes@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
              If you want to know more about me, feel free to send me a message I often answer them quickly.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>
            I have been learning web development for 2 years now but I still have a lot to learn before it is good enough.
          </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>You can look at my resume right here, it seemed easier that everyone had everything right at once.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Sam Boesjes</h4>
              <p><em>I am mainly good at working together. I get along with almost everyone and I always have a smile on my face.</em></p>
              <ul>
                <li>Notengaard 18, 3941LW Doorn</li>
                <li>+31 6 44290066</li>
                <li>sam.boesjes@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Vocational college Webdeveloper</h4>
              <h5>2019 - 2022</h5>
              <p><em>Grafisch lyceam Utrecht</em></p>
              <p>Not yet achieved.</p>
            </div>
            <div class="resume-item">
              <h4>Preparatory secondary vocational education</h4>
              <h5>2015 - 2019</h5>
              <p><em>Schoonoord MAVO Doorn</em></p>
              <ul>
                <li>Grade average: 7</li>
                <li>Profile: Techniek</li>
              </ul>            
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Work Experience</h3>
            <div class="resume-item">
              <h4>Multifuncioneel</h4>
              <h5>2020 - NOW</h5>
              <p><em>Albert Heijn Doorn</em></p>
              <ul>
                <li>Good salary for students.</li>
                <li>A lot of different work.</li>
                <li>Great company and nice colleagues.</li>
                <li>I work there about 20 hours a week.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Attendant</h4>
              <h5>2018 - 2020</h5>
              <p><em>Oranjerie Doorn</em></p>
              <ul>
                <li>Great company and nice colleagues.</li>
                <li>I worked almost every weekend and sometimes during the week.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Dishwasher</h4>
              <h5>2017 - 2018</h5>
              <p><em>Oranjerie Doorn</em></p>
              <ul>
                <li>Great company and nice colleagues.</li>
                <li>I worked almost every weekend and sometimes during the week.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Here are all my important and fun projects.</p>
        </div>

        <!-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100"> -->
          <div class="container">
            <br><br>
            <div class="row">
              @foreach($posts as $post)
              <div class="col-md-3">
                <a href="/post/{{ $post->slug }}">
                  <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                  <span>{{ $post->title }}</span>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>
            If you would like to ask me something, you can always send a message.
          </p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Notengaard 18, 3941LW Doorn</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>sam.boesjes@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+31 6 44290066</p>
              </div>

              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1QzYpG6gwCbmLfynSs4p6_tygGmf9uRqy" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sam Boesjes</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{ asset("/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{ asset("/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
  <script src="{{ asset("/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{ asset("/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
  <script src="{{ asset("/vendor/counterup/counterup.min.js")}}"></script>
  <script src="{{ asset("/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{ asset("/vendor/venobox/venobox.min.js")}}"></script>
  <script src="{{ asset("/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
  <script src="{{ asset("/vendor/typed.js/typed.min.js")}}"></script>
  <script src="{{ asset("/vendor/aos/aos.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/js/main.js")}}"></script>

</body>

</html>
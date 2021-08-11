<!DOCTYPE html>

<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js" 
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
      crossorigin="anonymous"
    ></script>
    <link 
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" 
      crossorigin="anonymous"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="lib/particles/particles.min.js"></script>
    
    <meta name="content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/main.css" />
    <script src="scripts/main.js"> </script>

    <script>
      $(function() {
        main();
        particlesJS.load('home-particles', 'assets/home.json');
        particlesJS.load('about-particles', 'assets/about.json');
        particlesJS.load('dev-particles', 'assets/dev.json');
        particlesJS.load('seq-particles', 'assets/seq.json');
        particlesJS.load('iot-particles', 'assets/iot.json');
        particlesJS.load('cad-particles', 'assets/cad.json');
        feather.replace();
      });
    </script>

    <title>Finlarks</title>
  </head>
  <body>
    <header>
      <nav class="navbar fixed-top">
        <div class="container">
          <a class="navbar-brand fs-2" href="#">Finlarks</a>
        </div>
      </nav>
    </header>
    <main>
      <section id="home" class="d-flex align-items-center justify-content-center">
        <div class="particles" id="home-particles"></div>
        <div class="container z-top">
          <div class="row">
            <div class="col-md-12 col-lg-6 p-3">
              <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-center">
                  <span class="fs-1">Finlarks</span>
                </h1>
                <p class="text-center fs-4">
                  Connect with Us Today !
                </p>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-3">
              <div class="img-wrapper">
                <img class="img-fluid" src="assets/images/Home.png" alt="Home" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about" class="d-flex align-items-center justify-content-center">
        <div class="particles" id="about-particles"></div>
        <div class="container z-top">
          <div class="row">
            <div class="col-md-12 col-lg-6 p-3">
              <div class="txt-wrapper">
                <span>
                  <h1 class="fs-3 mb-4">
                    About Us
                  </h1>
                  <p class="mt-4">
                    We are a technological concern focused on Cloud Application
                    Services(PaaS, SaaS), Cyber Security, Software Development, 
                    IoT and CAD/CAM/CNC Technology. We pursue this passion through 
                    Best Industry Standard Practices to mitigate any type of Security
                    Offence. We develop up-to-date softwares with evolving technologies,
                    thereby contributing to the fullest up-to-date Security.
                  </p>
                </span>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-3">
              <div class="img-wrapper">
                <img class="img-fluid" src="assets/images/about.png" alt="Home" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="dev" class="d-flex align-items-center justify-content-center">
        <div class="particles" id="dev-particles"></div>
        <div class="container z-top">
          <div class="row">
            <div class="col-md-12 col-lg-6 p-3">
              <div class="img-wrapper">
                <img class="img-fluid" src="assets/images/dev.png" alt="Development" />
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-3">
              <div class="txt-wrapper">
                <span>
                  <h1 class="fs-3 mb-4">
                    Software Development
                  </h1>
                  <p class="mt-4">
                    We are dedicated to the process of creating, designing, deploying
                    and supporting software on many software disciplines.
                  </p>
                  <a class="btn btn-primary">
                    Learn More >  
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="seq" class="d-flex align-items-center justify-content-center">
        <div class="particles" id="seq-particles"></div>
        <div class="container z-top">
          <div class="row">
            <div class="col-md-12 col-lg-6 p-3">
              <div class="txt-wrapper">
                <span>
                  <h1 class="fs-3 mb-4">
                    Cyber Security
                  </h1>
                  <p class="mt-4">
                    We Provide Cyber Security that encompasses all the technical and
                    procedural safeguards to keep devices, computer systems, and 
                    sensitive information safe.
                  </p>
                  <a class="btn btn-primary">
                    Learn More >  
                  </a>
                </span>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-3">
              <div class="img-wrapper">
                <img class="img-fluid" src="assets/images/seq.png" alt="Security" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="iot" class="d-flex align-items-center justify-content-center">
        <div class="particles" id="iot-particles"></div>
        <div class="container z-top">
          <div class="row">
            <div class="col-md-12 col-lg-6 p-3">
              <div class="img-wrapper">
                <img class="img-fluid" src="assets/images/iot.png" alt="IoT"/>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-3">
              <div class="txt-wrapper">
                <span>
                  <h1 class="fs-3 mb-4">
                    Internet of Things
                  </h1>
                  <p class="mt-4">
                    We are providing services as physical mechanics embedded with
                    sensors, actuators connected with the internet and data in
                    the cloud.
                  </p>
                  <a class="btn btn-primary">
                    Learn More >  
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="cad" class="d-flex align-items-center justify-content-center">
        <div class="particles" id="cad-particles"></div>
        <div class="container z-top">
          <div class="row">
            <div class="col-md-12 col-lg-6 p-3">
              <div class="txt-wrapper">
                <span>
                  <h1 class="fs-3 mb-4">
                    CAD/CAM/CNC
                  </h1>
                  <p class="mt-4">
                    We provide a full range of CAD Services including Conversion,
                    2D Drafting, 3D Modeling, Rendering, Animation and Sketchup.
                  </p>
                  <a class="btn btn-primary">
                    Learn More >  
                  </a>
                </span>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-3">
              <div class="img-wrapper">
                <img class="img-fluid" src="assets/images/cad.png" alt="IoT"/>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <?php include "include/footer.php" ?>
    </footer>
  </body>
</html>

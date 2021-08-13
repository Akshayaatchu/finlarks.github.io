<?php if(count($_REQUEST) == 0): ?>
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
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-particles"></script>
    <script 
      src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.2/tinycolor.min.js"
      integrity="sha512-+aXA9mgbUvFe0ToTlbt8/3vT7+nOgUmFw29wfFCsGoh8AZMRSU0p4WtOvC1vkF2JBrndPN2TuNZsHPAKPPxe8Q==" 
      crossorigin="anonymous" referrerpolicy="no-referrer"
    ></script>
    
    <meta name="content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="/include/footer/footer.css" />
    <script src="./js/main.js"> </script>
    <script src="/assets/js/particlesData.js"> </script>

    <title>Finlarks | Contact</title>

    <script>
      $(function(){
        main();
      });
    </script>
  </head>
  <body>
      <header>
        <nav class="navbar fixed-top">
          <div class="container">
            <a class="navbar-brand fs-3" href="/">Finlarks</a>
          </div>
        </nav>
      </header>
      <main>
        <section id="home" class="d-flex align-items-center justify-content-center">
          <div class="particles" id="particles-home"></div>
          <div class="container z-top">
            <div class="row">
              <div class="col-md-12 col-lg-6 p-3">
                <form id="form">
                  <div class="form-group mb-2">
                    <label for="name" class="mb-1">Name</label>
                    <input type="text" class="form-control mt-1" id="name" placeholder="Name*" required>
                  </div>
                  <div class="form-group mt-2">
                    <label for="email" class="mb-1">Email</label>
                    <input type="email" class="form-control mt-1" id="email" placeholder="Email*" required>
                  </div>
                  <div class="form-group mt-2">
                    <label for="phone" class="mb-1">Phone</label>
                    <input type="text" class="form-control mt-1" id="phone" placeholder="Phone*" required>
                  </div>
                  <div class="form-group mt-2">
                    <label for="query" class="mb-1">Query</label>
                    <textarea class="form-control mt-1" id="query" rows="4" placeholder="Query*" required></textarea>
                  </div>
                  <div class="form-group mt-4 text-center">
                    <input type="submit" class="btn btn-primary" value="Send" id="submit">
                  </div>
                </form>
              </div>
              <div class="col-md-12 col-lg-6 p-3">
                <div class="img-wrapper">
                  <img src="/assets/images/contact.png" alt="Finlarks" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer>
        <?php include '../../include/footer/footer.php'; ?>
      </footer>
  </body>
</html>
<?php else: ?>
  <?php
    require_once "../../../src/utility.php";

    $name   = $_REQUEST['name'];
    $email  = $_REQUEST['email'];
    $phone  = $_REQUEST['phone'];
    $query  = $_REQUEST['query'];

    echo Utility::send_mail(
      $name,
      $email,
      $phone,
      $query
    );
  ?>
<?php endif; ?>

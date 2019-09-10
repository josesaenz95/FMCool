<?php
  require_once "templates/header.php";
?>

    <section class="container-fluid">
      <div class="row mt-5">
        <div class="col-lg-8 col-md-6 col-sm-6 mx-auto">
          <div class="card card-repro">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card-body">
                  <div class="contenedor">
                    <div class="imagen actual">
                      <img src="img/gatoCool.jpg"/>
                    </div>
                    <div class="imagen">
                      <img src="img/gatoCool2.jpg" class="img-fluid"/>
                    </div>
                    <div class="imagen">
                      <img src="img/gatoCool3.jpg" class="img-fluid"/>
                    </div>
                    <div class="imagen">
                      <img src="img/logo.png" class="img-fluid"/>
                    </div>
                    <div class="puntos">
                      <span class="punto activo" onclick="mostrar(0);"></span>
                      <span class="punto" onclick="mostrar(1);"></span>
                      <span class="punto" onclick="mostrar(2);"></span>
                      <span class="punto" onclick="mostrar(3);"></span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card-body">
                  <audio class="ml-5 mt-5 d-block d-lg-block d-xl-block d-sm-none d-md-none" controls="" preload="none" src="http://162.252.57.90:9848/;"></audio>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-8 col-md-6 col-sm-12 mx-auto">
          <div class="card-deck">
            <div class="card col-lg-4 noticias">
              <img class="card-img-top mt-1" src="img/gatoCool.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer bg-dark">
                <small class="text-white">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card col-lg-4 noticias">
              <img class="card-img-top mt-1" src="img/gatoCool2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer bg-dark">
                <small class="text-white">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card col-lg-4 noticias">
              <img class="card-img-top mt-1" src="img/gatoCool3.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer bg-dark">
                <small class="text-white">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      require_once "templates/footer.php";
    ?>
    <script type="text/javascript" src="js/galeria.js"></script>
  </body>
</html>

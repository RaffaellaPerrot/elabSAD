<!DOCTYPE html>
<html lang="it">

<head>

  <?php require "./includes/header.html" ?>

  <title>INSERIRE TITOLO PAGINA</title>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>




<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Including Sidebar -->
    <?php require "./includes/sidebar.html" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Including Topbar -->
      <?php require "./includes/topbar.html" ?>


      <!-- begin main page -->
      <div class="container-fluid m-2">

        <!-- Cartella Header -->
        <div class="d-flex bd-highlight">
          <div class="h3 p-2 flex-grow-1 bd-highlight">NOME PAZIENTE</div>
          <div class="h3 p-2 bd-highlight">IDENTIFICATIVO SCHEDA</div>
        </div>

        <!-- Card Cartella Clinica -->
        <div class="card">
          <div class="card-body">

            <div class="container-fluid">

              <div class="row">

                <!-- Blocco sinistro -->
                <div class="col-3 pr-5 border-right">

                  <div class="text-center border-border-bottom h5">Riepilogo schede</div>

                  <hr/>

                  <!-- Carta schede 1 -->
                  <div class="row py-2">
                    <div class="card">

                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium blanditiis quibusdam ipsum culpa explicabo fugit maiores suscipit similique corrupti rem laudantium, libero consectetur deleniti aliquid aperiam asperiores dolorem earum quia.
                      </div>

                      <button class="btn btn-block border-top" type="button"><img src="img/plus.svg" style="width: 10%;"></img></button>
                    </div>
                  </div>

                   <!-- Carta schede 2 -->
                  <div class="row py-2">
                    <div class="card">

                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium blanditiis quibusdam ipsum culpa explicabo fugit maiores suscipit similique corrupti rem laudantium, libero consectetur deleniti aliquid aperiam asperiores dolorem earum quia.
                      </div>

                      <button class="btn btn-block border-top" type="button"><img src="img/plus.svg" style="width: 10%;"></img></button>
                    </div>
                  </div>

                </div> <!-- Fine blocco sinistro -->

                <!-- Blocco destro -->
                <div class="col-9">

                  <div class="text-center h5">Dati anagrafici</div>

                </div> <!-- Fine blocco destro -->



              </div>

            </div>

          </div>

        </div> <!-- Fine Card Cartella Clinica -->

      </div>
      <!-- end main page -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Including LogoutModal -->
  <?php require "./includes/logoutModal.html" ?>


  <?php require "./includes/footer.html" ?>

</body>

</html>
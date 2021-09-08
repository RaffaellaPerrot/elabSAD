<!DOCTYPE html>
<html lang="it">

<head>

    <?php require_once "./includes/header.html" ?>

    <title>Cartella Clinica</title>

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
            <div class="container-fluid mx-3">

                <!-- contenitore carte -->
                <div class="container-fluid">

                    <!-- Card Dati anagfrafici -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Dati anagrafici</h5>
                        </div>

                        <div class="card-body">

                            <!-- form dati anagrafica start -->
                            <form>

                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mb-3">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" placeholder="Nome" name="inputNome">
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-3">
                                        <label class="form-label">Cognome</label>
                                        <input type="text" class="form-control" placeholder="Cognome" name="inputCognome">
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-3">
                                        <label class="form-label">Data di nascita</label>
                                        <input type="datetime-local" class="form-control" name="inputData">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mb-3">
                                        <label class="form-label">Residente a</label>
                                        <input type="text" class="form-control" placeholder="Comune" name="inputResidenza">
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-3">
                                        <label class="form-label">Provincia</label>
                                        <select id="provincia" class="form-control" name="provincia">
                                            <option value="ag">Agrigento</option>
                                            <option value="al">Alessandria</option>
                                            <option value="an">Ancona</option>
                                            <option value="ao">Aosta</option>
                                            <option value="ar">Arezzo</option>
                                            <option value="ap">Ascoli Piceno</option>
                                            <option value="at">Asti</option>
                                            <option value="av">Avellino</option>
                                            <option value="ba">Bari</option>
                                            <option value="bt">Barletta-Andria-Trani</option>
                                            <option value="bl">Belluno</option>
                                            <option value="bn">Benevento</option>
                                            <option value="bg">Bergamo</option>
                                            <option value="bi">Biella</option>
                                            <option value="bo">Bologna</option>
                                            <option value="bz">Bolzano</option>
                                            <option value="bs">Brescia</option>
                                            <option value="br">Brindisi</option>
                                            <option value="ca">Cagliari</option>
                                            <option value="cl">Caltanissetta</option>
                                            <option value="cb">Campobasso</option>
                                            <option value="ci">Carbonia-iglesias</option>
                                            <option value="ce">Caserta</option>
                                            <option value="ct">Catania</option>
                                            <option value="cz">Catanzaro</option>
                                            <option value="ch">Chieti</option>
                                            <option value="co">Como</option>
                                            <option value="cs">Cosenza</option>
                                            <option value="cr">Cremona</option>
                                            <option value="kr">Crotone</option>
                                            <option value="cn">Cuneo</option>
                                            <option value="en">Enna</option>
                                            <option value="fm">Fermo</option>
                                            <option value="fe">Ferrara</option>
                                            <option value="fi">Firenze</option>
                                            <option value="fg">Foggia</option>
                                            <option value="fc">Forl&igrave;-Cesena</option>
                                            <option value="fr">Frosinone</option>
                                            <option value="ge">Genova</option>
                                            <option value="go">Gorizia</option>
                                            <option value="gr">Grosseto</option>
                                            <option value="im">Imperia</option>
                                            <option value="is">Isernia</option>
                                            <option value="sp">La spezia</option>
                                            <option value="aq">L'aquila</option>
                                            <option value="lt">Latina</option>
                                            <option value="le">Lecce</option>
                                            <option value="lc">Lecco</option>
                                            <option value="li">Livorno</option>
                                            <option value="lo">Lodi</option>
                                            <option value="lu">Lucca</option>
                                            <option value="mc">Macerata</option>
                                            <option value="mn">Mantova</option>
                                            <option value="ms">Massa-Carrara</option>
                                            <option value="mt">Matera</option>
                                            <option value="vs">Medio Campidano</option>
                                            <option value="me">Messina</option>
                                            <option value="mi">Milano</option>
                                            <option value="mo">Modena</option>
                                            <option value="mb">Monza e della Brianza</option>
                                            <option value="na">Napoli</option>
                                            <option value="no">Novara</option>
                                            <option value="nu">Nuoro</option>
                                            <option value="og">Ogliastra</option>
                                            <option value="ot">Olbia-Tempio</option>
                                            <option value="or">Oristano</option>
                                            <option value="pd">Padova</option>
                                            <option value="pa">Palermo</option>
                                            <option value="pr">Parma</option>
                                            <option value="pv">Pavia</option>
                                            <option value="pg">Perugia</option>
                                            <option value="pu">Pesaro e Urbino</option>
                                            <option value="pe">Pescara</option>
                                            <option value="pc">Piacenza</option>
                                            <option value="pi">Pisa</option>
                                            <option value="pt">Pistoia</option>
                                            <option value="pn">Pordenone</option>
                                            <option value="pz">Potenza</option>
                                            <option value="po">Prato</option>
                                            <option value="rg">Ragusa</option>
                                            <option value="ra">Ravenna</option>
                                            <option value="rc">Reggio di Calabria</option>
                                            <option value="re">Reggio nell'Emilia</option>
                                            <option value="ri">Rieti</option>
                                            <option value="rn">Rimini</option>
                                            <option value="rm">Roma</option>
                                            <option value="ro">Rovigo</option>
                                            <option value="sa">Salerno</option>
                                            <option value="ss">Sassari</option>
                                            <option value="sv">Savona</option>
                                            <option value="si">Siena</option>
                                            <option value="sr">Siracusa</option>
                                            <option value="so">Sondrio</option>
                                            <option value="ta">Taranto</option>
                                            <option value="te">Teramo</option>
                                            <option value="tr">Terni</option>
                                            <option value="to">Torino</option>
                                            <option value="tp">Trapani</option>
                                            <option value="tn">Trento</option>
                                            <option value="tv">Treviso</option>
                                            <option value="ts">Trieste</option>
                                            <option value="ud">Udine</option>
                                            <option value="va">Varese</option>
                                            <option value="ve">Venezia</option>
                                            <option value="vb">Verbano-Cusio-Ossola</option>
                                            <option value="vc">Vercelli</option>
                                            <option value="vr">Verona</option>
                                            <option value="vv">Vibo valentia</option>
                                            <option value="vi">Vicenza</option>
                                            <option value="vt">Viterbo</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-3">
                                        <label class="form-label">Cap</label>
                                        <input type="text" class="form-control" placeholder="CAP" name="inputCap">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="form-label">Telefono ufficio</label>
                                        <input type="text" class="form-control" placeholder="Telefono ufficio" name="inputTelUf">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="form-label">Cellulare</label>
                                        <input type="text" class="form-control" placeholder="Cellulare" name="inputCell">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center" style="padding-top:0.5rem;">
                                    <button class="btn btn-primary btn-lg" type"submit"> Modifica </button>
                                </div>

                            </form>
                            <!-- form dati angafragica end -->

                        </div>
                        <!-- card body end -->
                    </div>
                    <!-- card dati anagrafica end -->


                    <!-- Card dati fiscali start -->
                    <div class="card mb-4">

                        <div class="card-header">
                            <h5>Dati fiscali del paziente o di chi lo rappresenta</h5>
                        </div>

                        <div class="card-body">

                            <form>

                                <div class="row">

                                    <div class="col-sm-12 col-md-5 mb-3">
                                        <label class="form-label">Cognome</label>
                                        <input type="text" class="form-control" placeholder="Cognome" name="inputFiscaleCognome">
                                    </div>

                                    <div class="col-sm-12 col-md-5 mb-3">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" placeholder="Nome" name="inputFiscaleNome">
                                    </div>
                                    
                                    <div class="container-fluid col-sm-12 col-md-2 d-flex align-items-center mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioChooseSex" id="radioMaschio">
                                            <label class="form-check-label" for="radioMaschio"> M </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioChooseSex" id="radioFemmina">
                                            <label class="form-check-label" for="radioFemmina"> F </label>
                                        </div>

                                    </div>
                                    <!-- container M-F end -->

                                </div>

                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Nato/a a</label>
                                        <input type="text" class="form-control" placeholder="Città" name="inputNatoA">
                                    </div>

                                    <div class="col-md-1 mb-3">
                                        <label class="form-label">Prov</label>
                                        <input type="text" class="form-control" name="inputFiscaleProv">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Data</label>
                                        <input type="datetime-local" class="form-control" name="inputFiscaleData">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Residenza</label>
                                        <input type="text" class="form-control" placeholder="Cognome" name="inputFiscaleResidenza">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-9 mb-3">
                                        <label class="form-label">Prestazioni per</label>
                                        <input type="text" class="form-control" name="inputPrestazioniPer">
                                    </div>

                                    <div class="col-md-3 mb-3 d-flex align-items-end mb-1">
                                        <button type="submit" class="btn btn-secondary btn-sm"> Calcola CF</button>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center" style="padding-top:0.5rem;">
                                    <button class="btn btn-primary btn-lg" type="submit"> Modifica </button>
                                </div>

                            </form>
                            <!-- form dati fiscali end -->
                        </div>
                        <!-- body card dati fiscali end -->
                    </div>
                    <!-- card dati fiscali end -->
                </div>
                <!-- contenitore carte fluid end -->

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
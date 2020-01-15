<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
              <img src="{{asset('imgs/logo.png')}}" alt="skoora-logo" height="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><!--add padding: 0,30,0,30-->
                  <a class="nav-link" href="#">À Propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Realisations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav list-unstyled ml-auto list-inline">
                <li class="list-inline-item nav-item"><a class="nav-link" href="">FR</a></li>
                <li class="list-inline-item nav-item"><a class="nav-link" href="">NL</a></li>
                <li class="list-inline-item nav-item"><a class="nav-link" href="">EN</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="container text-left header-text">
          <h1>L'Agence qui vous mène à</br>réaliser vos projets digitaux</h1>
          <p>Nous conçevons des solutions informatiques performantes pour nos clients<br>afin quils atteignent leurs objectifs</p>
          <a href="contact.html" type="button" class="btn rounded-sm" data-toggle="modal" data-target="#exampleModal"> émarrer UN PROJET</a>
        </div>
        <div>
          <img src="{{asset('imgs/Path 90.png')}}" alt="footer" class="foot-banner d-none d-lg-block d-xl-block">
          <img src="{{asset('imgs/img2.png')}}" alt="footer" class="second-img d-none d-lg-block d-xl-block">
          <img src="{{asset('imgs/mobile.png')}}" alt="mobile-img" class="mobile-img d-none d-lg-block d-xl-block">
        </div>
      </header>
      <!-- header section end -->
      <!-- propos section start -->
      <div id="propos">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 propos-img">
              <img src="{{asset('imgs/propos.png')}}" alt="propos" class="img-responsive w-100">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 pt-5 pt-sm-0 my-auto">
              <div class="text-contianer text-left shadow p-4 rounded  bg-white propos">
                <img src="{{asset('imgs/12.png')}}" alt="circle" class="img-responsive circle-img d-none d-lg-block d-xl-block">
                <h1>A Propos</h1>
                <p>Note you have an  props lesson form a company where you can get a job related to your
                   and also your learingin and then amke thenm happily.</p>
                <p>and also get here your gift of your habvit.</p>   
              </div>
            </div>
          </div>
        </div>
        <img src="{{asset('imgs/12.png')}}" alt="circle" class="circle-img2 d-none d-lg-block d-xl-block">
      </div>
      <!-- propos section end -->
      <!-- service section start -->
      <div id="service">
        <img src="imgs/service-path.png" alt="path" class="service-path d-none d-lg-block d-xl-block">
        <div class="container pt-5 pb-5">
          <img src="{{asset('imgs/12.png')}}" alt="serve-img" class="serve-img d-none d-lg-block d-xl-block">
          <div class="row text-center">
            <div class="col-md-4 align-self-center">
              <h1>SERVICES</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 custom-marg">
              <img src="{{asset('imgs/1.png')}}" alt="skoora-logo" class="img-responsive">
              <p>APPLICATION WEB</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="{{asset('imgs/4.png')}}" alt="skoora-logo" class="img-responsive">
              <p>APPLICATION mobile</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="{{asset('imgs/3.png')}}" alt="skoora-logo" class="img-responsive">
              <p>E- Commerce</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="{{asset('imgs/7.png')}}" alt="skoora-logo" class="img-responsive">
              <p>ui & ux design</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="{{asset('imgs/16.png')}}" alt="skoora-logo" class="img-responsive">
              <p>seo & marketing</p>
            </div>  
          </div>
        </div>
      </div>
      <!-- service section end -->
      <!-- portfolio section start -->
      <div id="portfolio">
        <!-- <div class="overflow-hidden"> -->
        <img src="{{asset('imgs/port-path.png')}}" alt="portfolio-path" class="portfolio-path d-none d-lg-block d-xl-block">
        <!-- </div> -->
        <div class="container text-center">
          <div class="row text-center">
            <div class="col-md-4">
              <img src="{{asset('imgs/port1.png')}}" alt="port-one" class="img-responsive" width="100%">
            </div>
            <div class="col-md-4 pt-4 pt-sm-0">
              <img src="{{asset('imgs/port2.png')}}" alt="port-one" class="img-responsive" width="100%">
            </div>
            <div class="col-md-4 mt-4 mt-sm-0 ml-3 mr-3 ml-sm-0 mr-sm-0 text-center text-container d-flex border border-white rounded">
              <h1 class="my-auto mx-auto p-4 p-sm-0">NOS DERNIÈRES <br> RÉALISATIONS</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio section end -->
      <!-- confian seciton start -->
      <div id="confians">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h1 class="pt-5 pb-5">ils nous font confiance</h1>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <img src="{{asset('imgs/spo1.png')}}" alt="port-one" class="img-responsive">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <img src="{{asset('imgs/spo2.png')}}" alt="port-two" class="img-responsive">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <img src="{{asset('imgs/spo3.png')}}" alt="port-three" class="img-responsive">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <img src="{{asset('imgs/spo4.png')}}" alt="port-four" class="img-responsive">
            </div>
          </div>
        </div>
        <img src="{{asset('imgs/footer-top.png')}}" alt="footer-top" class="footer-top d-none d-lg-block d-xl-block">
      </div>
      <!-- confian seciton start -->
      <!-- footer section start -->
      <div id="footer">
        
        <div class="container pt-5">
          <div class="row">
            <div class="col-md-12 text-center text-light">
              <img src="imgs/logo.png" alt="skoora-logo" height="200px">
              <p>+32 2 808 67 73</p>
              <p>Info@skoora.be</p>
              <p>Place de la Minoterie 10  1080 BruxellesBCE</p>
              <p>BE 0677.613.987 | IBAN BE93 0018 1482 8267</p>
            </div>
            <div class="col-md-12 text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><i class="fa fa-facebook"></i></li>
                <li class="list-inline-item"><i class="fa fa-linkedin"></i></li>
                <li class="list-inline-item"><i class="fa fa-instagram"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- footer section start -->
      <!--contact Modal start -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="contact-form">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 pt-5">
                    <h1>démarrer un projet</h1>
                      <form class="form-padding">
                        <div class="form-group col-md-10 col-12">
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                        </div>
                        <div class="form-row col-md-10 col-12">
                          <div class="form-group col-md-6 col-12">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <input type="tel" class="form-control" id="inputPassword4" placeholder="Téléphone">
                          </div>
                        </div>
                          <div class="form-group col-md-10 col-12">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Organisation">
                          </div>
                            <div class="form-group col-md-10 col-12">
                              <select class="form-control" id="exampleFormControlSelect1">
                                <option value="Votre Projet selected">Votre Projet</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                              <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-md-10 col-12">
                              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Votre Message" rows="5"></textarea>
                            </div>
                            <a><input class="btn envoyer" id="#" type="button" value="ENVOYER" data-toggle="modal" data-target="#exampleModal1"></a>
                          </form>
                      </div>
                      <div class="col-md-6 contact-right d-flex">
                        <img src="{{asset('imgs/contact-path.png')}}" alt="contact-path" class="contact-path d-none d-lg-block d-xl-block">
                          <div class="content my-auto mx-auto pt-5 pt-sm-0">
                            <P class="text-justify">Faites-nous par de vos attentes concernant vos projects<br>
                                digitaux et nous vous contacterons pour boire un the et<br>
                                en discuter plus amplement</P><br><br>
                              <a href="">Info@skoora.be</a><br><br>
                              <a href="">+32 2 808 67 73</a>
                              <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-facebook fa-lg"></i></li>
                                <li class="list-inline-item"><i class="fa fa-linkedin fa-lg"></i></li>
                                <li class="list-inline-item"><i class="fa fa-instagram fa-lg"></i></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact Modal End -->
      <!-- contact-confirm section start -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="contact-form">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 pt-5">
                        <h1>démarrer un projet</h1>
                        <br><br><br><br>
                        <h3 class="confirm-heading pb-5">Merci pour votre message
                         nous vous contacterons <br>
                         dans les pus brefs délais</h3>
                        <a href="contact.html" type="button" class="btn btn-lg rounded-sm confirm-btn"> retour </a>
                       </div>
                       <div class="col-md-6 contact-right confirm-contact-right d-flex">
                           <img src="imgs/contact-path.png" alt="contact-path" class="contact-path-confirm">
                           <div class="content my-auto mx-auto">
                             <P class="text-justify">Faites-nous par de vos attentes concernant vos projects<br>
                                 digitaux et nous vous contacterons pour boire un the et<br>
                                 en discuter plus amplement</P><br><br>
                                 <a href="">Info@skoora.be</a><br><br>
                                 <a href="">+32 2 808 67 73</a>
                                 <ul class="list-inline">
                                     <li class="list-inline-item"><i class="fa fa-facebook fa-lg"></i></li>
                                     <li class="list-inline-item"><i class="fa fa-linkedin fa-lg"></i></li>
                                     <li class="list-inline-item"><i class="fa fa-instagram fa-lg"></i></li>
                                   </ul>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- contact-confirm section end -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>
<template>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
              <img src="../../../public/imgs/logo.png" alt="skoora-logo" height="100px"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><!--add padding: 0,30,0,30-->
                  <a class="nav-link" href="#propos" v-smooth-scroll>À Propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service"  v-smooth-scroll>Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio" v-smooth-scroll>Realisations</a>
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
        <div class="container text-left header-text pl-3 pl-sm-0">
          <h1>L'Agence qui vous mène à</br>réaliser vos projets digitaux</h1>
          <p>Nous conçevons des solutions informatiques performantes pour nos clients<br>afin quils atteignent leurs objectifs</p>
          <a  type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> émarrer UN PROJET</a>
        </div>
        <div>
          <img src="../../../public/imgs/Path 90.png" alt="footer" class="foot-banner d-none d-lg-block d-xl-block">
          <img src="../../../public/imgs/img2.png" alt="footer" class="second-img d-none d-lg-block d-xl-block">
         <!-- <img src="../../../public/imgs/mobile.png" alt="mobile-img" class="mobile-img d-none d-lg-block d-xl-block"> -->
        </div>
     </header>   
</template>
    <script>
        export default {}
    </script>
    <style scoped>
      
    </style>
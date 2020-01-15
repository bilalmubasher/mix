<template>
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
                      <!-- <img src="{{asset('imgs/contact-path.png')}}" alt="contact-path" class="contact-path d-none d-lg-block d-xl-block"> -->
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
</template>

<script>
        export default {}
 </script>
 <style scoped>
      
 </style>
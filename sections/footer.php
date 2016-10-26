<div class="container-fluid footer">
  <div class="container">
    <div class="col-md-12">
      <!-- FOOTER EDIT DROPDOWN -->
      <div class="collapse" id="footer-edit">
        <div class="well">

          <form>
            <div class="row">
              <div class="col-md-12">
                <h3>Edite Links</h3>
                <div class="col-md-2 padding-top-little">
                  <label>Link 1</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 1">
                </div>
                <div class="col-md-2 padding-top-little">
                  <label>Link 2</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 2">
                </div>
                <div class="col-md-2 padding-top-little">
                  <label>Link 3</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 3">
                </div>
                <div class="col-md-2 padding-top-little">
                  <label>Link 4</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 4">
                </div>
                <div class="col-md-2 padding-top-little">
                  <label>Link 5</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 5">
                </div>
                <div class="col-md-2 padding-top-little">
                  <label>Link 6</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 6">
                </div>
                <div class="col-lg-12 padding-section-elements-top">
                    <div id="success"></div>
                    <button type="submit" class="btn btn-success btn-big">Actualizar</button>
                </div>
              </div>
              <div class="col-md-12">
                <h1>Crea un Link</h1>
                <div class="col-md-2 padding-top-little">
                  <label>Nombre del Link</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 6">
                </div>
                <div class="col-lg-12 padding-section-elements-top">
                    <div id="success"></div>
                    <button type="submit" class="btn btn-success btn-big">Actualizar</button>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

      <!-- LOGIN DROP DOWN -->
      <div class="collapse" id="loginDrop">
        <div class="well">

          <form>
            <div class="row">
              <div class="col-md-12">

                <form>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Su Nombre *" id="name" required data-validation-required-message="Please enter your name." required="true">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Su Email *" id="email" required data-validation-required-message="Please enter your email address." required="true">
                          <p class="help-block text-danger"></p>
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center padding-section-elements-bottom">
                    <div id="success"></div>
                    <button type="submit" class="btn btn-login">Login</button>
                    </div>
                  </div>
                </form>
                <a class="btn btn-warning" role="button" data-toggle="collapse" href="#loginDrop" aria-expanded="false"    aria-controls="collapseExample">
                  Cancel
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    <a class="btn btn-warning" role="button" data-toggle="collapse" href="#footer-edit" aria-expanded="false"    aria-controls="collapseExample">
      Editar Footer
    </a>
    <div class="col-md-7 center">
        <ul class=" footer-links">

          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
          <li><a role="button" data-toggle="collapse" href="#loginDrop" aria-expanded="false"    aria-controls="collapseExample">
            Login
          </a></li>

        </ul>
    </div>
  </div>
</div>

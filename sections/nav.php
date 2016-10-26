<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >AquiEstoy.MX</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <a class="btn btn-warning" role="button" data-toggle="collapse" href="#nav-edit" aria-expanded="false" aria-controls="collapseExample">
      Editar Navegacion
    </a>

    <div class="col-md-12">
      <div class="collapse" id="nav-edit">
        <div class="well">

          <form>
            <div class="container">

              <div class="col-md-3">
                <h3>Edite Su Logo</h3>
                <div class="input-group">
                  <label class="input-group-btn">
                      <span class="btn btn-primary">
                           Your Logo <input type="file" style="display: none;" multiple>
                      </span>
                  </label>
                  <input class="form-control" type="text" placeholder="No File" readonly>
                </div>
              </div>

              <div class="col-md-8">
                <h3>Edite Links</h3>
                <div class="col-md-3 padding-top-little">
                  <label>Link 1</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 1">
                </div>
                <div class="col-md-3 padding-top-little">
                  <label>Link 2</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 2">
                </div>
                <div class="col-md-3 padding-top-little">
                  <label>Link 3</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 3">
                </div>
                <div class="col-md-3 padding-top-little">
                  <label>Link 4</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 4">
                </div>
                <div class="col-md-3 padding-top-little">
                  <label>Link 5</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 5">
                </div>
                <div class="col-md-3 padding-top-little">
                  <label>Link 6</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="link 6">
                </div>
              </div>
              <div class="col-lg-12 padding-section-elements-top">
                  <div id="success"></div>
                  <button type="submit" class="btn btn-success btn-big">Actualizar</button>
              </div>

            </div>
          </form>

        </div>
      </div>
    </div>

  </div><!-- /.container -->
</nav>

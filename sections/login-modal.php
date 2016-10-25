<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel"> Bienvenido | Login</h1>
      </div>
      <div class="modal-body padding-section">
        <div class="row">
          <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" novalidate>
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
        </div>
      </div>
    </div>
  </div>
</div>

<!-- featuer-wrap start -->
<section class="feature-wrap section-padding"
    data-stellar-background-ratio="0.5">

  <div class="container center">
    <div class="row">
      <div class="col-xs-12">
        <div class="feature-content" >
          <h2>Providing cost-effective<br><span>And reliable marine and air unshipations
            </span>
          </h2>
          <div>
            <p>Etiam non augue in tortor facilisis porttitor at sit amet justo. Sed blandit tempor hendrerit. Suspendisse quis tincidunt nisl. Nulla bibendum purus elit, ut hendrerit orci porttitor id. Donec egestas dapibus massa, et tempor nulla ultricies quis. Donec mattis, metus vel pharetra pulvinar, nunc leo consectetur purus, sit amet tincidunt dui lorem ac elit. Vivamus nulla nisl, sodales eu rutrum sit amet, viverra eu eros. Proin sollicitudin congue augue, eget condimentum purus dictum sit amet. Aenean et tempor augue.</p>
          </div>
          <a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn btn-lg">Get a Quote <i class="fa fa-long-arrow-right"></i></a>

          <!-- Modal -->
      <div class="modal fade" id="quoteModal"			tabindex="-1" role="dialog"
        aria-labelledby="quoteModalLabel" aria-hidden="true">

          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h3>
                </div>

                <div class="modal-body">
              <form id="contactForm" action="sendemail.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company">Company Name</label>
                    <input id="company" name="company" type="text" class="form-control" placeholder="">
                  </div>
                </div>
              </div><!--/.row-->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">City Name</label>
                    <input id="city" name="city" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group text-area">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
            </form>
              </div>
            </div><!--/.modal-content-->
          </div><!--/.modal-dialog-->
      </div><!-- Modal END -->

        </div><!--/.feature-content-->
      </div><!--/.col-->

    </div><!-- /.row -->
  </div><!-- .container -->
</section>
<!-- featuer-wrap end -->

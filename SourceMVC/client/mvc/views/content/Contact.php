<!-- Wrapper container -->
<div class="contact-form">

  <h1>Contact us!</h1>

  <!-- Bootstrap 5 starter form -->
  <div class="row">



    <div class="col-lg-6">
      <img src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/contact.jpg" class="pt-5" width="100%" alt="">
    </div>
    <div class="col-lg-6">
      <form method="POST" action="<?php echo $DOMAIN ?>/Contact/Thank" id="contactForm">

        <!-- Name -->
        <div class="mb-3">
          <label class="form-label" for="name">Name</label>
          <input class="form-control" id="name-contact input-effect" type="text" placeholder="Name" required />
        </div>
        <!-- Email address-->
        <div class="mb-3">
          <label class="form-label" for="emailAddress">Email Address</label>
          <input class="form-control" id="emailAddress-contact" type="email" placeholder="Email Address" name="_replyto" required />
        </div>
        <!-- Message-->
        <div class="mb-3">
          <label class="form-label" for="message">Message</label>
          <textarea class="form-control" id="message-contact" name="message" type="text" placeholder="Message" required style="height: 10rem;"></textarea>
        </div>
        <!-- submit button -->
        <div>
          <button type="submit" class="btn btn-warning send-message">Send Message</button>
        </div>

      </form>
    </div>
  </div>

</div>
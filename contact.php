<?php require_once "header.php" ?>

<div class="banner-area" id="banner-area" style="background-image: url(images/banner/banner3.jpg)">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="banner-heading">
          <h1 class="banner-title">Contact Us</h1>
          <ol class="breadcrumb">
            <li>Home</li>
            <li><a href="#" style="color:pink;">Contact</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="main-container contact-area" id="main-container">
  <div class="gap-60"></div>
  <div class="ts-form form-boxed" id="ts-form">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="contact-wrapper full-contact d-flex justify-content-center">

          <div class="col-lg-6 d-flex flex-column align-items-center">
            <h5 class=" pl-2 border-left text-secondary border-danger w-50" style="font-size:1.3em;">Send Us A
              Message
            </h5>
            <div class="d-flex justify-content-center ">
              <h3 class="column-title text-center text-secondary" style="font-size:2em;">
                Stay Connected With Us
              </h3>
            </div>

            <h5 class="lead text-black mt-4" style="font-size:1.3em;">Any Query? Drop Us A Message</h5>
            <div class="contact-submit-box contact-box form-box">
              <form class="contact-form mt-4 bg-secondary  rounded text-white px-2 py-2" id="contact-form"
                action="https://furioustheme-logicraft.netlify.app/contact-form.php" method="POST">
                <div class="error-container"></div>
                <div class="row">
                  <div class="col-lg-12 d-flex justify-content-between">
                    <div class="form-group py-1 px-1" style="width:49%;">
                      <label for="name">Your Name <span style="color:#e6a8a8;">&#9733;</span></label>
                      <input class="form-control rounded form-name" id="name" name="name" placeholder="Your name here"
                        type="text" required="" />
                    </div>
                    <div class="form-group py-1 px-1" style="width:49%;">
                      <label for="Email">Email <span style="color:#e6a8a8;">&#9733;</span></label>
                      <input class="form-control rounded form-website" id="email" name="email"
                        placeholder="Your email here" type="email" required="" />
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="Subject">Your subject <span style="color:#e6a8a8;">&#9733;</span></label>
                      <input class="form-control rounded form-email" id="subject" name="subject"
                        placeholder=" Your subject here" type="text" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="Comments">Comments <span style="color:#e6a8a8;">&#9733;</span></label>
                      <textarea class="form-control rounded form-message required-field" id="message"
                        placeholder="Tell Is afew words" rows="8"></textarea>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary tw-mt-30" type="submit">
                  <i class="fa fa-paper-plane-o"></i> Send Massage
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-5">
          <h5 class="border-left text-black lead border-danger pl-2 ">CONTACTS</h5>
          <h3 class="column-title text-secondary">Get in touch</h3>
          <div class="contact-info-box contact-box info-box">
            <div class="contact-info">
              <div class="ts-contact-info">
                <span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                <div class="ts-contact-content">
                  <h3 class="ts-contact-title">Location</h3>
                  <p>Kampala 🇺🇬 </p>
                </div>
              </div>
              <div class="ts-contact-info">
                <span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                <div class="ts-contact-content">
                  <h3 class="ts-contact-title">Phone</h3>
                  <p>(+256) 784546529</p>
                  <p>(+256) 784546564</p>
                </div>
              </div>
              <div class="ts-contact-info last">
                <span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                <div class="ts-contact-content">
                  <h3 class="ts-contact-title">Mail Us</h3>
                  <p>info@digfactory.net</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once "footer.php" ?>
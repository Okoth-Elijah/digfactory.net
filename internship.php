<?php require_once "header.php" ?>

<div class="banner-area" id="banner-area" style="background-image: url(images/banner/banner3.jpg)">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="banner-heading">
          <h1 class="banner-title">Intership Training</h1>
          <ol class="breadcrumb">
            <li>Home</li>
            <li><a href="#" style="color:pink;">Intership Trainig</a></li>
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
      <div class="row">
        <div class="contact-wrapper d-flex justify-content-center full-contact">
          <div class="col-lg-6">

            <button class="btn btn-primary tw-mt-30" type="button" style="margin-bottom:50px; font-size:1em;">
              &#9664;&#9664; Back
            </button>
            <h3 class="column-title text-center">Internship Placement Form</h3>
            <p class="lead text-center">Please fill in the form below</p>
            <div class="contact-submit-box contact-box form-box">
              <form class="contact-form bg-dark px-3 py-3 rounded" id="contact-form" enctype="multipart/form-data"
                action="https://furioustheme-logicraft.netlify.app/contact-form.php" method="POST">
                <div class="error-container"></div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded form-name" id="fname" name="fname"
                        placeholder="Enter Firstname" type="text" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded form-name" id="lname" name="lname" placeholder="Enter Lastname"
                        type="text" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <select class="form-select w-100" name="" id="" style="height:2em;">
                        <option value=" Gender">--Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded form-website" id="tell" name="phonenumber"
                        placeholder="E.g 070766398" type="tell" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded form-website" id="email" name="email" placeholder="Enter Email"
                        type="email" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control  rounded form-website" id="institution-name" name="institution-name"
                        placeholder="Enter Your Institution's Name" type="text" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded form-website" id="course" name="course"
                        placeholder="Enter your course eg. IT" type="text" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <select class="w-100 form-select" name="" id="" style="height:2em;">
                        <option value="s-education-level">--Select education level--</option>
                        <option value="Certificate">Certificate Level</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="Masters">Masters</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded form-website" id="RegNo" name="RegNo" placeholder="Enter RegNo"
                        type="number" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <select class="w-100 form-select" name="" id="" style="height:2em;">
                        <option value="website">--How did you find us--</option>
                        <option value="Google search">Through Google Search</option>
                        <option value="Through Whatsapp Group">Through Whatsapp Group</option>
                        <option value="Through Instergram">Through Instergram</option>
                        <option value="Through Twitter">Through Twitter</option>
                        <option value="Through Tiktok">Through Tiktok</option>
                        <option value="Through Friend<">Through Friend</option>
                        <option value="Through internee">Through an Internee @ DIGFactory</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <select class="w-100 form-select" name="" id="" style="height:2em;">
                        <option value="intake">--Select Intake--</option>
                        <option value="Jan-Feb">Jan - Feb</option>
                        <option value="Feb-March">Feb - March</option>
                        <option value="March - April">March - April</option>
                        <option value="April - May">April - May</option>
                        <option value="May - June">May - June</option>
                        <option value="June - Aug<">June - Aug</option>
                        <option value="Aug - Sept">Aug - Sept</option>
                        <option value="Sept - Oct">Sept - Oct</option>
                        <option value="Oct - Nov">Oct - Nov</option>
                        <option value="Nov -Dec">Oct -Dec</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control rounded" type="file" id="fileUpload" name="fileUpload">
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary tw-mt-30" type="submit">
                  Apply Now
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once "footer.php" ?>
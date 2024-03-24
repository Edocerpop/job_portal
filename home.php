  <section id="banner">
   
  <!-- Slider -->
  <div id="main-slider" class="flexslider">
    <ul class="slides">
        <li>
            <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" height="600" width="300"/>
            <div class="flex-caption">
                <h3>Opportunity</h3> 
                <p>To design, to create</p>
            </div>
        </li>
       <!-- <li>
            <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" height="600" width="300"/>
            <div class="flex-caption">
                <h3>Creation</h3> 
                <p>We provide freedom to create</p>
            </div> 
        </li>
    </ul>
</div>
</section>
<br>-->

 
  </section> 
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php echo web_root; ?>plugins/home-plugins/img/female.jpg" alt="" class="d-block mx-lg-auto img-fluid" alt="" width="300" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Let the right people know you’re open to work</h1>
        <p class="lead"> With the Open To Work feature, you can privately tell recruiters or publicly share with our that you are looking for new job opportunities.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
  
 <!-- <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Company</h2> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. </div>
        <br/>
      </div>
    </div>-->


   <!-- <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                     <p><?php echo $company->COMPANYMISSION;?></p> 
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>  -->
  
  
 
  
  <!--<div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
               
                <div class="block-heading-two">
                  <h3><span>GraphCall</span></h3>
                </div>
                <p>GraphCall is laeading creative marketplace that provides a platform for all invidiuals to create and personalize their own symbol to mark them on their business by providing high qulaity design from talented professionals.</p>
                <p> Also, providing access of new opportunity for developing designer to create and contact with endless posibilities for proceeding to new height in their career.</p>
                  <p>The way to get sucess is to quit talking and start doing.</p>
              </div>
              
               <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest Jobs</span></h3>
                </div>    
                
                <div class="panel-group" id="accordion-alt3">
                
                <?php 
$sql = "SELECT * FROM `tbljob`";
$mydb->setQuery($sql);
$job = $mydb->loadResultList();

foreach ($job as $index => $jobs): ?>
    <div class="panel"> 
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse<?php echo $index; ?>-alt3">
                    <i class="fa fa-angle-right"></i> <?php echo $jobs->OCCUPATIONTITLE; ?>
                </a>
            </h4>
        </div>
        <div id="collapse<?php echo $index; ?>-alt3" class="panel-collapse collapse">
            <div class="panel-body">
                <?php echo $jobs->JOBDESCRIPTION; ?>
            </div>
        </div>
    </div><?php endforeach; ?>
    </div>
    </div>

              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Motive</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p> To create an easy platform for better opportunities and freedom of creation. </p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="img/team4.jpg" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">GraphCall</span>
                        <span class="testimonials-post">Company</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>-->
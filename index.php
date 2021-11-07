<?php include('header.html'); ?> 

<!DOCTYPE html>
<html>
<!--#include file="include_head.html" -->

	<section class="banner">
					<div class="swiper-container">
			<div class="overlay-2"></div>

    <!-- Additional required wrapper -->
    		<div class="swiper-wrapper" style="transition-duration: 3s;">
        <!-- Slides -->
       		 <div class="swiper-slide" style="background-image: url('img/1.jpg');"></div>
        	<div class="swiper-slide" style="background-image: url('img/2.jpg');"></div>
        	<div class="swiper-slide" style="background-image: url('img/3.jpg');"></div>
        	<div class="swiper-slide" style="background-image: url('img/4.jpg');"></div>
        	<div class="swiper-slide" style="background-image: url('img/5.jpg');"></div>
        
    		</div>
   
    <!-- If we need navigation buttons -->
    	<div class="swiper-button-prev"></div>
    	<div class="swiper-button-next"></div>
    	</div>
    		<div class="message">
    			
    				
    			<div class="msg-txt">
    				<h2 class="white-txt"> health care</h2>
    				<p class="white-txt">Good health and good sense are two of life's greatest blessings. There's nothing more important than our good health - that's our principal capital asset. To enjoy the glow of good health, you must exercise. Good health is not something we can buy.</p>
    				<button class="white-txt">LEARN MORE</button>

    			</div>
    			<div class="msg-input"> 

    				<h3 class="white-txt">Log in </h3>
    				<p class="white-txt"> log in with yor data that you entered during your registration. </p>
    				
					<form name="myForm" action="login.php" method="post">
					
    				<input type="text" name="emailLogin" id="emailLogin" placeholder="email"> <br>
    				<input type="text" name="passwordLogin" id="passwordLogin" placeholder="password">
					
					<a href="login.php">
					<button class="white-bg white-txt"> Log in</button>
					</a>

					</form>
					
    				
					<a href="signupPage.php">
					<button class="white-bg white-txt"> Sign up</button>
					</a>
                    
    				
    			
    			
    		</div>

		
		</div>
	</section>
	<section class="description">
		<div class="container">
			<h3> about cancer</h3>
			<div class="description-container">
				<div class="parag">
					<p>Cancer is a condition where cells in a specific part of the body grow and reproduce uncontrollably. The cancerous cells can invade and destroy surrounding healthy tissue, including organs.

                    Cancer sometimes begins in one part of the body before spreading to other areas. This process is known as metastasis.

                    1 in 2 people will develop some form of cancer during their lifetime. In the UK, the 4 most common types of cancer are:breast cancer , lung cancer,prostate cancer and bowel cancer.
                    There are more than 200 different types of cancer, and each is diagnosed and treated in a particular way.</p>
						<button class="white-bg white-txt"> LEARN MORE</button>
				</div>
				<div class="parag">
					<p>Cancer is a disease in which some of the body’s cells grow uncontrollably and spread to other parts of the body. 

                        Cancer can start almost anywhere in the human body, which is made up of trillions of cells. Normally, human cells grow and multiply (through a process called cell division) to form new cells as the body needs them. When cells grow old or become damaged, they die, and new cells take their place.

                        Sometimes this orderly process breaks down, and abnormal or damaged cells grow and multiply when they shouldn’t. These cells may form tumors, which are lumps of tissue. 

</p>
				</div>
			</div>
		</div>
		
	</section>
	<section class="reason black-bg">
		<div class="container">
			<h2 class="white-txt">Spotting signs of cancer</h2>
			<div class="reason-container">
				<div class="list">
                    <i class="fas fa-ban red-txt"></i>
					<div class="msg">
					<h6 class="white-txt"> Lump in your breast</h6>
					<p class="white-txt">Speak to a GP if you notice a lump in your breast or if you have a lump that's rapidly increasing in size elsewhere on your body.
                    Your GP will refer you to a specialist for tests if they think you may have cancer.</p>
					</div>
				</div>
				<div class="list">
                    <i class="fas fa-infinity red-txt"></i>
					<div class="msg">
					<h6 class="white-txt"> unexplained bleeding</h6>
					<p class="white-txt">You should also speak to a GP if you have any unexplained bleeding, such as:
                    blood in your urine,vaginal bleeding between periods,vaginal bleeding a year or more after the menopause (postmenopausal bleeding),bleeding from your bottom,blood when you cough,blood in your vomit</p>
					</div>
				</div>
				<div class="list">
                    <i class="fas fa-hiking red-txt"></i>
					<div class="msg">
					<h6 class="white-txt"> changes to your bowel habits</h6>
					<p class="white-txt">Speak to a GP if you've noticed these changes and it's lasted for 3 weeks or more:
                    tummy discomfort,blood in your poo,diarrhoea or constipation for no obvious reason,a feeling of not having fully emptied your bowels after going to the toilet,pain in your stomach or back passage (anus)</p>
					</div>
				</div>
			</div>
		</div>
		
	</section>
    
	
    <section class="upload">
        <div class="container">
            <div class="upload-container">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="upload">UPLOAD FILE</button>
                </form>
            </div>
        </div>
    </section>
	<?php include('footer.html'); ?> 

</body>
</html>
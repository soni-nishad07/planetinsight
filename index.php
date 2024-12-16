<?php
$title = "PLANET CONSCIOUS ";
include "head.php";
?>


<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</head>

<body>

	<?php
	include "nav.php";
	?>


	<!-- slider img -->
	<!-- <section class="hero-section">
	</section> -->

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/banner (1).jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/banner (2).jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>



	<!-- -----------------ABOUT US  ---------------------------------------------->



	<section class="about" id="about">
		<div class="container">
			<div class="company-overview">
				<div class="about-con">
					<h2>ABOUT US</h2>
					<p>Planet Insights provides innovative ground water generation solutions to consumers and businesses to create water-positive environments.

					</p>
					<p>
						Our Technology helps with water planning, Planet Insights systems can help organizations combines the power of Artificial intelligence,Mathematical modelling via data acquisitions to enhance the ground water level that create water positive eco-systems.</p>
				</div>
			</div>
		</div>
	</section>



	<section class="slider-sec" id="solutions">
		<div class="container">
			<div class="row">
				<div class="heading">
					<h2>OUR SOLUTIONS</h2>
				</div>
				<div class="home-demo">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="./images/plateform.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sub-Surface Management Platform</h4>
									<p>
										The solution improves water security by include underground storage, storm
										water capture, recycled wastewater and addressing climate change issues,Th
										us ensuring there is balance between nature and human kind.
									</p>
									<!-- <p>CAF International Validated Organization </p>
											<p class="stats">10,200+<span>Rural Students</span></p>
											<p class="stats">5,500+<span>Full-Scholarship Students</span></p> -->
								</div>
							</div>
						</div>
						<div class="item">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="./images/food.jpeg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Flood Management Platform
									</h4>
									<p>A Flood Management Platform is our comprehensive system designed to predict, monitor, and respond to flood events to minimize their impact on communities, infrastructure, and the environment. These platforms integrate a range of technologies and tools to provide real-time data, early warning systems, and post-event response strategies. They are essential for improving disaster resilience and enabling timely interventions before, during, and after a flood event.
									</p>

								</div>
							</div>
						</div>

						<!-- <div class="item">
							<h2>Responsive</h2>
						</div>

						<div class="item">
							<h2>CSS3</h2>
						</div> -->

					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="contact-section"  id="contactus">
        <div class="container">
            <h2>Get In Touch With Us & Send Us Messages</h2>
            <div class="contact-container">
                <form class="contact-form"  action=""  method="POST" onsubmit="showSuccessMessage(event)">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your EMail" required>
                    <input type="text" placeholder="Mobile number" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <button type="submit">Send Message</button>
                </form>
                <div class="contact-info">
                    <p><strong>Address</strong></p>
                    <p><i class="fas fa-map-marker-alt"></i> 16/A New P&T Layout, <br> Manjunath Nagar,
					Horamavu, <br> Kalkere Main Road, Bangalore - 560043</p>
                </div>
            </div>
        </div>
    </section>



	<?php
	include 'footer.php';
	?>




	<script src="./js/script.js"></script>



	<script>
    function showSuccessMessage(event) {
        event.preventDefault(); 
        const form = event.target;
        const successMessage = document.getElementById('success-message');

        successMessage.textContent = 'Message has been sent successfully!';
        successMessage.style.display = 'block'; 

        form.submit(); 

        form.reset(); 

        setTimeout(function() {
            successMessage.style.display = 'none'; 
            window.location.href = 'contact.php'; 
        }, 5000); 
    }
</script>

</body>
</html>
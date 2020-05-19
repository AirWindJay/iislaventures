<!doctype html>
<html lang="en">
<head>
	<!-- Define Charset -->
	<meta charset="UTF-8">
	<!-- Page Title -->
	<title>IISLA VENTURES</title>
	
	<!-- Responsive Metatag --> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.html">
	<link rel="stylesheet" href="css/countdown.demo.css" type="text/css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css2/fontello.css') }}" rel="stylesheet">
	<link href="{{ asset('css2/style.css') }}" rel="stylesheet">

	<style>
		body
		{
			background-image: linear-gradient(#CDCDCD, #01DFA5);
		}
	</style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->      
	</head>	
	<body>

	<!-- Header -->
	<div class="homepage">
	<header>
	    <div class="navbar navbar-default" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          {{-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button> --}}
	          <a class="navbar-brand" href="#">
				<img src="{{asset('/img/iisa_logo.jpg')}}" height="45px">IISLA VENTURES</a>
			</div>
			<div class="row">
				<div class="col"><a href="#menu-slider">Home</a></div>
				<div class="col"><a href="#menu-features">About us</a></div>
				<div class="col"><a href="#menu-information">Courses</a></div>
				<div class="col"><a href="#menu-countdown">Countdown</a></div>
				<div class="col"><a href="#menu-price">Pricing</a></div>
				<div class="col"><a href="#menu-testimonial">Testimonials</a></div>
				<div class="col"><a href="#menu-contact">Contact</a></div>
			</div>
	        <div class="navbar-collapse collapse pull-right" style="color:black">
	          <ul class="nav navbar-nav navbar-right">
	            <li class="active"><a href="#menu-slider">Home</a></li>
	            <li><a href="#menu-features">About us</a></li>
	            <li><a href="#menu-information">Courses</a></li>
	            <li><a href="#menu-countdown">Countdown</a></li>
	            <li><a href="#menu-price">Pricing</a></li>
	            <li><a href="#menu-testimonial">Testimonials</a></li>
	            <li><a href="#menu-contact">Contact</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	</header>
	<!-- end Header -->

	<!-- Slider and Form -->
	<section id="menu-slider" class="header">
        <div class="container">
            <div class="col-md-12 col-xs-12 col-sm-12 content_slider">
                <h1 id="fittext3" class="title-head text-center">
					<strong>Inclusive Investments in Sustainable Livelihood & Aspirations</strong>
                </h1>
                
                <p class="sub-title-head text-center">
					IISLA embodies the philosophy and story of the founder, a former investment banker and hospitality and tourism management consultant based in London and Manila with particular focus on eco and sustainable developments projects around the world.

					Having witnessed and experienced abject rural poverty as a child, her personal goal is to help bridge the gap between the wealthy and the poor. Raised in a remote farming community in the Philippines and educated in London she collaborates with global, national and local NGOs, government bodies, philanthropists, investors, and large companies to effect positive change where needed.
					
					She loves travelling and her adventures around the world resulted in her working on a number of projects in remote destinations and got closer to her rural roots. She not only got involved and volunteered in poverty eradication projects of various NGOs, she also invested her own money and built a personal portfolio of impact investments in Europe, Asia and Africa.
					
					Her experience as a child, coupled with her passion for food and exploring the world, underpins her investment philosophy: she invests in social businesses that not only solve world problems but also ones that touch her heart and connect her to rural destinations: sustainable food production, social and impact tourism, renewable energy, technology and infrastructure, and transport & logistics.
                </p>
                {{-- <div class="top-info text-center">
	                <button class="info">Learn More</button>
	                <button class=" info2">Purchase</button>
	            </div> --}}
            </div>
            <!-- /slider -->
        </div>
    </section>
	<!-- end Slider and Form -->
	</div>

	<!-- Features -->
	<section id="" class="features">
       <h2 id="fittext2" class="title-start">About us</h2>
       <h2 style="color:black">Our Services</h2>  
       <div class="container column-section row">
	       <div class="item-section col-md-12 text-center">
	            <p class="featured-text">We work closely with social enterprises, established businesses and impact investors with a mission to reach the underserved in society where mainstream finance and access to essential business support may not be available.

					Our services enable entrepreneurs to focus on managing operations and grow their businesses whilst our partners and investors have access to social and environmental projects or enterprises that are scalable particularly in the least developed markets.</p>
	       </div>
	       <div class="item-section col-md-6">
	            <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
	            <h4 class="item-title text-center">Advisory & Valuation</h4>
	            <p class="featured-text">We provide investment advisory and valuation services to early-stage, scalable social enterprises to effectively attract and absorb capital for growth.</p>
	       </div>
	       <div class="item-section col-md-6">
	            <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
	            <h4 class="item-title text-center">Investment Brokerage</h4>
	            <p class="featured-text">We find and match the most suitable investors or strategic partners to social enterprises from our extensive global network.</p>
	       </div>
	       <div class="item-section col-md-6">
	            <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
	            <h4 class="item-title text-center">Strategic Planning</h4>
	            <p class="featured-text">We can assist in developing strategy, preparing business plans and structure operations for the enterprise to grow. We can also assist established businesses to transform their entire value chain to be more inclusive.</p>
	       </div>
	       <div class="item-section col-md-6">
	            <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
	            <h4 class="item-title text-center">Investor Relations</h4>
	            <p class="featured-text">Entrepreneurs are very busy and often find communication with existing and potential investors challenging. We can be the appointed point of contact for your investors.</p>
	       </div>
       </div>
	</section>


	<section id="" class="features">
		<h2 style="color:black">Our Expertise</h2>  
		<div class="container column-section row">
			<div class="item-section col-md-12 text-center">
				 <p class="featured-text">We have extensive experience and focus on improving and optimising sustainability practices at every level of the value chain while generating financial return in the following field of expertise:</p>
			</div>
			<div class="item-section col-md-6">
				 <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
				 <h4 class="item-title text-center">Food Production & Processing</h4>
				 <p class="featured-text">Feeding a growing global population sustainably with nutritious and healthy food with minimal, if not zero, impact on the environment is challenging yet attainable.</p>
			</div>
			<div class="item-section col-md-6">
				 <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
				 <h4 class="item-title text-center">Health & Wellness</h4>
				 <p class="featured-text">As the proverb says: “An ounce of prevention is worth a pound of cure”. Living a healthy lifestyle is not just a dream anymore. Spending on health and wellness is rising rapidly as it is now imperative to look after our mind, body and soul.</p>
			</div>
			<div class="item-section col-md-6">
				 <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
				 <h4 class="item-title text-center">Renewable Energy</h4>
				 <p class="featured-text">Investment in renewable energy, both in power generation and in end-user affordable products, is growing exponentially, particularly in remote communities that are currently not served by existing power grids.</p>
			</div>
			<div class="item-section col-md-6">
				 <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
				 <h4 class="item-title text-center">Sustainable Hotel & Tourism Development</h4>
				 <p class="featured-text">Tourism is often the main economic driver in many countries. As more people are travelling and spending more many destinations around the world are now facing environmental issues, often exacerbated by non-adherence to basic environmental guidelines and practices by many resorts/hoteliers.</p>
			</div>
			<div class="item-section col-md-6">
				 <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
				 <h4 class="item-title text-center">Technology & Infrastructure
				 </h4>
				 <p class="featured-text">Rural communities are often left behind on technology and infrastructure spending. It is imperative to invest in these sectors to enable businesses and people to prosper in remote locations.</p>
			</div>
			<div class="item-section col-md-6">
				 <div class="icon text-center"><i class="fa fa-3x fa-star"></i></div>
				 <h4 class="item-title text-center">Transport & Logistics</h4>
				 <p class="featured-text">Congestion and pollution often plague many cities particularly in developing countries. Connecting people and goods to rural communities in a sustainable and affordable way could be made possible by adopting the latest developments in transport and logistics such as electric vehicles and shared mobility platforms.</p>
			</div>
		</div>
	 </section>

	 


	<section id="" class="features">
		<h2 style="color:black">Our Expertise</h2>  
		<div class="container column-section row">
			<div class="item-section col-md-12 text-center">
				 <p class="featured-text">The IISLA Regional Forum is an event held in various cities to educate social entrepreneurs on how to prepare their enterprises for impact investors.

					Impact for Breakfast is a monthly morning event for investors to learn about impact investing, share knowledge and experiences, and meet social entrepreneurs.
					
					Bankers4Good is a network of volunteer bankers and finance professionals who mentor small enterprises and inclusive businesses operating in less developed markets to help them prepare to absorb investments for growth.</p>
			</div>
		</div>
	 </section>

	<!-- Contact-->
	<section id="menu-contact" class="container contact generic">
		<h2 id="fittext2" class="title-start mb-5">Contact us</h2>
       <div class="contact-form-full col-md-12 col-sm-6 col-xs-12">
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />

                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
          </div>
	</section>
	<!-- end Contact -->
	<!-- Footer -->
	<section class="footer">
	    <div class="footer-section container">
	       <div class="item-footer col-sm-6 col-xs-12 col-md-3">
	            <a class="navbar-logobrand" href="#">IISLA VENTURES</a>
	       </div>
	       <div class="item-footer col-sm-6 col-xs-12 col-md-3">
	            <h4 class="footer-title">Top Links</h4>
	            <ul class="gold links-footer">
	            	<li>Home</li>
	            	<li>About us</li>
	            	<li>Serivices</li>
	            	<li> Contact</li>
	            </ul>
	       </div>
	       <div class="item-footer col-sm-6 col-xs-12 col-md-3">
	            <h4 class="footer-title">Category</h4>
	            <ul class="gold links-footer">
	            	<li>Impact Investment</li>
	            	<li>Partners</li>
	            	<li>Baseball</li>
	            	<li>Others</li>
	            </ul>
	       </div>
	       {{-- <div class="item-footer col-sm-6 col-xs-12 col-md-3">
	            <h4 class="footer-title footer-tags">Tags</h4>
				<span class="fa fa-tag gold"> Cricket</span>
				<span class="fa fa-tag gold"> Cricket</span>
				<span class="fa fa-tag gold"> Cricket</span><br />
				<span class="fa fa-tag gold"> Cricket</span>
				<span class="fa fa-tag gold"> Cricket</span>
				<span class="fa fa-tag gold"> Cricket</span>
	       </div> --}}
	   </div>
    </section>
    {{-- <section class="footer-bottom">
    	<p class="text-center copyright-text">&copy;Themewagon - All Rights Reserved</p>
    </section> --}}
    <!--end Modal 6 img -->
    <!-- ======================= JQuery libs =========================== -->

        <script type="text/javascript">
       		$("#fittext3,#fittext2").fitText(.95, { minFontSize: '35px', maxFontSize: '95px' });
		</script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js2/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js2/nav/jquery.scrollTo.js') }}"></script>
		<script src="{{ asset('js2/nav/jquery.nav.js') }}"></script>
		<script src="{{ asset('js2/jquery-scrolltofixed.js') }}"></script>
		<script src="{{ asset('js2/script.js') }}"></script>
    </body>    
</html>
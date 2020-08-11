<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		$to      = 'goradiapratham@gmail.com';
		$subject = 'Website Enquiry';
		$message = "
						Name:  $name
						Email: $email
						Comments: $comment
					";
		$headers = 'From: goradiapratham@gmail.com';
		if(mail($to, $subject, $message, $headers))
		{
			echo "yeet";
		}
		else
		{
			echo "oof";
		}
	}
	else
	{
?>
<html>
<head>
	<?php 
		include "inc_head.php";
	?>
	<title>
		Welcome | Pratham Goradia
	</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="three.r92.min.js"></script>
	<script src="vanta.net.min.js"></script>
	<?php include "navbar.php"?>
	<div class = "container-fluid">
		<div class = "row front-page">
			<div class = "row col-sm-12 intro-panel">
				<div class = "row intro-text">
					<span style = "color:#ff8c04">Hey!</span> I'm <span style = "color:#ff7e00">Pratham Goradia</span><br>
				</div>
				<div class = "row intro-desc">
					I enjoy working on <span style = "color:#ff7e00">challenging</span> projects that make an <span style = "color:#ff8c04">impact</span>
				</div>
				<i class="fas fa-arrow-down" style = "font-size:1px"></i>
			</div>
			<div class = "nopad row col-sm-12 work-title" id = "work-section">
				<div class = "row work-down">
					<div class = "row" style = "margin-bottom: 7px">Recent Work</div>
					<i class="fas fa-chevron-down" id = "work-down-symbol"></i>
					<div class = "row col-sm-12 recent-line" style = "width: 100%">
						<div class = "nopad hrline" style = "border-bottom: 1px solid #ff8a00; margin-top: 10px; margin-bottom: -10px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class = "row prj-panel small-sect">
			<div class = "row">
				<div class = "nopad col-md-6 prj-pnl">
					<div class = "prj-cont">
						<div class = "prj-img" id = "prj1"> </div>
						<div class = "text-over">
							<div class = "text-title prj-head">Cloudbreakr Influencer Marketing Ltd</div>
							<div class = "prj-exp">Campaign Management for Influencers, Internship</div>
							<div class = "text-cont prj-txt">
								This web app was developed for Cloudbreakr associated influencers to join and manage their social media campaigns. Features include joining open and invited SM campaigns, negotiating with brands, submitting draft posts, receiving feedback, and tracking post dates. I worked with the Cloudbreakr business team and completed the design, front end development and back end development over 2 months. 
							</div>
							<div class = "row exp-btn">
								<i class="fas fa-arrow-down"></i>
								<div class = "myheight"></div>
							</div>
							<div class = "row view-prj">
								<a href = "/cpmt_visitor/" target = "_blank">View Demo<i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class = "nopad col-md-6 prj-pnl">
					<div class = "prj-cont">
						<div class = "prj-img" id = "prj2"> </div>
						<div class = "text-over">
							<div class = "text-title prj-head">Cloudbreakr Influencer Marketing Ltd</div>
							<div class = "prj-exp">Campaign Management for Brands, Internship</div>
							<div class = "text-cont prj-txt">
								This web app was developed for the Cloudbreakr admin team and associated brands to manage their social media campaigns. Features include editing campaign listings, inviting and negotiating with influencers, reviewing draft posts and captions from influencers, assigning post dates and recieving post upload verifications. After understanding the requirements and process flow, I developed this entire project over 1 month.
							</div>
							<div class = "row exp-btn">
								<i class="fas fa-arrow-down"></i>
								<div class = "myheight"></div>
							</div>
							<div class = "row view-prj">
								<a href = "/cpmt_visitor/admin_user" target = "_blank">
									View Demo <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "nopad col-md-4 prj-pnl">
					<div class = "prj-cont">
						<div class = "prj-img" id = "prj3"> </div>
						<div class = "text-over">
							<div class = "text-title prj-head">BMSS Steel Industries</div>
							<div class = "prj-exp">Freelance Website</div> 
							<div class = "text-cont prj-txt">
								This cross-browser, responsive website was developed for an Indian steel company as my first freelance project. I was responsible for the design, content and development of the entire website.
								<!-- For my first freelance project, I developed this cross-browser, responsive website for an Indian Steel company. I discussed the key points and requirements from the business owners, after which I prepared the design and the text content. I then developed the website over 3 months with regular progress updates and feedback. -->
							</div>
							<div class = "row exp-btn">
								<i class="fas fa-arrow-down"></i>
								<div class = "myheight"></div>
							</div>
							<div class = "row view-prj">
								<a href = "http://www.bmssindia.com/" target = "_blank">
									View Website <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class = "nopad col-md-4 prj-pnl">
					<div class = "prj-cont">
						<div class = "prj-img" id = "prj4"> </div>
						<div class = "text-over">
							<div class = "text-title prj-head">Less Is More Insurance Tech Ltd</div>
							<div class = "prj-exp">Freelance Website</div> 
							<div class = "text-cont prj-txt">
								This single page website was developed for an Insurtech company in Hong Kong. I adapted their company presentation to a format suitable for the web and developed this project over 3 weeks.
							</div>
							<div class = "row exp-btn">
								<i class="fas fa-arrow-down"></i>
								<div class = "myheight"></div>
							</div>
							<div class = "row view-prj">
								<a href = "http://www.lessismore.best" target = "_blank">
									View Website <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class = "nopad col-md-4 prj-pnl">
					<div class = "prj-cont">
						<div class = "prj-img" id = "prj5"> </div>
						<div class = "text-over">
							<div class = "text-title prj-head">Goradia Special Steels Ltd</div>
							<div class = "prj-exp">Freelance Website</div> 
							<div class = "text-cont prj-txt">
								This responsive, cross-browser website was developed for a relative's Steel manufacturing corporation over 2 months. I had to understand the client's business and manufacturing procedures. Then I prepared the design and text content before finally developing the project.  
							</div>
							<div class = "row exp-btn">
								<i class="fas fa-arrow-down"></i>
								<div class = "myheight"></div>
							</div>
							<div class = "row view-prj">
								<a href = "http://www.goradia.in" target = "_blank">
									View Demo <i class="fas fa-arrow-right"></i>
								</a>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "row contact-panel">
			<div class = "nopad row col-sm-12 cont-title">
				Contact Me
			</div>
			<div class = "row col-sm-12" style = "width: 100%">
				<div class = "nopad hrline" style = "margin-top: -25px; margin-bottom: 50px"></div>
			</div>
			<div class = "row text-cont feedback">
			</div>
			<form class = "row enq-form">
				<div class = "nopad row col-sm-12">
					<span class = "enq-title text-title">Name :</span>
					<input type = "text" name = "fname" id = "enname" class = "enq-input enq-req" required>
					<span class = "input-error" id = ""></span>
				</div>
				<div class = "row nopad col-sm-12">
					<span class = "enq-title text-title">Email :</span>
					<input type = "email" name = "email" id = "enemail" class = "enq-input enq-req" required>
					<span class = "input-error"></span>
				</div>
				<div class = "row nopad col-sm-12">
					<span class = "enq-title text-title">Comments :</span>
					<textarea rows = "3" cols = "50" id = "encomment" class = "enq-input enq-input-ta"></textarea>
				</div>
				<div class = "row col-sm-12 nopad enq-submit">
					<button type = "submit" class = "enq-submit-btn">Submit</button>
				</div>
			</form>
			<div class = "row col-sm-12">
				<div class = "nopad hrline" style = "margin-top: 40px; margin-bottom: 30px"></div>
			</div>
		</div>
	</div>
	<script>
		$(function() {

			var firstScroll = false;
			$(document).on('scroll', function() {

				/*if ($(this).scrollTop() >= 10 && firstScroll == false)
				{
					firstScroll = true;
					$('html,body').animate(
						{
				        	scrollTop: $("#work-section").offset().top + 20
				    	}, 
				    	850
			    	);
				}*/
				
			    if($(this).scrollTop() >= 80)
			    {
			        $('#work-down-symbol').fadeOut(20);
			    	$('.recent-line').fadeIn(250);
			    }
			    else
			    {
			    	$('.recent-line').fadeOut(20);
			    	$('#work-down-symbol').fadeIn(20);
			    }
			});

			$('.work-down').click(function(){
				$('html,body').animate(
					{
			        	scrollTop: $("#work-section").offset().top + 20
			    	}, 
			    	700
			    );
			});

			$(".enq-form").submit(function(e) {

				    e.preventDefault(); // avoid to execute the actual submit of the form.

				    var form = $(this);
				    var url = form.attr('action');

				    $.post
					(
						"index.php",
						{
							name: $("#enname").val(),
							email: $("#enemail").val(),
							comment: $("#encomment").val()
						},
						function(feedback)
						{
							if(feedback == "yeet")
							{
								$(".enq-form").hide();
								$(".feedback").show();
								$(".feedback").text("Your message has been sent. Thank you for reaching out to me!");
							}
							else
							{
								console.log(feedback);
								$(".enq-form").hide();
								$(".feedback").show();
								$(".feedback").text("There was an error in submitting your message. Please try again in some time.");
							}
						}
					);

			});
			$(".prj-cont").click(function(){
				console.log("boo");
				$(this).find('.text-over').animate(
					{height: "100%", 'border-top-left-radius': "10px", 'border-top-right-radius': "10px"}, 400
				);
				$(this).find('.prj-head').css("width", "90%");
				$(this).find('.prj-exp').css("margin-bottom", "20px");
				$(this).find('.exp-btn').fadeIn(100);
				$(this).find('.view-prj').fadeIn(600);
			});
			$(".exp-btn").click(function(){
				console.log("bee");
				var vheight = $(this).find('.myheight').css("height");
				$(this).parent().animate(
					{'height': vheight, 'border-top-left-radius': "0px", 'border-top-right-radius': "0px"}, 
					200
				);		
				$(this).siblings(".prj-exp").css("margin-bottom", "80px");
				$(this).siblings('.prj-head').css("width", "100%");
				$(this).fadeOut(100);
				$(this).siblings('.view-prj').fadeOut(100);
				event.stopImmediatePropagation();
			});
		});
		VANTA.NET({
		  el: ".intro-panel",
		  color: 0x203feb,
		  backgroundColor: 0xffffff,
		  points: 10.00,
		  spacing: 20.00
		});
	</script>
</body>
</html>
<?php 
	}
?>
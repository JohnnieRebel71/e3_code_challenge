<?php
/**
 * Template Name: Template-Home
 */
?>
<?php get_header('home'); // get header ?>

	<!-- Intro -->
	<div class="container-fluid featured-img">
		<div class="row">
			<div class="container">
				<div class="row featured-row">
					<div class="col-md-22 featured-area">
						<h1 class="featuredheading">EVENTS</h1>
						<span class="subhead">Join us at any of our public events to experience the impact of Youth on Record firsthand.</span>
					</div>
					<div class="col-md-26"></div>
				</div>
			</div>

		</div>
	</div>
	<div class="container events-sec">
		<div class="row">
			<div class="col-md-24">
				<img width="100%" src="<?php echo get_template_directory_uri (); ?>/images/left-col-img.jpg" alt="Rock Star Awards Gala Image"/>
			</div>
			<div class="col-md-24 col-right">
				<span class="date">September 29, 2016</span>
				<h2>Real Rock Star Awards Gala</h2>
				<p>
					Back for its fourth year, the 2016 Real Rock Star Awards #RRSA will bring together local and national musicians to honor Youth on Record’s most resilient and talented students in a one-of-a-kind red carpet event for a new generation. The evening includes amazing music and performances, dinner, drinks, and the unique opportunity to be part of this fabulous event!
				</p>
				<div class="btnwrap pink">
					<button class="btn-text">LEARN MORE</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container upcoming-sec">
		<div class="row">
			<div class="col-md-48 text-center">
				<div class="events-headline-wrap">
					<div class="events-headline">UPCOMING EVENTS</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row"><!-- Top Row -->
			<div class="col-md-16 event-detail-block">
				<div class="event-detail-img event1">
					<div class="event-detail-date-sec">
						<div class="event-detail-date">
							<span class="date">April</span>
							<h2>11</h2>
						</div>
					</div>
				</div>
				<div class="event-detail-txt">
					<span class="date">10:00am - 4:00pm</span>
					<h2>Doors Open Denver</h2>
					<hr class="event-detail-hr">
					<button class="event-detail-learn">LEARN MORE</button>
				</div>
			</div>
			<div class="col-md-16 event-detail-block">
				<div class="event-detail-img event2">
					<div class="event-detail-date-sec">
						<div class="event-detail-date">
							<span class="date">May</span>
							<h2>11</h2>
						</div>
					</div>
				</div>
				<div class="event-detail-txt">
					<span class="date">10:00am - 4:00pm</span>
					<h2>YOR Intro</h2>
					<hr class="event-detail-hr">
					<button class="event-detail-learn">LEARN MORE</button>
				</div>
			</div><div class="col-md-16 event-detail-block">
				<div class="event-detail-img event3">
					<div class="event-detail-date-sec">
						<div class="event-detail-date">
							<span class="date">April</span>
							<h2>11</h2>
						</div>
					</div>
				</div>
				<div class="event-detail-txt">
					<span class="date">10:00am - 4:00pm</span>
					<h2>YOR Day Album Release Block Party</h2>
					<hr class="event-detail-hr">
					<button class="event-detail-learn">LEARN MORE</button>
				</div>
			</div>
		</div>

		<div class="row"><!-- Bottom Row -->
			<div class="col-md-16 event-detail-block">
				<div class="event-detail-img event4">
					<div class="event-detail-date-sec">
						<div class="event-detail-date">
							<span class="date">June</span>
							<h2>29</h2>
						</div>
					</div>
				</div>
				<div class="event-detail-txt">
					<span class="date">10:00am - 4:00pm</span>
					<h2>Westworld Music Showcase</h2>
					<hr class="event-detail-hr">
					<button class="event-detail-learn">LEARN MORE</button>
				</div>
			</div>
			<div class="col-md-16 event-detail-block">
				<div class="event-detail-img event5">
					<div class="event-detail-date-sec">
						<div class="event-detail-date">
							<span class="date">August</span>
							<h2>2</h2>
						</div>
					</div>
				</div>
				<div class="event-detail-txt">
					<span class="date">10:00am - 4:00pm</span>
					<h2>UMS</h2>
					<hr class="event-detail-hr">
					<button class="event-detail-learn">LEARN MORE</button>
				</div>
			</div><div class="col-md-16 event-detail-block">
				<div class="event-detail-img event6">
					<div class="event-detail-date-sec">
						<div class="event-detail-date">
							<span class="date">Nov</span>
							<h2>8</h2>
						</div>
					</div>
				</div>
				<div class="event-detail-txt">
					<span class="date">10:00am - 4:00pm</span>
					<h2>YOR Intro</h2>
					<hr class="event-detail-hr">
					<button class="event-detail-learn">LEARN MORE</button>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); // get footer ?>

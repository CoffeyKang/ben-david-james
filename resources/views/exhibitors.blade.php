<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>JNTO</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/presenters.css">
		<link rel="stylesheet" href="css/base.css">
	</head>
	<body class="container-fuild">
		<header>
			<div class="container">
				<div class="pt-5 d-flex justify-content-between">
					<div>
						<img src="/images/headerlogo.png" alt="">
					</div>
					<div class='text-right'>
						<h1>JAPAN</h1>
						<h2>3D VIRTURAL<br>
							TRAVEL expo</h2>
						<button class="myBtn mt-3">
							March 16, 2022 <br>
							11AP - 7PM EST
						</button>
					</div>
					
				</div>
			</div>
		</header>
		@include('nav')

		<div class='container main'>
			<div class="title">
				EXHIBITORS
			</div>
			<hr>

			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/JNTO.png" alt="">
				</div>
				<div class="presenter-text col-9">
				  <p>As the official tourism board of Japan, JNTO is involved in a wide range of promotional activities to encourage international travellers to visit Japan. Through a variety of campaigns and initiatives, JNTO Canada is inspiring more Canadian travellers to visit Tokyo, Osaka, Kyoto and beyond.</p>
					<p>For more information about travel to Japan, visit JNTO on its Website, Facebook, Instagram and Twitter. To contact the Toronto office of the Japan National Tourism Organization (JNTO) directly, please e-mail: info_toronto@jnto.go.jp </p>
                </div>
				
			</div>
			<hr>

			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/tokyo.png" alt="">
				</div>
				<div class="presenter-text col-9">
				  <p>Despite the severe condition of the tourism industry, Japan has always been and will continue to be full of inspiring travel content such as nature, food, traditional culture, folk customs, and history. These attractions will bring opportunity and future possibility to inbound tourism after recovering from pandemic. Meanwhile sustainable tourism is gaining attention world-wide, and we hope to take this opportunity to promote Japan tours with this specific concept.</p>
					<p>The objective of this travel expo is to create a unique networking opportunity between 1,000 show visitors (Canadian travel agents/professionals) and exhibitors/suppliers (airlines and Canadian tour operators) with the aim of introducing Japan travel and encouraging post-pandemic bookings. With the 3D platform, it will transform visitors from passive listeners to active participants using live chat, roundtable discussions and interactive capabilities to enable conversations and connections. The visitors can journey through digital platforms in kimono and explore the various cyber locations (10 exhibitor booths, venue for roundtable discussion, auditorium/theatre, and breakout venue for one-on-one meetings). </p>
                </div>
				
			</div>
			<hr>

			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/airCanada.png" alt="">
				</div>
				<div class="presenter-text col-9">
				  <p>Air Canada is Canada's largest domestic and international airline serving more than 210 airports on six continents. Canada's flag carrier is among the 20 largest airlines in the world and in 2018 served more than 52 million customers. Air Canada provides scheduled passenger service directly to 63 airports in Canada, 56 in the United States and 98 in Europe, the Middle East, Africa, Asia, Australia, the Caribbean, Mexico, Central America and South America. Air Canada is a founding member of Star Alliance, the world's most comprehensive air transportation network serving 1,317 airports in 193 countries. Air Canada is the only international network carrier in North America to receive a Four-Star ranking according to independent U.K. research firm Skytrax, which also named Air Canada the 2018 Best Airline in North America.</p>
				  <p>Air Canada is committed to end-to-end health and safety protocols. Using leading biosafety standards and enhanced preventive measures, the airline has refined its processes to keep customers safe throughout the travel experience, putting safety first, always.</p>
				  <p>For more information, please visit: aircanada.com/media, follow @AirCanada on Twitter and join Air Canada on Facebook.</p>
                </div>
				
			</div>
			<hr>

			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/JAL_Single_Line1920x1080.jpg" alt="">
				</div>
				<div class="presenter-text col-9">
					<p>Japan Airlines (JAL), a certified 5-Star airline by SKYTRAX and a member of the oneworld® alliance, was founded in 1951 and became the first international airline in Japan. JAL offers a global network that reaches 412 cities in more than 60 countries and regions together with its codeshare partners including American Airlines. The airline operates its JAL SKY SUITE configured aircraft across the Pacific that include award-winning lie-flat seats in Business Class and JAL SKY WIDER seats in Economy Class. In 2021, JAL became the first airline in Japan to receive a Diamond Certification for providing the highest levels of safety measures throughout the travel experience through an extensive audit conducted by APEX and SimpliFlying. JAL’s Canada and U.S. gateways include Vancouver, Seattle, San Francisco, Los Angeles, San Diego, Chicago, Dallas-Fort Worth, Boston, New York and Honolulu. Visit jal.com for the latest information about JAL flight schedules and JAL FlySafe hygiene measures.
					</p>
				</div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/NewGlogo.jpg" alt="">
			</div>
				<div class="presenter-text col-9">
					<p>Founded in 1990 by social entrepreneur Bruce Poon Tip, G Adventures is a small group adventure travel operator offering more than 750 tours in 100 countries, on all seven continents. G Adventures’ award-winning trips support local communities, giving travellers meaningful experiences with people, cultures, landscapes and wildlife, while offering them the  freedom and flexibility to explore on their own. G Adventures’ responsible approach to travel is demonstrated through its ‘G for Good’ social impact initiatives, which include travel guidelines for children, wildlife and Indigenous people, community-based social enterprise projects travellers can experience on a trip, and its industry-leading ‘Ripple Score’ assessment which measures how many traveller dollars stay in the local economy. G Adventures offers life-changing tours for individuals of all ages, interests and budgets. Because our world deserves more you. For more information please visit www.gadventures.com .
					</p>
				</div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/New Goway Logo Color.png" alt="">
			</div>
				<div class="presenter-text col-9">
					<p>Since 1970, Goway Travel has been providing unforgettable travel experiences to some of the world's most exotic destinations. Offering the widest range of products, Goway caters to all budgets from economy to luxury, escorted tours, FIT's, self-drives, cruises, small group touring, and ad-hoc groups. Goway specialised in tailor making unique trips.
					</p>
				</div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
				  <img src="/images/Jade-ENG-transparent.png" alt="">
			</div>
				<div class="presenter-text col-9">
				  <p>We think a journey is much more than a destination, or a few quick camera shot and we have come to an agreement with our loyal customers who felt the same. Why people travel? You are looking for a feeling that different from the city you spent most time of your life. You are looking for adventures, feelings and the sense of other culture where you could discover yourself. Although our tours have been carefully designed to ensure that every trip enriches your experience and expands your sights.</p>
					<p>Your ideal journey is made possible with the knowledge of our experienced tour experts. Simply use our website as inspiration. See what is within reach, dream with your ideal vacation and let us walk you through creating that perfect travel experience. </p>
                </div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
				  <img src="/images/LogoCustomAsia.png" alt="">
			</div>
				<div class="presenter-text col-9">
				  <p>Journeys of Discovery is a boutique tour operator specializing in custom private tours and intimate small groups to Asia, Africa and South America. We started promoting and packaging tours to Japan in 2009 and have since developed significant product expertise and partner relationships across the country. We regularly travel to Japan to explore, inspect and develop new tours, which also allows us to keep current with all the latest tourism developments in the destination.</p>
				  <p>Our passengers to Japan are mainly couples and families traveling on privately guided tours with itineraries combining a mix of hands-on experiences, sightseeing and leisure time.  We also operate small private groups for friends, multi-generational families, schools and special interest programs such as gardens, karate, foodie, wellness and architecture.</p>
				  <p>Journeys of Discovery is an officially appointed agent and distributor of Japan Rail Passes in Canada.We look forward to working with you to plan and tailor your clients trips to Japan based on their schedule, budget and interests.</p>
					<p>We regularly work with travel advisors across Canada. We know, understand and value your business. We will do our best in pricing and quality so you win your client’s booking. </p>
                </div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
				  <img src="/images/logo_royal scenic transp_Sep 25, 2017.jpg" alt="">
			</div>
				<div class="presenter-text col-9">
				  <p>Royal Scenic is a national wholesale supplier and air consolidator with offices in Vancouver, Toronto and Montreal that offers quality products with excellent value exclusively to the retail travel community for the corporate and leisure markets. We take great pride in providing quality customer service in the most friendly and efficient manner. We are a one stop shop, solely focusing on B2B clients.</p>
				  <p>We have a dedicated team of Tour Specialists and offer land package tours to over 90 destinations. Our tours can be customized to fit any need with competitive commissions, discounts and rewards. We also have special deals on group bookings and small group tours.</p>
				  <p>Our recently launched enhanced booking engine Royal+ offers solutions at our clients’ fingertips with a web responsive platform featuring various functionalities to ensure a seamless user experience. With Royal+, agencies can make a booking and issue it themselves, it is a fully automated self-service website.</p>
					<p>Furthermore, our clients can earn rewards through our Royal Scenic Rewards Points (RSRP) loyalty program from every booking they make on our booking engine, from booking our tours and extra points during promotional campaigns with our travel partners. </p>
                </div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/gendrontravel.jpg" alt="">
			</div>
				<div class="presenter-text col-9">
					<p>Gendronski is a Canadian based ski tour operator specialized on made-to-measure ski holidays since 1986. We offer individual and group packages alike; catering to ski clubs, schools, group of friends etc. Our niche markets include cat-skiing, heliskiing, and ski safaris along with Epic and Ikon pass authorized Canadian resellers. We have 12 on-site representatives spread out between B.C., Alberta, and all the way to the Chic-Chocs and Chamonix, welcoming our clients to show them around on a mountain tour and be a reference in case of need during our clients holidays. Visit gendronski.com for more details.
					</p>
				</div>
				
			</div>
			<hr>
			
			<div class="presenter row">
				<div class="logo col-3">
					<img src="/images/EXO2022-En-Clr.jpg" alt="">
			</div>
				<div class="presenter-text col-9">
				  <p>Exotik Journeys has been designing custom vacation experiences all over the world for 45 years. Each itinerary offers an unforgettable journey for the soul and mind with everlasting memories. Discover joy in some of the world’s finest and most unique places with fairy-tale scenery and the magic of wanderlust. Not just an ordinary getaway, expect the trip of a lifetime that will broaden your mind, enrich your soul, and invigorate your spirit. Explore the most extraordinary parts of the world like Japan. From land packages to private guided tours to resort and beach stays, long stay vacations, day tours, city stopovers, cruise programs including pre and post stays, shore excursions, cultural tours, eco-traveller options, and more.</p>
					<p>Exotik Journeys will take you there! </p>
                </div>
				
			</div>
			<hr>


		</div>	

		

			
		
		<footer>
			<div class="container d-flex justify-content-center">
				
				<div>
					Copyright © Shockwave Media & Consulting Inc. All Rights Reserved
				</div>
			</div>
		</footer>
	</body>
		
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#000000">
		<meta name="description" content="Echoplay is a mix of post-punk and alternative rock, characterized by melodic riffs, introspective lyrics and dynamic transitions.">
		<meta name="author" content="Echoplay">
		<meta property="og:image" content="/images/logo512.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="512">
		<meta property="og:image:height" content="512">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
		<link rel="stylesheet" href="./index.css">
		<link rel="icon" type="image/png" sizes="64x64" href="images/favicon.png">
		<link rel="canonical" href="http://echoplay.nl/">
		<link rel="alternate" href="http://echoplay.nl/" hreflang="en" />
		<link rel="manifest" href="manifest.json">
		<title>Echoplay © <?php echo date("Y"); ?></title>
	</head>
	<body>
		<header>
			<nav class="navigation">
				<div class="navigation__inner">
					<div class="navigation__logoAndSocials">
						<div class="navigation__logo">
							<img src="./images/logo.png" alt="logo">
						</div>
						<ul class="navigation__socialsContainer">
							<li>
								<a href="https://open.spotify.com/artist/3PkimEZjOrJDnzwgMRbbEl?si=YS-s_8LXRlS7WjFBG-u9GA">
									<img src="./icons/spotify.svg" alt="">                          
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCVy10PC2UEmmqKL2EhTK3cg">
									<img src="./icons/youtube.svg" alt="">                          
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/echoplayband/">
									<img src="./icons/instagram.svg" alt="">                          
								</a>
							</li>
						</ul>
					</div>
					<div class="navigation__mobileContainer" data-mobile-menu="closed"> 
						<ul class="navigation__menuItems" data-is-open-on-mobile="false">
							<li>
								<a class="font-M" href="#about">About</a>
							</li>
							<li>
								<a class="font-M" href="#songs">Music</a>
							</li>
							<li>
								<a class="font-M" href="#gigs">Gigs</a>
							</li>
							<li>
								<a class="font-M" href="#media">Media</a>
							</li>
							<!--<li>
								<a class="font-M" href="#newsletter">Newsletter</a>
							</li> -->
							<li>
								<a class="font-M button button--gradient button--darkBg" href="https://open.spotify.com/artist/3PkimEZjOrJDnzwgMRbbEl?si=16rMzMS4RziRwLnMf_C3ZA">
									<span>
										Listen
									</span>
								</a>
							</li>
							<li>
								<ul class="navigation__socialsContainer navigation__socialsContainer--mobile">
									<li>
										<a href="https://open.spotify.com/artist/3PkimEZjOrJDnzwgMRbbEl?si=YS-s_8LXRlS7WjFBG-u9GA">
											<img src="./icons/spotify.svg" alt="">                          
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/channel/UCVy10PC2UEmmqKL2EhTK3cg">
											<img src="./icons/youtube.svg" alt="">                          
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/echoplayband/">
											<img src="./icons/instagram.svg" alt="">                          
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<button class="navigation__mobileToggle" data-mobile-toggle>
						<span></span>
						<span></span>
						<span></span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="navigation__mobileToggle__close">
							<path fill="currentColor" d="M12 10.586L7.707 6.293a1 1 0 00-1.414 1.414L10.586 12l-4.293 4.293a1 1 0 101.414 1.414L12 13.414l4.293 4.293a1 1 0 001.414-1.414L13.414 12l4.293-4.293a1 1 0 00-1.414-1.414L12 10.586z"/>
						</svg>
					</button>
				</div>
			</nav>
		</header>
		<section class="homeHero">
			<div class="homeHero__textContent">
				<h1 class="font-3XL">Change<span class="font-M">Out now on all streaming services</span></h1>

				<a href="https://snd.click/vdxv" target="_blank" class="button button--gradient">
					<span>
						Listen now
					</span>
				</a>
			</div>
			<div class="homeHero__rightSide">
				<div class="homeHero__imageContainer">
					<img src="./images/home-hero-compressed.png" alt="">
				</div>
			</div>
		</section>
		<section class="about">
			<div id="about" class="idAnchor"></div>
			<div class="about__title">
				<h2 class="font-XL">About Us</h2>
			</div>
			<div class="about__content">
				<p class="font-M">
					Formed in the summer of 2021, Echoplay is a mix of post-punk and alternative rock, characterized by melodic riffs, introspective lyrics and dynamic transitions, which push the boundaries of both genres.
			</div>
		</section>
		<section class="songs">
			<div id="songs" class="idAnchor"></div>
			<div class="songs__container">
				<h2 class="font-XL">Music</h2>
				<div class="songs__songsContainer">
					<a href="https://open.spotify.com/track/4WFz12vuHOvHk7yCrQloUG?si=171513d82a6e4d3e" target="_blank" class="songs__card">
						<div class="songs__card__image">
							<img src="./images/machine-heart.jpg" alt="">
						</div>
						<div class="songs__card__content">
							<h3 class="font-L--bold italic">Machine Heart</h3>
						</div>
						<button class="button button--gradient">
								<span>
									Listen
								</span>
						</button>
					</a>
					<a href="https://snd.click/vdxv" target="_blank" class="songs__card">
						<div class="songs__card__image">
							<img src="./images/change.jpg" alt="">
						</div>
						<div class="songs__card__content">
							<h3 class="font-L--bold italic">Change</h3>
						</div>
						<button data-open-modal="1" class="button button--gradient">
							<span>
								Listen
							</span>
						</button>
					</a>
				</div>
			</div>
		</section>
		<section class="gigs">
			<div id="gigs" class="idAnchor"></div>
			<div class="gigs__container">
				<h2 class="font-XL">Upcoming Gigs</h2>
				<ul data-gigs-list="collapsed">
					<li class="gigs__gig">
						<a href="#">
							<div class="gigs__gig__date font-M--light">
								03/11/2023
							</div>
							<div class="gigs__gig__location font-M">
								De Beuk (Rotterdam)
							</div>
						</a>
					</li>
					<li class="gigs__gig">
						<a href="#">
							<div class="gigs__gig__date font-M--light">
								15/11/2023
							</div>
							<div class="gigs__gig__location font-M">
								Taste before you waste (Amsterdam)
							</div>
						</a>
					</li>
					<li class="gigs__gig">
						<a href="#">
							<div class="gigs__gig__date font-M--light">
								30/11/2023
							</div>
							<div class="gigs__gig__location font-M">
								Café Hofman (Utrecht)
							</div>
						</a>
					</li>
					<li class="gigs__gig">
						<a href="#">
							<div class="gigs__gig__date font-M--light">
								07/12/2023
							</div>
							<div class="gigs__gig__location font-M">
								Volta (Amsterdam)
							</div>
						</a>
					</li>
				</ul>
				<div class="gigs__pastShowsContainer" data-past-gigs>
					<h4 class="font-M">Past shows</h4>
					<ul class="gigs__pastShows">
						<li class="gigs__gig">
							<a href="#">
							<div class="gigs__gig__date font-M--light">
								15/04/2023
							</div>
							<div class="gigs__gig__location font-M">
								Koffie En Ambacht (Rotterdam)
							</div>
							</a>
						</li>
						<li class="gigs__gig">
							<a href="#">
							<div class="gigs__gig__date font-M--light">
								15/09/2023
							</div>
							<div class="gigs__gig__location font-M">
								Taste before you waste (Amsterdam)
							</div>
							</a>
						</li>
					</ul>
				</div>
				<button class="button button--small" data-toggle-gigs-shown>Show past shows</button>
				<button class="button button--small" data-toggle-gigs-shown-hide>Hide past shows</button>
			</div>
		</section>
		<section class="media">
			<div id="media" class="idAnchor"></div>
			<h2 class="font-XL">Media</h2>
			<div class="media__container" data-slider>
				<div class="media__video">
					<iframe src="https://www.youtube.com/embed/PiusOvPLnvg?si=MkG-NcgZUKCrvG-r" frameborder="0"  allowfullscreen></iframe>
				</div>
				<div class="media__video">
					<iframe  src="https://www.youtube.com/embed/mm9Iqg8DW7s?si=aNxdYgnfL1EHwQGg" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="media__video">
					<iframe  src="https://www.youtube.com/embed/ET6zGvRzMrM?si=r7pyinUGS5Y06UHo" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		<footer  id="newsletter" class="footer">
			<!--<div id="newsletter" class="idAnchor"></div>
			<div class="footer__container">
				<h2 class="font-L">Subscribe to the newsletter</h2>
				<form action="" class="footer__form">
					<input type="text" placeholder="Email here plz">
					<button class="button button--white font-M">
						<span>
							Subscribe
						</span>
					</button>
				</form>
			</div> -->
			<div class="footer__copyright">
				<p class="font-XXS">© <?php echo date("Y"); ?> echoplay - All rights reserved</p>
			</div>
		</footer>
		<!-- <dialog class="songModal" data-modal="1">
			<button class="songModal__closeModal" data-close-modal>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="navigation__mobileToggle__close">
								<path fill="currentColor" d="M12 10.586L7.707 6.293a1 1 0 00-1.414 1.414L10.586 12l-4.293 4.293a1 1 0 101.414 1.414L12 13.414l4.293 4.293a1 1 0 001.414-1.414L13.414 12l4.293-4.293a1 1 0 00-1.414-1.414L12 10.586z"/>
				</svg>
			</button>
			<div class="songModal__buttonsContainer">
				<h2 class="font-XL">Change</h2>
				<a class="button">Spotify</a>
				<a class="button">Bandcamp</a>
				<a class="button">Apple Music</a>
			</div>
			<form>
				<button value="cancel" formmethod="dialog">Cancel</button>
			</form>
		</dialog> -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="./script.js"></script>
	</body>
</html>
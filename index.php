<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<!-- SwiperJS -->
<link rel="stylesheet" href="swiperJS/node_modules/swiper/swiper-bundle.min.css">
<script src="swiperJS/node_modules/swiper/swiper-bundle.min.js"></script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="sweetAlert2/dist/sweetalert2.min.css">
<script src="sweetAlert2/dist/sweetalert2.min.js"></script>

<!-- LazyLoad -->
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@latest/dist/lazyload.min.js"></script>

<!-- Body tag is compulsory to include the button -->
<body>
	<!-- SWIPERJS -->
	<div id="swiperJS">
		<h1 class="text-center">SwiperJS</h1>
		<div class="creativeEffect">
			<p class="text-center mb-1">Sliding (Creative Effect)</p>
			<div class="swiper Swiper1 mx-5">
				<div class="swiper-wrapper h-25">
					<div class="swiper-slide text-white p-3 bg-success"> Slide 1 </div>
					<div class="swiper-slide text-white p-3 bg-danger "> Slide 2 </div>
					<div class="swiper-slide text-white p-3 bg-primary"> Slide 3 </div>
					<div class="swiper-slide text-white p-3 bg-info"> Slide 4 </div>
					<div class="swiper-slide text-white p-3 bg-warning"> Slide 5 </div>
					<div class="swiper-pagination swiper-pagination-1"></div>
				</div>
			</div>
		</div>
		<div class="scrollBar border my-3">
			<p class="text-center mb-1">Mousewheel control</p>
			<div class="swiper Swiper2 mx-5">
				<div class="swiper-wrapper h-25">
					<div class="swiper-slide text-white p-3 bg-success">Slide 1</div>
					<div class="swiper-slide text-white p-3 bg-danger">Slide 2</div>
					<div class="swiper-slide text-white p-3 bg-primary">Slide 3</div>
					<div class="swiper-slide text-white p-3 bg-info">Slide 4</div>
					<div class="swiper-slide text-white p-3 bg-warning">Slide 5</div>
				</div>
				<div class="swiper-pagination swiper-pagination-1"></div>
			</div>
		</div>
		<div class="freeScroll border my-3">
			<p class="text-center">FreeScroll</p>
			<div class="swiper Swiper3 p-3">
				<div class="swiper-wrapper h-25 mb-1">
					<div class="swiper-slide p-3 bg-success">Slide 1</div>
					<div class="swiper-slide p-3 bg-danger">Slide 2</div>
					<div class="swiper-slide p-3 bg-primary">Slide 3</div>
					<div class="swiper-slide p-3 bg-primary">Slide 4</div>
					<div class="swiper-slide p-3 bg-info">Slide 5</div>
					<div class="swiper-slide p-3 bg-warning">Slide 6</div>
					<div class="swiper-slide p-3 bg-primary">Slide 7</div>
					<div class="swiper-slide p-3 bg-info">Slide 8</div>
					<div class="swiper-slide p-3 bg-warning">Slide 9</div>
				</div>
				<div class="swiper-pagination "></div>
			</div>
		</div>
		<div>
			<p class="text-center">Pagination (Fraction)</p>
			<div class="swiper Swiper4 p-5">
				<div class="swiper-wrapper h-25 mb-1">
					<div class="swiper-slide bg-success text-white d-flex justify-content-center align-items-center">Slide 1</div>
					<div class="swiper-slide bg-danger text-white d-flex justify-content-center align-items-center">Slide 2</div>
					<div class="swiper-slide bg-primary text-white d-flex justify-content-center align-items-center">Slide 3</div>
					<div class="swiper-slide bg-info text-white d-flex justify-content-center align-items-center">Slide 4</div>
					<div class="swiper-slide bg-warning text-white d-flex justify-content-center align-items-center">Slide 5</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
	<!-- SWEETALERT2 -->
	<div id="sweetAlert2">
		<h1 class="text-center">SweetAlert2</h1>
		<div class="button-wrapper">
			<button class="button-3 m-2" role="button" onclick="callAlert('Success!', 'Your operation was successful!')">Success (Alert)</button>

			<button class="button-3 m-2" role="button" onclick="callToast('Log in Successfully', {timerProgressBar: true}, '', 'success')">Log In Success (Notification)</button>

			<button class="button-3 m-2 bg-danger" role="button" onclick="callAlert('Error', 'Your operation was unsuccessful', {}, 'error', 'Please try again!')">Error (Alert)</button>

			<button class="button-3 m-2 bg-danger" role="button" onclick="callToast('Log in Unsuccessful', {timerProgressBar: true}, 'Error', 'error', 'top-end', 2000)">Log In Unsuccessful (Notification)</button>

			<button class="button-3 m-2 bg-warning" role="button" onclick="callAlert('Rick Rolled', 'Operation Rick Rolled was successful!', {
				imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlF0OurUW4CHieL8hpfOneliqJuqPZH5io5A&s',
				imageAlt: 'Rick Rolled'
				})">
				Rick Rolled (Image)
			</button>

			<button class="button-3 m-2 bg-danger" role="button" onclick="callAlert('Are you sure?','You won\'t be able to revert this!',
				{
					showCancelButton: true,
					cancelButtonColor: '#d33',
					confirmButtonColor: '#2C974B'
				},
				'warning',
				'Yes, delete this!',
				// Depending on what the user click, it will show different alerts
				(result) => {
					if (result.isConfirmed) {
						callAlert('Deleted!', 'Your file has been deleted.', {}, 'success', 'Okay!');
					} else {
						callAlert('Cancelled!', 'Your file was not deleted.', {}, 'error', 'Okay!');
					}
				}
			)">
				Are you sure?? (Nested Alert)
			</button>
		</div>
	</div>
	<!-- LAZYLOAD -->
	<div class="lazyLoad mx-3">
		<hr>
		<h1 class="text-center">LazyLoad</h1>
		<?php
			// load 50 random images
			for($x = 0 ; $x <50; $x++){
				// API to load a random image
				echo '<img alt="A lazy image" class="lazy" data-src="https://picsum.photos/200/300?random='. $x . '.webp""/> <br>';
			}
		?>
	</div>
</body>

	<!-- LazyLoad SCRIPT -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const lazyLoadInstance = new LazyLoad({
			elements_selector: ".lazy",  // Lazy-load elements with the class "lazy"
			threshold: 10,              // Trigger loading 30px before the element enters the viewport
			callback_loaded: function(el) {
				console.log("Image loaded:", el);
			}
		});
	});
</script>

<!-- SECRET ALERT SCRIPT -->
<script>
	function callAlert(pTitle, pText, pExtraConfig = {}, pIcon = 'success', pConfirmButtonText = 'Great!', pCallback = null) {
		// Define the SweetAlert configuration
		const vAlert = {
			title: pTitle,
			text: pText,
			icon: pIcon,
			confirmButtonText: pConfirmButtonText,
			...pExtraConfig
		};
		
		// Show SweetAlert
		Swal.fire(vAlert).then((result) => {
			// If a callback function is passed, execute it with the result
			if (pCallback) {
				pCallback(result);
			}
		});
	}

	function callToast(pText, pExtraConfig = {}, pTitle = 'Notification', pIcon = 'info', pPosition = 'top-end', pTimer = 3000) {
		const toastConfig = {
			title: pTitle,
			text: pText,
			icon: pIcon,
			position: pPosition, // Position can be 'top-start', 'top-end', 'bottom-start', 'bottom-end'
			showConfirmButton: false, // No need for a confirm button in a toast
			timer: pTimer, // Time in milliseconds (default: 3000)
			toast: true, // Enables toast mode
			customClass: {
				popup: 'colored-toast small-toast',
			},
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', () => {
					Swal.stopTimer(); // Stop timer if the user hovers over the toast
				});
				toast.addEventListener('mouseleave', () => {
					Swal.resumeTimer(); // Resume timer when the user moves away
				});
			},
			...pExtraConfig
		};
		Swal.fire(toastConfig);
	}
</script>

<!-- SWIPER SCRIPT -->
<script>
	var swiper = new Swiper(".Swiper1", {
				grabCursor: true,
				effect: "creative",
				creativeEffect: {
					prev: {
					shadow: true,
					translate: [0, 0, -400],
					},
					next: {
					translate: ["100%", 0, 0],
					},
				},
				pagination: {
					el: ".swiper-pagination",
					dynamicBullets: true,
				}
		});
	var swiper2 = new Swiper(".Swiper2", {
	  direction: "vertical",
	  slidesPerView: 1,
	  spaceBetween: 30,
	  mousewheel: true,
	  pagination: {
		el: ".swiper-pagination",
		clickable: true,
	  },
	});
	var swiper3 = new Swiper(".Swiper3", {
		slidesPerView: 3,
		spaceBetween: 30,
		freeMode: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
	var swiper4 = new Swiper(".Swiper4", {
		loop:true,
		pagination: {
			el: ".swiper-pagination",
			type: "fraction",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>
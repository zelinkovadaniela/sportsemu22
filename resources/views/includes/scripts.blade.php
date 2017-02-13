{!! Html::script('https://checkout.stripe.com/v2/checkout.js') !!}
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js') !!}
{!! Html::script('http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js') !!}
{!! Html::script('http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js') !!}
{!! Html::script('http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js') !!}
{!! Html::script('http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js') !!}
{!! Html::script('js/app.js') !!}
{!! Html::script('js/datepicker.js') !!}
{!! Html::script('js/appModule.js') !!}
{!! Html::script('/js/bookingcontroller.js') !!}
{!! Html::script('js/datepickerController.js') !!}
{!! Html::script('/js/listingsController.js') !!}
{!! Html::script('/js/homeController.js') !!}
{!! Html::script('/js/profileController.js') !!}

<!--Needed for unslider-->
{!! Html::script('/js/lightslider.js') !!}
   <script>
$('.content-slider').each(function(i, e){
  var id = 'adaptive';
  $(e).attr('id', id+i);
  var selector = '#'+id+i;
   $(selector).lightSlider({
    adaptiveHeight:false,
    item:1,
    slideMargin:0,
    loop:true,
    pager:false
   });
});
</script>

<script>
$(document).ready(function(){
	
	// Variables
	var clickedTab = $(".tabs > .active");
	var tabWrapper = $(".tab__content");
	var activeTab = tabWrapper.find(".active");
	var activeTabHeight = activeTab.outerHeight();
	
	// Show tab on page load
	activeTab.show();
	
	// Set height of wrapper on page load
	tabWrapper.height(activeTabHeight);
	
	$(".tabs > li").on("click", function() {
		
		// Remove class from active tab
		$(".tabs > li").removeClass("active");
		
		// Add class active to clicked tab
		$(this).addClass("active");
		
		// Update clickedTab variable
		clickedTab = $(".tabs .active");
		
		// fade out active tab
		activeTab.fadeOut(250, function() {
			
			// Remove active class all tabs
			$(".tab__content > li").removeClass("active");
			
			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class active to corresponding tab
			$(".tab__content > li").eq(clickedTabIndex).addClass("active");
			
			// update new active tab
			activeTab = $(".tab__content > .active");
			
			// Update variable
			activeTabHeight = activeTab.outerHeight();
			
			// Animate height of wrapper to new tab height
			tabWrapper.stop().delay(50).animate({
				height: activeTabHeight
			}, 500, function() {
				
				// Fade in active tab
				activeTab.delay(50).fadeIn(250);
				
			});
		});
	});
	
	// Variables
	var colorButton = $(".colors li");
	
	colorButton.on("click", function(){
		
		// Remove class from currently active button
		$(".colors > li").removeClass("active-color");
		
		// Add class active to clicked button
		$(this).addClass("active-color");
		
		// Get background color of clicked
		var newColor = $(this).attr("data-color");
		
		// Change background of everything with class .bg-color
		$(".bg-color").css("background-color", newColor);
		
		// Change color of everything with class .text-color
		$(".text-color").css("color", newColor);
	});
});
</script>
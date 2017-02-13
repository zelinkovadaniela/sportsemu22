# Steps to create the sportsemu

* create repository on local machine
* clone laravel from bitbucket
* create controllers for homepage, search details, booking, payment
* create views html-wrapper, layout, header, footer, menu
* HomepageController
   	 * create public function index()
    	* create views for the controller - homepage/homepage, homepage/layout
    	* put the views into the controller
    	* present them
* SearchResultsController
    	*create public function index()
   	*create views for the controller
    	* put the views into the controller
    	    	* select from the database based on search results from HC
       	 	* insert into the view
    	* present them
* BookingController
    	* create public function index()
    	* create views for the controller
    	* put the views into the controller
         	* select from the database based on search results from HC
         	* insert into the view
    	* present them
	* cancellation?
	* updates?
* PaymentController
    	* create public function index()
    	* create views for the controller
    	* put the views into the controller
    	* present them
* ManageListingController
	* create controller
	* function index
		* select from database(based on user_has_listing, user_id, listing_id, show all of them)
		* add it into the view
	* Add new listing
		* new view
		* query: insert into database
	* edit and delete existing one
		* come to page with $_GET
		* select from the database based on listing id
		* update the database
	
* NewUserController
* UserDetailController


# Data model: 

<!--## user
	id:
	email:
	username:
	password:
	remember_toke:
	timestamp-->-->

<!--## user_detail
	user_id:
	name:
	surname:
	address:
	phone:
	email:
	occupation:
	personal_info:
	date_of_birth:-->
	
<!--## avatars
	img:
	path:-->

<!--## user_has_avatar
	user_id:
	avatar_id:-->


<!--## listing
	id:
	title:
	slug:
	description:
	gps_lat:
	gps_long:
	street:
	house_nr:
	city:
	postcode:
	state:-->

<!--## user_has_listing
	user_id:
	listing_id:-->

<!--## booking
	id:
	user_id:
  listing_id:
  from:
  until:-->

<!--## listing_has_booking
	listing_id:
	booking_id:-->

<!--## user_has_booking	
	user_id:
	booking_id:-->

<!--## image
	id:
	path:s-->

<!--## listing_has_image
	listing_id:
  image_id:-->





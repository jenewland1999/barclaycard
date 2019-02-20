<!--product page-->
<div class="w-100">
<div class="col-lg-9 float-left p-0 m-0">
<div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</div>

<!--end carousel-->
<div class="col-lg-3 float-right  d-flex flex-column justify-content-around p-4 m-0">
<div> {@productname}</div>
<div class="price">{@price}
</div>
<div class="">
	<h6 class="font-weight-bold text-center mt-5">Choose Size</h6>
	<div class="custom-control custom-radio">
		<input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
		<label class="custom-control-label" for="defaultGroupExample1">A4</label>
	</div>

	<!-- Group of default radios - option 2 -->
	<div class="custom-control custom-radio">
		<input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
		<label class="custom-control-label" for="defaultGroupExample2">A3</label>
	</div>

	<!-- Group of default radios - option 3 -->
	<div class="custom-control custom-radio">
		<input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
		<label class="custom-control-label" for="defaultGroupExample3">A1</label>
	</div>
	<h6 class="font-weight-bold text-center mt-5">Choose Frame Color</h6>
		<select class="browser-default custom-select">
			<option selected>Open this select menu</option>
			<option value="1">White</option>
			<option value="2">Black</option>
			<option value="3">Gold</option>
		</select>
	<label class="form-group mt-5" for="qty">qty</label>
		<div class="form-group">
			<select class="w-50 form-control" name="quantity" value="" id="qty">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
</div>
<button class="md-form btn btn-dark w-50" type="submit" formaction="?route=shop&action=add&jobid={@jobid}">ADD TO BASKET</button>
</div>
</div>
</div>


<div class="pl-3">
<p>Product description : {@description}</p>
<div><a class="btn collapsed " data-toggle="collapse" data-target="#description" role="button" aria-expanded="false" aria-controls="description">DETAILS</a></div>
<div class="collapse" id="description">

<p>Product description : {@detaileddescription}</p>

</div>
<div class=" mt-5 row">
<fieldset class="rating">
		<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
		<input type="radio" id="star4half" name="rating" value="4 and a half" checked="checked"/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
		<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
		<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
		<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
		<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
		<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
		<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
		<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
		<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
<h4 class="ml-3 font-weight-bold"> 3 reviews </h4>
</div>
<div><a class="btn collapsed mb-5" data-toggle="collapse" data-target="#reviews" role="button" aria-expanded="false" aria-controls="description">REVIEWS</a></div>

<div class="collapse" id="reviews">

<ul class="reviews">
	<li>
	<p>{@reviewcontent}</p>
	<div class="details">
		<strong>{@reviewerfname}</strong>
	</div>
	</li>
	<li>
	<p>{@reviewcontent}</p>
	<div class="details">
		<strong>{@reviewerfname}</strong>
	</div>
	</li>
	<li>
	<p>{@reviewcontent}</p>
	<div class="details">
		<strong>{@reviewerfname}</strong>
	</div>
	</li>
</ul>
<div class="row justify-content-around mt-5">
<h5 class="text-center w-100">Rate Product</h5>
<fieldset class="rating">
	<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
	<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
	<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
	<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
	<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
	<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
	<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
	<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
	<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
	<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</div>
<label class="">write</label>
<div class="form-group">
<textarea class="form-control summernote pt-5" name="jobdescription[content]">{@content}</textarea>
</div>
<input type="hidden" name="job[accountid]" value="{@accountid}"/>
<input class="btn" type="submit" value="SAVE"/>

</div>
</div>
<div class="row justify-content-around">
<h4> You may also like </h4>
</div>
<div class="d-flex col-lg-12 ">
	<div class="col-lg-4">
  <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid" alt="placeholder">
	</div>
	<div class="col-lg-4">
  <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid" alt="placeholder">
	</div>
	<div class="col-lg-4">
  <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid" alt="placeholder">
	</div>
</div>
<!--end product page-->

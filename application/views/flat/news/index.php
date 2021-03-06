<div class="container second-stage">
	<div class="row">
		<div class="col-md-3">
			<img src="<?=BASE_URL?>public/images/mainc/001.jpg" class="img-fluid" alt="Sri Shankara Granthavali cover image" />
		</div>	
		<div class="col-md-9">
			<h3 class="text-center">Sri Shankara Granthavali</h3> 
			<h4 class="text-center"><i>by</i> T.K. Balasubrahmanyam</h4>
			<h4 class="text-center">E-books</h4>
			<p class="text-center"> An authoritative Collected Works of Adi Sankara!</p>
			
				<p class="text-center mt-2"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Pre-Order</button></p>	
			<h4 class="mt-5">Commemorating</h4>
			<h4>Gurubhaktashikhamani (गुरुभक्तशिखामणिः) Sri T K Balasubrahmanyam</h4>
			<p>Born in 1874, Sri T K Balasubrahmanyam hailed from a prosperous family of Thanjavur. He showed a remarkable aptitude for scholarship when still young. Mastering Tamil, Sanskrit and English speedily, he graduated from S.P.G. College, Tiruchi. In 1904, he founded Sri Vani Vilas Press of Srirangam, which went onto become a well-known firm of publishers and printers of ancient and national literature. During His 1907-1910 Vijayayatra, the 33rd Jagadguru of Dakshinamnaya Sri Sharadapeetham, Sringeri, Sri Sacchidananda Shivabhinava Nrisimha Bharati Mahaswamiji graced the residence of Sri Balasubrahmanyam in Srirangam, for one day, sometime in 1908. Knowing about his Sri Vani Vilasa Press, the Jagadguru commanded Sri Balasubrahmanyam to bring out a good edition of Sadashiva Brahmendra's Brahmasutra vritti; this task was accomplished and the book brought out on 20 January 1909. During the chaturmasya that year in Papanasham, July-August 1909, Sri Balasubrahmanyam had the Darshan of the Jagaduguru, who commanded him to bring out a uniform and accurate edition of all the genuine works of Bhagavatpada Sri Shankaracharya. On 21st February 1910, Sri Balasubrahmanyam was able to place six volumes of Sri Shankara Granthavali during the Kumbhabhishekam of the Temple at Kalady, the birthplace of the Great World Teacher. Looking at the time taken to carry out the command of the Jagadguru and the quality of the volumes published, it can only be due to the Grace of the Jagadguru. This digital edition of the Memorial Edition of Sri Sankaracharya’s Works (20 Vols.) is brought out to commemorate the great accomplishment of Sri Balasubrahmanyam. Devangari font used here is from Adisila, which has been designed to resemble the typeface used in Vani Vilasa publications. It is hoped that this will pave the way to bring to life again all the publications of the Sri Vani Vilasa Press, Srirangam.</p>
		</div>	
	</div> 
</div>
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Order Details</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="<?=BASE_URL?>orders" method="POST">
				<div class="modal-body">
					<div class="container">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="name"> Full Name<font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" type="text" class="form-control" id="name" name="name" placeholder="Shankara Sharma">	
							</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="mobile"> Mobile no<font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" minlength="10" type="number" class="form-control" id="mobile" name="mobile" placeholder="9900990099">	
							</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="email"> Email ID<font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" type="email" class="form-control" id="email" name="email" placeholder="contact@sriranga.digital">	
							</div>
						</div>
						<hr>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="quantity"> Quantity<font style="color: red;">*</font> :</label> 	
							</div>
							<div class="col-sm-2">
								<label>&#x20B9;<?=unitPrice?>  </label>
							</div>
							<div class="col-sm-1">
								<label> X </label>
							</div>
							<div class="col-sm-3">
								<input required="required" type="number" min="1" value="1" class="form-control" id="quantity" name="quantity">	
							</div>
							<div class="col-sm-2">
								<label>&#x20B9;1000</label>
							</div>
						</div>
						<hr>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="address1"> Address Line 1<font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" type="text" class="form-control" id="address1" name="address1" placeholder="No 12 10 Cross 4th Main ">	
							</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="address2"> Address Line 2 : </label> 	
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="address2" name="address2" placeholder="Jayalakshmipuram">	
							</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="city"> City<font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" type="text" class="form-control" id="city" name="city" placeholder="Mysuru">	
							</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="pincode"> Pin code<font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" type="number" class="form-control" id="pincode" name="pincode" placeholder="570022">	
							</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-sm-4">
								<label for="state"> State <font style="color: red;">*</font> : </label> 	
							</div>
							<div class="col-sm-8">
								<input required="required" type="text" class="form-control" id="state" name="state" placeholder="Karnataka">	
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Continue</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

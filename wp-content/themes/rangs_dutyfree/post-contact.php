  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>how to reach us?</h2>
		
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	 <?php
			 if(isset($_POST['sub']))
			 {
			    $uname=$_POST['uname']; 
				  $mailid=$_POST['mailid'];
				  $phone=$_POST['phone'];
				  $message=$_POST['message'];
			     // mail($uname,$mailid,$phone,$message);
			   if(mail($uname,$mailid,$phone,$message))
			   {
				 echo "mail sent";
			   }
			   else
			   {
				 echo "mail failed";
			   }
			 }
		?>
		<form name="frm" method="post" action="#">
		
        <p class="red">Feel free to contact us...</p>
        <label class="sr-only">Full Name *</label>
        <input class="form-control" type="text" name="uname" id="uname" placeholder="Full Name *">
        <label class="sr-only">Email *</label>
        <input class="form-control" type="text"  name="mailid" id="mailid" placeholder="Email *">
        <label class="sr-only">Phone</label>
        <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
        <label class="sr-only">Message *</label>
        <textarea class="form-control" name="message" id="message" placeholder="Message *"></textarea>
        <input class="btn btn-danger" type="submit" value="Submit" name="sub" id="sub">
		</form>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <p class="red"><?php $id=93; $post = get_page($id); echo $post->post_title; ?></p>
        <div class="shadow">
          <div class="contactmap">
             <?php $id=93; $post = get_page($id); echo $post->post_content; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
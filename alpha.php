<!--SITE TITLE-->
<?php
echo "<title>Alpha</title>";
?>

<!--META-->
<?php
echo  '<meta charset="UTF-8">';
echo  '<meta name="description" content="Alpha">';
echo  '<meta name="keywords" content="PHP,HTML,CSS,XML,JavaScript">';
echo  '<meta name="author" content="CodeLyfe">';
echo  '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>

<!--CDN-->
<?php
echo '<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">';

echo '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">';

echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">';

echo '<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>';

echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>';

echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>';
?>

<!--VARIABLES-->
<?php
$mainconpad ="10px";

$tab0 ="<span class='ion-home'></span> Home";
$tab1 ="<span class='ion-person'></span> About";
$tab2 ="<span class='ion-information-circled'></span> Lorem ipsum";
$tab3 ="<span class='ion-email'></span> Contact";

$jumbotronD ="BootStrap Template V4";
$jumbotronL ="Loaded with (PHP-JS-CSS-FONTAWESOME-IONICONS)";
$jumbotronBackgroundC ="#fff";

#FOOTER
$copyright ="Copyright ©";
$sitename ="YourSite.Com";
$year ="2017";
$footcolor ="#000";
$ftextalign ="right"; // center,left,right
$ffontweight ="bold";
$fpad ="10px"; // 1-9999px

#ABOUT
$displaya ="About Us";
$leada ="Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

$aboutimage0 ="https://placehold.it/250x150";
$abouthead0 ="Person 0";
$aboutcontent0 ="Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

$aboutimage1 ="https://placehold.it/250x150";
$abouthead1 ="Person 1";
$aboutcontent1 ="Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
?>



<!--TAB NAV-->


<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>


<div class="container" style="padding-top: <?php echo $mainconpad; ?>">

<!---->

<!---->

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#tab0" role="tab"><?php echo $tab0; ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tab1" role="tab"><?php echo $tab1; ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"><?php echo $tab2; ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"><?php echo $tab3; ?></a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  
  <div class="tab-pane active" id="tab0" role="tabpanel">
  <!---->
  <div class="jumbotron jumbotron-fluid" style="background: <?php echo $jumbotronBackgroundC; ?>;">
  <div class="container">
    <h1 class="display-3"><?php echo $jumbotronD; ?></h1>
    <p class="lead"><?php echo $jumbotronL; ?></p>
  </div>
  </div>
  <!---->

  <!---->
  <div class="container">

  <div class="row">
  <div class="col-8">
  	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at risus est. In vitae lectus consectetur, volutpat nibh vitae, volutpat felis. Nunc maximus placerat lorem eget semper. Cras varius scelerisque lorem a malesuada. Morbi quis odio ut augue ultricies malesuada. Curabitur arcu augue, varius ut sem sed, dapibus imperdiet arcu. In at rutrum orci. Etiam nec turpis dolor. Mauris varius tempor ante nec efficitur. Suspendisse commodo gravida venenatis.

	Donec varius aliquam nisi, ut accumsan arcu rutrum vitae. Morbi vulputate, enim eu volutpat tempor, magna quam sagittis tortor, vitae ornare mauris magna a velit. Aliquam aliquet elit quis ante tincidunt euismod. In vel massa sed eros euismod tincidunt sit amet non tortor. Morbi tristique elit in suscipit hendrerit. Etiam vitae ornare nunc, vitae posuere nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras mollis nibh et elementum porttitor. Vivamus pellentesque, leo vitae ornare consectetur, velit velit bibendum nisl, quis lacinia dolor odio at enim. Maecenas sed ante libero. Nam pellentesque velit felis, auctor commodo ipsum convallis sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae
  </div>
  <div class="col-4">
  <img src="http://placehold.it/350x250" width="100%">
  </div>
  
  </div>
  
  </div>
  <!---->

  </div>
  
  <div class="tab-pane" id="tab1" role="tabpanel">
  <!---->

  <div class="jumbotron jumbotron-fluid" style="background: #fff;">
  <div class="container">
    <h1 class="display-3"><?php echo $displaya; ?></h1>
    <p class="lead"><?php echo $leada; ?></p>
  </div>
  </div>

  <div class="media">
  <?php echo'<img class="d-flex mr-3" src="'.$aboutimage0.'" alt="Generic placeholder image">'; ?>
  <div class="media-body">
    <h5 class="mt-0"><?php echo $abouthead0; ?></h5>
    <?php echo $aboutcontent0; ?>
  </div>
  </div>

  <br/>

  <div class="media">
  <div class="media-body">
    <h5 class="mt-0"><?php echo $abouthead1; ?></h5>
    <?php echo $aboutcontent1; ?>
  </div>
  <?php echo'<img class="d-flex mr-3" src="'.$aboutimage1.'" alt="Generic placeholder image">'; ?>
  </div>

  <br />

  <!---->
  </div>
  
  <div class="tab-pane" id="tab2" role="tabpanel" style="padding-top: 10px;">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at risus est. In vitae lectus consectetur, volutpat nibh vitae, volutpat felis. Nunc maximus placerat lorem eget semper. Cras varius scelerisque lorem a malesuada. Morbi quis odio ut augue ultricies malesuada. Curabitur arcu augue, varius ut sem sed, dapibus imperdiet arcu. In at rutrum orci. Etiam nec turpis dolor. Mauris varius tempor ante nec efficitur. Suspendisse commodo gravida venenatis.

    Donec varius aliquam nisi, ut accumsan arcu rutrum vitae. Morbi vulputate, enim eu volutpat tempor, magna quam sagittis tortor, vitae ornare mauris magna a velit. Aliquam aliquet elit quis ante tincidunt euismod. In vel massa sed eros euismod tincidunt sit amet non tortor. Morbi tristique elit in suscipit hendrerit. Etiam vitae ornare nunc, vitae posuere nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras mollis nibh et elementum porttitor. Vivamus pellentesque, leo vitae ornare consectetur, velit velit bibendum nisl, quis lacinia dolor odio at enim. Maecenas sed ante libero. Nam pellentesque velit felis, auctor commodo ipsum convallis sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

    Phasellus dapibus id mauris id aliquet. Proin blandit urna justo, eu viverra tortor hendrerit sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nec ligula ac magna consequat placerat at vel lectus. Pellentesque id tortor sodales, scelerisque risus a, ultrices libero. Sed dolor tellus, pretium ac dolor sit amet, ultrices accumsan diam. Aliquam erat volutpat. Maecenas nec interdum tellus, vel luctus mauris. Integer imperdiet mauris eget dolor imperdiet, ut pulvinar nulla viverra. Mauris sollicitudin dui vitae ullamcorper varius.

    Sed placerat lacinia ante vitae gravida. Nulla tellus purus, iaculis eu eleifend et, aliquet sed nunc. Nulla aliquet luctus turpis, at vulputate eros semper non. Quisque purus mi, vestibulum eget mattis eget, posuere id turpis. Quisque vitae magna et odio molestie ultrices. Nullam eget erat ac metus hendrerit porttitor. Donec ac volutpat nisl. Sed interdum mi quis sapien ornare, nec rhoncus quam tincidunt. Curabitur placerat, sapien quis gravida lobortis, tortor odio feugiat massa, nec vulputate lacus turpis non tellus. Pellentesque pretium malesuada dui, ac sodales turpis porta eu.

    Cras eros lacus, porta eu sagittis id, egestas vel enim. Maecenas sagittis accumsan ex eu fringilla. Praesent vitae risus tempor, posuere enim a, sagittis arcu. Duis tempus, libero sit amet mollis ultrices, nibh ex tempor nibh, non tincidunt justo sem vel odio. Aenean et auctor est. Phasellus ac iaculis lectus, vitae maximus dui. Cras non magna cursus, ornare odio id, pretium velit. In quis sagittis justo, sed gravida enim. Sed non mi maximus orci rutrum finibus a vel lectus.
  </div>
  
  <div class="tab-pane" id="tab3" role="tabpanel" style="padding-top: 10px;">
  <!---->
  
  	<form class="form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
				<?php echo "<p class='text-danger'>$errName</p>";?>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
				<?php echo "<p class='text-danger'>$errEmail</p>";?>
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
				<?php echo "<p class='text-danger'>$errMessage</p>";?>
			</div>
		</div>
		<div class="form-group">
			<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
				<?php echo "<p class='text-danger'>$errHuman</p>";?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<?php echo $result; ?>	
			</div>
		</div>
	</form> 
	
	<?php
		if (isset($_POST["submit"])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$human = intval($_POST['human']);
			$from = 'YOUR SITE FORM'; 
			$to = 'YOURCONTACT@EMAIL.COM'; 
			$subject = 'SOMEONE IS TRYING TO CONTACT YOU';
			
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	 
			// Check if name has been entered
			if (!$_POST['name']) {
				$errName = 'Please enter your name';
			}
			
			// Check if email has been entered and is valid
			if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$errEmail = 'Please enter a valid email address';
			}
			
			//Check if message has been entered
			if (!$_POST['message']) {
				$errMessage = 'Please enter your message';
			}
			//Check if simple anti-bot test is correct
			if ($human !== 5) {
				$errHuman = 'Your anti-spam is incorrect';
			}
	 
	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}
		}
	?>
  <!---->
  </div>

</div>

</div>

<!--TAB NAV END-->

<div class="container">
<footer style="text-align: <?php echo $ftextalign; ?>; color: <?php echo $footcolor; ?>; font-weight: <?php echo $ffontweight; ?>; padding-bottom: <?php echo $fpad; ?>;">
<?php echo $copyright; ?> <?php echo $sitename; ?> <?php echo $year; ?>
</footer>
</div>
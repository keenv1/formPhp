<?php require 'config/app.php';?>
<?php $title='contact';
include_once 'templeat/hedar.php';?>
<?php
	function filterSting($field){
        $field = filter_var(trim($field) , FILTER_SANITIZE_STRING);
        if (empty($field)){
        	return false;
        }else{
        	return $field;
        }
	}
//	xss is die
	function filterEmail($field){
		$field = filter_var(trim($field) , FILTER_SANITIZE_EMAIL);
		if (filter_var($field , FILTER_VALIDATE_EMAIL)){
            return $field;
		}else return false;

	}

$nameError = $emailError = $documentError = $massageError =' ';
$name = $email = $massage = ' ';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//	echo "<pre>"; print_r($_POST); print_r($_FILES); echo"</pre>";
		$name = filterSting($_POST['name']);
        $massage = filterSting($_POST['massage']);
        $email = filterEmail($_POST['email']);
		if(!$name){
			$nameError = 'your name is required';
		}
		if(!$massage){
			$massageError = 'you have error in massage';
		}
		if(!$email){
		   $emailError = 'you email is required ';
		}

		if (isset($_FILES['document']) && $_FILES['error'] == 0){
			$allowed = [
				'jpg' => 'image/jpg',
				'png' => 'image/png',
				'gif' => 'image/gif',
			];
			$fileMimeType = mime_content_type($_FILES['document']['tmp_name']);
			$maxFileSize = 10 * 1024;
			$fileSize = $_FILES['document']['size'];
			if(!in_array($fileMimeType , $allowed)){
				 $documentError ="your file is not allowed your img is ".$fileMimeType ." you can use only png , jpg , gif ";
			}
			if ($fileSize > $maxFileSize)
				 $documentError = 'your size is not allowed max size is : ' .$maxFileSize;
		}
}?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="name">Enter your name</label>
		<input type="text" name="name" value="<?php echo $name;?>" placeholder="your Name" class="form-control">
		<span class="text-danger"> <?php echo $nameError?></span>
	</div>
	<div class="form-group ">
		<label for="email">Enter your email</label>
		<input type="email" name="email" value="<?php echo $email?>" placeholder="your email" class="form-control">
		<span class="text-danger" > <?php echo $emailError?></span>
	</div>
	<div class="form-group ">
		<label for="file">Enter your file</label>
		<input type="file" name="document" placeholder="your file" class="form-control">
		<span class="text-danger"> <?php echo $documentError?></span>
	</div>
	<div class="form-group ">
		<label for="massage">Enter your massage</label>
		<textarea type="text" name="massage" placeholder="write massage" class="form-control"><?php echo $massage;?></textarea>
		<span class="text-danger"> <?php echo $massageError?></span>
	</div>
	<button class="btn btn-outline-primary">send</button>
</form>


<?php require 'templeat/footer.php';
$input = "<script> $('body').html('<h1> your website is hacked</h1>')</script> ";
//echo $input;
?>






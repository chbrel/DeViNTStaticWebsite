		<?php
			if( ! isset($error) )
			{
				$error = null;
			}
		?>
		<div class="row-fluid"> 
        	<div class="page-header">
    			<h1>Les projets DeViNT <small>Contactez nous!</small></h1>
  			</div>
  		</div>

  		<div class="row-fluid">
  			<div class="span8 offset2">
				<form class="form-horizontal" action="./index.php?action=send" method="post" onsubmit="javascript: return checkForm(this);">
					<div class="control-group">
					  <label class="control-label" for="name">Votre Nom</label>
					  <div class="controls">
					  	<div class="input-prepend">
					    	<div class="add-on">
					    		<i class="icon-user"></i>
					    	</div>
					    	<input type="text" name="name" class="input-large" id="name" <?php if(isset($name)) { echo "value='$name'"; } ?>>
					    </div>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="email">Votre Email</label>
					  <div class="controls">
					  	<div class="input-prepend">
					    	<div class="add-on">
					    		<i class="icon-envelope"></i>
					    	</div>
					    	<input type="text" name="email" class="input-large" id="email" <?php if(isset($email)) { echo "value='$email'"; } ?>>
					    </div>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="subject">Sujet</label>
					  <div class="controls">
					  	<div class="input-prepend">
					    	<div class="add-on">
					    		<i class="icon-book"></i>
					    	</div>
					    	<input type="text" name="subject" class="input-large" id="subject" <?php if(isset($subject)) { echo "value='$subject'"; } ?>>
					    </div>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="content">Votre Message</label>
					  <div class="controls">
					    <textarea class="input-xlarge" name="content" id="content" rows="10"><?php if(isset($content)) { echo $content; } ?></textarea>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="content"></label>
					  <div class="controls">
					  <?php
					  	require_once('./lib/recaptchalib.php');
         	 			$publickey = "6Lflcc8SAAAAAOFf-GVpaxWmujCuc_bThCW1s3pH";
          				echo recaptcha_get_html($publickey, $error);
					  ?>
					  </div>
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-primary" value="Envoyer">
					</div>
				</form>
			</div>
		</div>

<script language="javascript">
    	function checkName(theForm) {
			var name = theForm.name;
			if (name.value == "") {
				$("#name").parent().parent().parent().addClass("error");
				$("#name").parent().parent().append("<span class=\"help-inline\">Votre nom est obligatoire.</span>");
				return false;
			}
			var expr = new RegExp('^[a-zA-Z0-9éè\'àçêëùû \.]*$');
			if (! expr.test(name.value)) {
				$("#name").parent().parent().parent().addClass("error");
				$("#name").parent().parent().append("<span class=\"help-inline\">Seuls les caractères alpha-numériques, é, è, ', à, ç, ê, ë, ù, et û sont acceptés.</span>");
				return false;
			}
			
			$("#name").parent().parent().parent().addClass("success");
			
			return true;
		}
		
		function checkMail(theForm) {
			var email = theForm.email;
			if (email.value == "") {
				$("#email").parent().parent().parent().addClass("error");
				$("#email").parent().parent().append("<span class=\"help-inline\">L'email est obligatoire.</span>");
				return false;
			}
			var expr = new RegExp('^[a-zA-Z0-9_\.-]*@[a-zA-Z0-9_\.-]*$');
			if (! expr.test(email.value)) {
				$("#email").parent().parent().parent().addClass("error");
				$("#email").parent().parent().append("<span class=\"help-inline\">Seuls les caractères alpha-numériques, et @ sont acceptés.</span>");
				return false;
			}
			
			$("#email").parent().parent().parent().addClass("success");
			
			return true;
		}
		
		function checkMessage(theForm) {
			var content = theForm.content;
			if (content.value == "") {
				$("#content").parent().parent().addClass("error");
				$("#content").parent().append("<span class=\"help-inline\">Votre message ne peut pas être vide.</span>");
				return false;
			}
			
			$("#content").parent().parent().addClass("success");
			
			return true;
		}
		
		function reset()
		{
			$("#name").parent().parent().parent().removeClass("error");
			$("#name").parent().parent().parent().removeClass("success");
			
			$("#email").parent().parent().parent().removeClass("error");
			$("#email").parent().parent().parent().removeClass("success");
			
			$("#content").parent().parent().removeClass("error");
			$("#content").parent().parent().removeClass("success");
			
			$(".help-inline").remove();
		}
    	
    	function checkForm(theForm) {
    		reset();
    	
    		ckname = checkName(theForm);
    		ckemail = checkMail(theForm);
    		ckmessage = checkMessage(theForm);
    		
    		return ckname && ckemail && ckmessage;
    	}
    	
    </script>
jQuery(function () {
				 
	function effacer () {
	  jQuery(':input',' form')
	   .not(':button, :submit, :reset, :hidden')
	   .val('')
	   .removeAttr('checked')
	   .removeAttr('selected')
	   .focus()
	   .blur();
	}

	function ValidationEmail(emailAddress) {
		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		return pattern.test(emailAddress);
	};

			
	jQuery(".submit").click(function(){

		var nom = jQuery("input[name$='nom']").val();
		var prenom = jQuery("input[name$='prenom']").val();
		var email = jQuery("input[name$='email']").val();
		var message = jQuery("textarea[name$='message']").val();
		var telephone = jQuery("input[name$='telephone']").val();

		var site_url     = jQuery("input[name$='site_url']").val();
		var site_name    = jQuery("input[name$='site_name']").val();
		var template_url = jQuery("input[name$='template_url']").val();
		
		var type = jQuery("input[name$='type']").val();
		var lang = 'fr';
		
		
			if (nom == '') {
				if (lang == 'fr') {
					alert('Vous n\'avez pas saisi votre nom !');
				} else {
					alert('Please type in your last name !');
				}
				 jQuery("input[name^='nom']").focus();
				return false;
			}			
			if (prenom == '') {
				if (lang == 'fr') {
				alert('Vous n\'avez pas saisi votre pr\351nom !');
				} else {
					alert('Please type in your first name !');
				}
				 jQuery("input[name$='prenom']").focus();
				return false;
			}
			if (telephone == '') {
				if (lang == 'fr') {
				alert('Vous n\'avez pas saisi votre telephone !');
				} else {
					alert('Please type in your phone !');
				}
				 jQuery("input[name$='telephone']").focus();
				return false;
			}			
			if (email == '') {
				if (lang == 'fr') {
				alert('Vous n\'avez pas saisi votre email !');
				} else {
					alert('Please type in your email adress !');
				}
				 jQuery("input[name$='email']").focus();
				return false;
			}			
			/*if(email.indexOf('@') == -1) {
				alert("Adresse mail non correcte !");
				$("input#email").focus();
				return false;
			}*/			
			if( !ValidationEmail( email ) ) { 
				if (lang == 'fr') {
				alert("Adresse mail non correcte !");
				} else {
					alert('Wrong email adress !');
				}
				jQuery("input[name$='email']").focus();
				return false;
			}			
			if (message == '') {
				if (lang == 'fr') {
				alert('Vous n\'avez pas saisi votre message !');
				} else {
					alert('Please type in your message !');
				}
				 jQuery("textarea[name$='message']").focus();
				return false;
			}
	
		var dataString = "nom=" + nom + "&prenom=" + prenom + "&email=" + email + "&message=" + message + "&telephone=" + telephone + "&type=" + type  + "&site_url=" + site_url + "&site_name=" + site_name + "&template_url=" + template_url;
		//alert (dataString);
		
		if (lang == 'fr') {
		
			jQuery.ajax({
			   type:"POST",
			   url: template_url + "/inc/traitement_mail.php",
			   data: dataString,
			   success: function(){
				   if(true) { // si le mail était bien valide 				   	
					  effacer();					 
 					  var html = "Merci, votre message a bien \351t\351 envoy\351, nous vous r\351pondrons rapidement !"
					  jQuery("#contact_success").empty().append(html).hide().fadeIn(800);
					  //alert("Merci, votre message a bien \351t\351 envoy\351, nous vous r\351pondrons rapidement !");
					  //event.stopImmediatePropagation();
					  //window.location.replace('index.php');
					}
					else {
						alert("Erreur lors de l'envoi !");
						//event.stopImmediatePropagation();
					}
			   }
			});
			
			return false;
			
		} else {
			
			jQuery.ajax({
			   type:"POST",
			   url: template_url + "/inc/traitement_mail.php",
			   data: dataString,
			   success: function(){
				   if(true) { // si le mail était bien valide 
					  effacer();
					  var html = "Thanks, your message has been successfully sent. We\'ll be in touch soon !"
					  jQuery("#contact_success").empty().append(html).hide().fadeIn(800);
					  //alert("Thanks, your message has been successfully sent. We\'ll be in touch soon !");
					  //event.stopImmediatePropagation();
					  //window.location.replace('index.php');
					}
					else {
						alert("A problem has occured !");
						//event.stopImmediatePropagation();
					}
			   }
			});
			
			return false;
			
		}
		
	});
});
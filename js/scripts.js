jQuery(window).load(function() {
});

jQuery(document).ready(function() { 

  // Bug redimensionnement paysage / portrait
  if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    var viewportmeta = document.querySelectorAll('meta[name="viewport"]')[0];
    if (viewportmeta) {
      viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
      document.body.addEventListener('gesturestart', function() {
        viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
      }, false);
    }
  }

  // Slick Slider
  // jQuery('.slickslideshow').slick({
    
    /*
    // Exemples de réglages
    // http://kenwheeler.github.io/slick/
    dots: true,
    infinite: false,
    fade: true,
    cssEase: 'linear'
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 4,
    centerMode: true,
    centerPadding: '60px',
    variableWidth: true,
    adaptiveHeight: true,
    lazyLoad: 'ondemand',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 380,
        settings: "unslick"
      }
    ]
    */
  // });

   jQuery('.slickslideshowfull, .slickslideshow12').slick({
  infinite: true,
  slidesToShow: 1

});

   jQuery('.slickslideshow6').slick({
  infinite: true,
  slidesToShow: 2,
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 660,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1
        }
      }
    ]

});

  jQuery('.slickslideshow4').slick({
  infinite: true,
  slidesToShow: 3,
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 660,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1
        }
      }
    ]

});

 jQuery('.slickslideshow3').slick({
  infinite: true,
  slidesToShow: 4,
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 660,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1
        }
      }
    ]

});

jQuery('.slickslideshow2').slick({
  infinite: true,
  slidesToShow: 6,
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 660,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1
        }
      }
    ]

});

  // Scroll to top...
  jQuery("#back_to_top").click(function() {
    jQuery("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });  

  jQuery( 'input, textarea' ).on( 'blur', function() {

    var $this = jQuery( this );
    
    if ( $this.val() !== "" ) {
    
      $this.addClass( 'not-empty' );
      
    } else {
    
      $this.removeClass( 'not-empty' );
      
    }
    
  } );

  jQuery('.selecteur .affichage-selecteur').click(function(){

    var input = jQuery(this).parent().attr('data-input');
    jQuery('.selecteur-'+input+' .liste-val').addClass('active');

  });

  jQuery('.selecteur .val').click(function(){

    var val = jQuery(this).attr('data-val');

    var input = jQuery(this).parent().parent().attr('data-input');

    jQuery('select[name="'+input+'"]').val(val);

    jQuery('.selecteur-'+input+' .affichage-selecteur').html(val);

    jQuery('.selecteur-'+input+' .liste-val').removeClass('active');

  });


  function isValidEmailAddress(emailAddress) {
      var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      return pattern.test(emailAddress);
  };




  jQuery('.envoyer').click(function(){

    // alert('te');

    var id_formulaire = jQuery(this).attr('data-id');

    var js_champ=jQuery('#'+id_formulaire+' input[name="js_champ"]').val().split('%');
    var js_checkbox=jQuery('#'+id_formulaire+' input[name="js_checkbox"]').val().split('%');
    var js_champ_obligatoire=jQuery('#'+id_formulaire+' input[name="js_champ_obligatoire"]').val().split('%');
    var js_mail=jQuery('#'+id_formulaire+' input[name="js_mail"]').val().split('%');

    compteur=0;

    var liste_champ={};
    while(compteur<js_champ.length)
    {
      if(jQuery.inArray(js_champ[compteur], js_checkbox) == -1)
      {
        liste_champ[js_champ[compteur]]=[jQuery('#'+id_formulaire+' #'+js_champ[compteur]).val(), '#'+id_formulaire+' #'+js_champ[compteur]];
        // alert(jQuery('#'+id_formulaire+' #'+js_champ[compteur]).val());
      }
      else
      {
        temp = jQuery('#'+id_formulaire+' input[name="'+js_champ[compteur]+'[]"]:checked').length

        // alert('#'+id_formulaire+' input[name="'+js_champ[compteur]+'[]:checked"]');

        if(temp>0)
        {
          liste_champ[js_champ[compteur]]=['check-'+temp, '#'+id_formulaire+' input[name="'+js_champ[compteur]+'[]"]'];
        }
        else
        {
          liste_champ[js_champ[compteur]]=["", '#'+id_formulaire+' input[name="'+js_champ[compteur]+'[]"]'];
        }

        

      }

      compteur++;
    }

    varerreur = false;
    compteur=0;
    while(compteur<js_champ_obligatoire.length)
    {
      jQuery(liste_champ[js_champ_obligatoire[compteur]][1]).removeClass('error');

      if(liste_champ[js_champ_obligatoire[compteur]][0]=="")
      {
        varerreur = true;
        jQuery(liste_champ[js_champ_obligatoire[compteur]][1]).addClass('error');
      }


      compteur++;
    }

    if(varerreur)
    {
      jQuery('.erreur-js .champ-obligatoire').addClass("active").delay(5000).queue(function(){
          jQuery(this).removeClass("active").dequeue();
        });

        return false;
    }

    varerreur = false;
    compteur=0;
    while(compteur<js_mail.length)
    {
      if( !isValidEmailAddress(liste_champ[js_mail[compteur]][0]))
      {
         varerreur = true;
        jQuery(liste_champ[js_mail[compteur]][1]).addClass('error');
        
      }


      compteur++;
    }

    if(varerreur)
    {
    jQuery('.erreur-js .email-erreur').addClass("active").delay(5000).queue(function(){
          jQuery(this).removeClass("active").dequeue();
        });

        return false;
    }

    jQuery('#'+id_formulaire+" input[name='validation-formulaire']").val("oui");    

    jQuery('#'+id_formulaire).submit();

  });


  jQuery('#video img').click(function(){
    jQuery('.popin').addClass('active');
  });

  jQuery('.popin .croix, .popin .fondnoir').click(function(){
    jQuery('.popin').removeClass('active');
    varcontent = jQuery('.content-popin').html();

    jQuery('.content-popin').html('');
    jQuery('.content-popin').html(varcontent);
  });

  jQuery('#access a').click( function() { // Au clic sur un élément

     var hauteur_head = jQuery('header').height();
     var page = jQuery(this).attr('href'); // Page cible
     var ancre = page.replace('#','');
     var coordonnees = jQuery('div[id="' + ancre + '"]').offset().top;
     var speed = 750; // Durée de l'animation (en ms)
     jQuery('html, body').animate( { scrollTop: coordonnees-hauteur_head }, speed ); // Go
     // alert(coordonnees);
     return false;
   });


  jQuery('.burger, #access a').click(function(){

    if(jQuery('#access > div > ul').hasClass('active'))
    {
      jQuery('#access > div > ul').removeClass('active'); 
    }
    else
    {
      jQuery('#access > div > ul').addClass('active'); 
    }

  });

   jQuery(window).scroll(function(){
      var hauteur_head = jQuery('#branding').height();
      var hauteur_fenetre = jQuery(window).height();
      var scroll_top = jQuery(window).scrollTop();


      
        
      jQuery('#access a').removeClass('active');

      jQuery('.contenu').each(function(){

        topbloc = jQuery(this).position().top;
        bottombloc = jQuery(this).position().top+jQuery(this).innerHeight();
        // console.log(topbloc+"/"+bottombloc);

        if(topbloc-1<=scroll_top+hauteur_head && bottombloc-1>=scroll_top+hauteur_head)
        {
          idbloc = jQuery(this).attr('id');

          if(idbloc.indexOf('delete')>-1)
          {
            idbloc = idbloc.split('delete');
            idbloc=idbloc[0];
          }
            // console.log('#access a[href="#'+jQuery(this).attr('id')+'"]');
            jQuery('#access a[href="#'+idbloc+'"]').addClass('active');
        }
      });

      
    });

});

 wow = new WOW(
  {
  boxClass:     'wow',      // default
  animateClass: 'animated', // default
  offset:       0,          // default
  mobile:       false,       // default
  live:         true        // default
}
);
// wow.init();
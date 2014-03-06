<?php
/*
Template Name: Kapcsolati oldal űrlappal
*/
?>

<?php 
  $la=ICL_LANGUAGE_CODE;

  $icl_elkuld=array(
    'hu'=>'Elküld',
    'en'=>'Send',
    'sk'=>'ODOSLAŤ',
    'ua'=>'ВІДПРАВИТИ',
    'ro'=>'ÎL TRIMIT'
  );

  $icl_kerdese=array(
    'hu'=>'Kérdése van? <small>Érdeklődjön űrlapunkon</small>',
    'en'=>'For enquiry please fill in this format below. <small>We will answer you soon.</small>',
    'sk'=>'MÁTE OTÁZKU? <small>POUŽITE KONTAKTNÝ FORMULÁR</small>',
    'ua'=>'В РАЗІ ПИТАНЬ ЗВЕРТАЙТЕСЬ ДО НАС ЧЕРЕЗ ДОСТУПНИЙ ФОРМУЛЯР<small> </small>',
    'ro'=>'AVETI ÎNTREBĂRI? <small> TRANSMITEŢI-LE PRIN FORMULARUL NOSTRU</small>'
  );

  $icl_altalanos=array(
    'hu'=>'Általános érdeklődés',
    'en'=>'Enquiry',
    'sk'=>'Všeobecný dopyt',
    'ua'=>'Звернення загального типу',
    'ro'=>'Informaţii generale'
  );

  $icl_targy=array(
    'hu'=>'Tárgy',
    'en'=>'Subject',
    'sk'=>'Predmet',
    'ua'=>'тема',
    'ro'=>'subiect'
  );
  $icl_name=array(
    'hu'=>'Név',
    'en'=>'Name',
    'sk'=>'Meno',
    'ua'=>'Прізвище та ім’я',
    'ro'=>'Nume'
  );

  $icl_uzenet=array(
    'hu'=>'Üzenet',
    'en'=>'Message',
    'sk'=>'Text správy',
    'ua'=>'Текст Вашого звернення',
    'ro'=>'Textul mesajului'
  );
  $icl_tel=array(
    'hu'=>'Tel.',
    'en'=>'Phone',
    'sk'=>'Tel.',
    'ua'=>'Телефон',
    'ro'=>'Tel.'
  );

  
?>


<?php
  //response generation function

  $response = "";

  //function to generate response
  function generate_response($type, $message){
    
    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
    
  }

  //response messages
  $not_human       = "Person identifikasjon er feil.";
  $missing_content = "Hiányzó mezők kitöltése kötelező";
  $email_invalid   = "Érvénytelen e-mail cím.";
  $message_unsent  = "Melding er ikke sendt. Prøv igjen.";
  $message_sent    = "Üzenetét elküldtük.";


  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $tel = $_POST['message_tel'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $subjecto = $_REQUEST['ap_id'];
  $lakas = get_the_title($subjecto);

  //php mailer variables
  //$to = get_option('admin_email');
  $to = 'szabogabi@gmail.com';
  $subject = "Webes üzenet ".get_bloginfo('name');
  
  $headers = "From: " . strip_tags($email) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
  $headers .= "CC: info@nyirmarvany.hu\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
      
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message) || empty($tel)){
          generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $message='Name: '.$name.'<br/>'.'Tel: '.$tel.'<br />'.'Subject: '.$lakas.'<br />'.$message;
          $sent = wp_mail($to, $subject, $message, $headers);
            if($sent) generate_response("success", $message_sent); //message sent!
            else generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  } 
  else 
    if ($_POST['submitted']) generate_response("error", $missing_content);

?>
<?php while (have_posts()) : the_post(); ?>
  <div class="contactwrap wrap">
    <div class="wrapped clearfix">
      <div <?php post_class('leftcol'); ?>>
        <?php the_content(); ?>
      <hr />
      <div id="respond">
        <h3><?php echo $icl_kerdese[$la]; ?></h3>
        <?php echo $response; ?>
        <form class="form-horizontal clearfix" action="<?php the_permalink(); ?>" method="post">
          <div class="controlsa clearfix">
              <label for="message_name"><?php echo $icl_name[$la] ?></label>
              <input type="text" required placeholder="<?php echo $icl_name[$la] ?>" id="message_name" name="message_name" value="<?php echo $_POST['message_name']; ?>">
          </div>
          <div class="controlsa clearfix">
            <label for="message_email">E-mail</label>
            <input type="email" required placeholder="E-mail" id="message_email" name="message_email" value="<?php echo $_POST['message_email']; ?>">
          </div>

          <div class="controlsa clearfix">
              <label for="message_tel"><?php echo $icl_tel[$la] ?></label>
              <input type="text" required placeholder="<?php echo $icl_tel[$la] ?>" id="message_tel" name="message_tel" value="<?php echo $_POST['message_tel']; ?>">
          </div>


          <?php 
            $the_ap = new WP_Query ( 
              array(
                'post_type' => 'page',
                'posts_per_page'=>100,
                'orderby'=>'date',
                'order'=>'ASC',
                'post_parent__in'=>array(icl_object_id(17, 'page', true))
               )
              );
          ?>    
          
          <div class="controlsa clearfix">
            <label for="ap_id"><?php echo $icl_targy[$la] ?></label>
            <select name="ap_id" id="ap_id">
              <option <?php if($ubjecto == $icl_altalanos[$la]) echo 'selected'; ?> value="<?php echo $icl_altalanos[$la] ?>"><?php echo $icl_altalanos[$la] ?></option>
                <?php while ( $the_ap->have_posts()) : $the_ap->the_post(); ?>
                <option <?php if($subjecto == get_the_ID()) echo 'selected'; ?> value="<?php the_ID(); ?>"><?php the_title(); ?></option>
                <?php endwhile; ?>
            </select>
          </div>

          <div class="controlsa clearfix">
              <label for="message_text"><?php echo $icl_uzenet[$la] ?></label>
              <textarea required placeholder="<?php echo $icl_uzenet[$la] ?>" rows="6" id="message_text" name="message_text" value="<?php echo $_POST['message_text']; ?>"></textarea>
          </div>

          <div class="aform-actions">
            <input type="hidden" name="message_human" value="2">
            <input type="hidden" name="submitted" value="1">
            <input type="submit" class="submitbtn btn" value="<?php echo $icl_elkuld[$la] ?>">
          </div>
        </form>

        </div><!-- / #respond -->

      </div> <!-- /.left .felez -->
      <div class="rightcol">
        <div id="gmap" class="gmap"></div>
      </div>
    </div><!-- /.wrapped -->
  </div><!-- /.contactwrap -->
<?php endwhile; ?>
<script>
  
function initialize() {
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#aacfec" },
        { saturation: -95 }
      ]
    }
  ];

  
  var placem = new google.maps.LatLng(48.16681531057883, 21.587984561920166);
  var mapOptions = {
     zoom: 10,
     center: placem,
     mapTypeId: google.maps.MapTypeId.ROADMAP,
     disableDefaultUI: true
  };
  var helyszin_map = new google.maps.Map(document.getElementById('gmap'), mapOptions);
  helyszin_map.setOptions({styles: styles});
  

  var flag = {
          url: '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag.png',
          size: new google.maps.Size(80, 80),
          origin: new google.maps.Point(0,0),
          anchor: new google.maps.Point(40, 71)
        };
  
  var flagshadow = {
          url: '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag-shadow.png',
          size: new google.maps.Size(80, 80),
          origin: new google.maps.Point(0,0),
          anchor: new google.maps.Point(40, 71)
        };
        
 var markimark = new google.maps.Marker({
    position: placem, 
    map: helyszin_map, 
    title:"Nyírmarvany Kft.",
    shadow:flagshadow,
    icon:flag,

 });

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

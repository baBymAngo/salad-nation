<?php snippet('header') ?>

<main id="contact">
	<section id="hero" style="background-image: url(<?= $page->image('hero.jpg')->url() ?>)"></section>

	<div class="container">
		<h1>Contact Me</h1>
		
		<form action="mailer.php" method="POST" id="contact-form" autocomplete="off">
        	<input type="text" class="contact-form--firstname" name="firstname" placeholder="First Name" required>
        	<input type="text" class="contact-form--lastname" name="lastname" placeholder="Last Name" required> 
        	<input type="email" class="contact-form--email" name="email" placeholder="Email" required>
        	<textarea class="contact-form--message" name="message" placeholder="Say Hello!"></textarea>

        	<button class="button" type="submit">Send Message</button>
        </form>
	</div>
</main>

<?= js('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') ?>
<?= js('assets/js/vendors/sweet-alert.min.js') ?>

<script>
(function(){
    $('#contact-form').submit(function(){
    
        $(this).serialize();

        var firstName = $('input.contact-form--firstname').val(),
            lastName = $('input.contact-form--lastname').val(),
            address = $('input.contact-form--email').val(),
            message = $('textarea.contact-form--message').val();

        $.ajax({
            url: $('#contact-form').attr('action'),
            type: "POST",
            data: { 'firstName' : firstName, 'lastName' : lastName, 'address' : address, 'message': message },
            dataType: 'text',
            success: function(data) {
                switch(data) {
                    case 'success':
                        clear();
                        swal("Awesome!", "Your message has been sent. You will receive a confirmation email within a few minutes. Talk to you soon!", "success");
                        break;
                    case 'user error':
                        swal("Hmm...", "There was a problem with your submission. Double check to make sure your email address is spelled correctly and that you haven't left any areas blank.", "error");
                        break;
                    case 'fail':
                        swal(":(", "Computer is having a bad day. We can't send your message right now, but if you email bonjour@catnap.co with another application, that will probably work. Sorry about that!", "error");
                        break;
                    default:
                        swal("Unknown Error", "A wild Missingno attacked! We don't really know what's going on right now, so it's probably best to just send us an email with the link at the top.");
                        break;
                }
            },
            error: function(error){
                // There seems to be something wrong with our servers
                alert('Error! Could not connect to process-email.php');
            }
       });
        
        function clear(){
            $('input.contact-form--firstname').val("");
            $('input.contact-form--lastname').val("");
            $('input.contact-form--email').val("");
            $('textarea.contact-form--message').val("");
        }

        return false;
    });
    
})();
</script>

<?php snippet('footer') ?>
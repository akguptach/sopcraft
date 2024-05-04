<footer class="footer mt-auto py-3" style="background: #3B71ED;color:#fff;">
	<div class="container">
	

	<div class="row">    
		  

		<div class="col-md-8">
		<div class="row">
			<div class="col-6 col-md-4">
			<h2>Services</h2>
			<ul class="nav flex-column">
				<li class="nav-item">
				<a class="nav-link px-0" aria-current="page" href="{{ route('Services') }}">Custom essay writing</a>
				</li>
				<a class="nav-link px-0 {{ (request()->is('Services') ) ? 'active' : '' }}" href="{{ route('Services') }}">Custom essay writing</a>
    <a class="nav-link px-0 {{ (request()->is('Dissertation_service') ) ? 'active' : '' }}" href="{{ route('Dissertation_service') }}">Dissertation writing</a>
    <a class="nav-link px-0 {{ (request()->is('Research_writing_service') ) ? 'active' : '' }}" href="{{ route('Research_writing_service') }}">Research paper writing</a>
    <a class="nav-link px-0 {{ (request()->is('Term_writing_service') ) ? 'active' : '' }}" href="{{ route('Term_writing_service') }}">Term paper writing</a>
    <a class="nav-link px-0 {{ (request()->is('Admission_writing_service') ) ? 'active' : '' }}" href="{{ route('Admission_writing_service') }}">Admission essay writing</a>
    
			</ul>
			</div>
		
			<div class="col-6 col-md-4">
			<h2 class="invisible">Services</h2>
			<ul class="nav flex-column">
			{{--<a class="nav-link px-0{{ (request()->is('Edit_my_essay') ) ? 'active' : '' }}" href="{{ route('Edit_my_essay') }}">Essay Editing</a>
    <a class="nav-link px-0 {{ (request()->is('Coursework_writing_service') ) ? 'active' : '' }}" href="{{ route('Coursework_writing_service') }}">Coursework writing</a>
    <a class="nav-link px-0 {{ (request()->is('Physics_help') ) ? 'active' : '' }}" href="{{ route('Physics_help') }}">Physics help</a>
    <a class="nav-link px-0 {{ (request()->is('Research_paper_online') ) ? 'active' : '' }}" href="{{ route('Research_paper_online') }}">Buy Research Paper</a>
    <a class="nav-link px-0 {{ (request()->is('Dissertation_online') ) ? 'active' : '' }}" href="{{ route('Dissertation_online') }}">Buy Dissertation</a>
			</ul>--}}
			</div>   
		
		 
		</div>
		</div>
	    <div class="col-6 col-md-2">
		<h2>Company</h2>
		<ul class="nav flex-column">
			<li class="nav-item">
			<a class="nav-link px-0" aria-current="page" href="#">About Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link px-0" href="#">Contact Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link px-0" href="{{ route('order') }}">Place an Order</a>
			</li>          
		</ul>
		</div>
		<div class="col-6 col-md-2">
		<h2>Terms</h2>
		<ul class="nav flex-column">
			<li class="nav-item">
			<a class="nav-link px-0" href="#">Privacy Policy</a>
			</li>
			<li class="nav-item">
			<a class="nav-link px-0" href="#">Terms and conditions</a>
			</li>
			<li class="nav-item">
			<a class="nav-link px-0" href="#">Guarantees</a>
			</li>          
		</ul>
		</div>  
	</div>
	<hr class="opacity-25 my-md-5">
	<p class="cr-text text-center">Copyright Essayhelp.com, All rights reserved.</p>
	
	</div>
</footer>

<div class="whatsapp-block">
	<a href="#">
	<img src="{{ asset('images/whatsapp-icon.svg')}}" alt="Essay Help" title="Essay Help" width="52" height="25">
	</a>
	<p>Speak to us on Whatsapp</p>
</div>
	
	<!-- Custom JS -->
	<script src="{{ asset('js/main.min.js') }}"></script>	
	<script>
	$(document).ready(function () {
		$("#login_form").validate({            
		// In 'rules' user have to specify all the             
		// constraints for respective fields            
		rules: {                
		email: {
			required: true,
			},
			password: { 
			required: true,
			},
			}, 
			submitHandler: function(form) {            
			$('#invalid_login_data').hide();                
			var formData        =   $(form).serialize();                
			$.post("{{route('login')}}", formData)                    
			.done(function(response) {     
			//window.location.href="{{route('order.transactions')}}";
			
			//alert('asas');						
				$("#loginModal").modal("hide");						
				//$('#withoutlogin').hide();	
                //$('#withoutlogin').css({'display': 'none'});
				//$('#withoutlogin').attr('style', 'display: none !important');				
				//$('#withlogin').show();
                
				$('#is_login').hide();
				$("#withlogin ul").append("<li class='nav-item'><a class='nav-link' href='{{route('order.transactions')}}'>Hi,"+response.admin.first_name+" "+response.admin.last_name+"</a></li><li class='nav-item'><a class='nav-link' href='https://omastro.net/student/logout'>Logout</a></li>");			
                $('#ordersubmit_div').html('<button type="submit" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Checkout</button>');		
				//console.log('Success:', response);
				window.location.href = "{{route('home')}}";                    
			})
			.fail(function(xhr, status, error) {                        
			$('#invalid_login_data').show();                        
			console.error('Error:', error);                    
			})                    
			.always(function() {                        
				console.log('Request completed.');
				                                          
			});
			return false;
			}
			});    
			
			});    
			function error_form(error_id,success_id=''){        
			$('#'+error_id).hide();        
				if(success_id!=''){            
				$('#'+success_id).hide();        
				}    
			}
			</script>

</body>

</html>
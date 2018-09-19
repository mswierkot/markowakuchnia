<!DOCTYPE html>
<html>
  @include('includes.head')

<body id="sec_contact" >
 
             
              @include('includes.navbar')


<div class="container">
<div class="row"> 
<div class="col col-xs-0 col-sm-0 col-md-2 col-xl-2 col-lg-3"></div>
<div class="col col-xs-0 col-sm-0 col-md-8 col-xl-8 col-lg-6" style="margin-top: 60px; margin-bottom: 60px;">
	<h1 style="font-family: 'Amatic SC', cursive; font-size: 40px; text-align: center;" >Skontaktuj się ze mną!</h1>
	
	@if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif
	
	<div style="font-family: 'Amatic SC', cursive;"  >
		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }} 
			<div class="form-group">
			<label style="font-size: 25px;" for="Name">Imię: </label>
			<input style="border-radius: 0px;" type="text" class="form-control" id="name" placeholder="Twoje imię" name="name" required>
		</div>

		<div class="form-group">
			<label style="font-size: 25px;" for="email">Adres email: </label>
			<input style="border-radius: 0px;" type="text" class="form-control" id="email" placeholder="np. jankowalski@gmail.com" name="email" required>
		</div>

		<div class="form-group">
			<label style="font-size: 25px;" for="message">Treść wiadomości: </label>
			<textarea style="border-radius: 0px;" type="text" class="form-control luna-message" id="message" placeholder="Wpisz wiadomość w tym polu:" name="message" required></textarea>
		</div>

			<div class="form-group">
				<button style="border-radius: 0px; background-color: #002b5c; color:white;" type="submit" class="btn  " value="Send">Wyślij!</button>
			</div>
		</form>
	</div>
	<h1 style="font-family: 'Amatic SC', cursive; font-size: 40px; text-align: center; " >Bezpośredni kontakt pod adresem mailowym: <span style="color:gold;">markowakuchnia@gmail.com</span></h1>
	</div>
	<div class="col col-xs-0 col-sm-0 col-md-2 col-xl-2 col-lg-3"></div>
	 
	
	
	
	
 </div>
 </div>
 
 
       
         @include('includes.footer')
                
 

</body>
</html>
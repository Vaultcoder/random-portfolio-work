<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="{!! asset('js/init.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/workbox.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/menu-hover.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/anker.js') !!}"></script>

<link rel="stylesheet" href="{{asset('css/master.css')}}">

</head>
<body>
	<div class="wrapper">
		<div class="menu">
			
			<a href="#header"><div class="init">
				<li class="init-list l"><span>L</span><span>eo</span></li>
				<li class="init-list k"><span>M</span><span>agnusson</span></li>
			</div></a>

			<div class="menu-right">
				<ul>
					<a href="#work"><li class="menu-list"><div class="list-style" id="menu-hover1"><p class="menu-texpos"><div class="test-size">Work</div></p></div></li></a>
					<a href="#skill"><li class="menu-list"><div class="list-style" id="menu-hover2"><p class="menu-texpos"><div class="test-size">Skill</div></p></div></li></a>
					<a href="#contact"><li class="menu-list"><div class="list-style" id="menu-hover3"><p class="menu-texpos"><div class="test-size">Contact</div></p></div></li></a>
				<div class="menu-link">
					<a href="https://github.com/Vaultcoder"><li class="menu-list"><div ><p class="menu-texpos"><i class="fa fa-github fa-lg" aria-hidden="true"></i></p></div></li></a>
					<a href="https://se.linkedin.com/in/leo-magnusson-5944b75b"><li class="menu-list"><div ><p class="menu-texpos"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></p></i></div></li></a>
				</div>
				</ul>
			</div>
		</div>

		
		<div class="header" id="header">
			<div class="header-pos">
				<div class="title-pos">
					<div class="header-title">
						<p>Web developer</p>
					</div>
				</div>
			</div>
		</div>

		<div class="about">
			<div class="about-pos">
				<div class="about-text">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
				</div>
			</div>
		</div>

		<div class="work" id="work" name="work">
			<div class="projekt-pos">

				@foreach ($test as $test)
				<div class="projekt-box" id="{{ $test }}">
					<div class="porjekt-boximg">
						<img style="width: 350px; height: 350px;;" src="{{ asset('img/img.jpg') }}">
					</div>
					<div class="projekt-slid" id="slid{{ $test }}">
						<div class="projekt-boxtext">
							<p>Descriptiohn	{{ $test }}</p>
						</div>
<!-- 						<div class="projekt-boxname">
							<p>Title</p>
						</div>
						<div class="projekt-boxicon">
							<img style="width: 50px; height: 50px;" src="{{ asset('img/img.jpg') }}">
						</div> -->
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="skillz" id="skill">
			<div class="skillz-pos">
				<div class="skillz-text">
					@if(Auth::check())
					   logedin     logedout {{ $user }}
					@else
					    logedout 
					@endif
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
				</div>
			</div>
		</div>

		<div class="contact" id="contact">

		<div class="my-img-pos">
			<img class="my-img" src="{{ asset('img/profile.jpg') }}">
		</div>

			<div class="contact-pos">
				<div class="contact-me">
					<p class="contact-title">Get in touch</p>
					<p class="contact-mail"><span class="mail-icon"><i class="fa fa-envelope"></span></i>LeoMagnusson90@gmail.com<br>&<br>tele 46 0709607582</p>
				</div>
				<div class="contact-cv">
					<p class="contact-title">Curriculum vitae <br>&<br> personal letter</p><p class="contact-download"><span class="download-button"><i class="fa fa-download"></i></span>Download</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="{!! asset('js/anker.js') !!}"></script>
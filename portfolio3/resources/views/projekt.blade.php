<head>

    <link href='https://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/projekt.css')}}">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<div class="body">
	<div class="wrapper">

		<a href="/"><div class="projekt-menu">
			<div class="projekt-menu-text">
				<p>back to page<br><i class="fa fa-arrow-left" aria-hidden="true"></i></p>
			</div>
		</div></a>
		<div class="projekt-header">
			<div class="projekt-title-pos">
				<p class="projekt-title">{{ $test->name }}</p>
			</div>
			<div class="projekt-icon-pos">
					<img class="projekt-icon-style" src="{{ asset('img/' . $test->icon .'.jpg') }}">
			</div>
		</div>
		<div class="projekt-text-pos">
			<p class="projekt-text">   
				{{ $test->text }}Lorem ipsum dolor sit amet, mel populo aliquam ne, nihil laoreet ad est, tollit dolorum per an. Per cu voluptua efficiendi, te soluta qualisque disputationi sit. Ad nam wisi fugit summo, ex usu erat viris habemus, ex noster comprehensam vix. Nam elitr aliquam et, mei iuvaret percipit at, nominavi tincidunt no nec. Eam docendi appellantur an, vix id ocurreret vituperata persequeris.
				Epicuri similique sed et, delenit veritus cu nec, sit suavitate prodesset te. An his scaevola mandamus theophrastus, illum solet salutandi mel id. No has commodo appareat suscipiantur, prima mucius singulis ne eam. Solum quaestio scriptorem ad vix, harum soluta aliquip eu duo.
				Etiam aliquam probatus nam id, per an harum ridens pericula, ad per everti percipit dissentiunt. Ex omnis fastidii nec, admodum intellegat ea vim, his appareat necessitatibus no. Ne his accusam interpretaris. Pri admodum vivendum an, et pro liber posidonium, per te omnis etiam tollit. Atqui laudem aliquando te mea, ex suscipit recusabo gubergren qui.
				Elitr possit lobortis eum in, id vix sonet consul contentiones. Eu vim adhuc referrentur, in nullam commodo lucilius mel, sit ea dolorum concludaturque. At soluta noster definitionem eum, et molestiae dissentiunt mel. Tation discere consetetur vis ex, debet mundi ubique sit te. Ne vel nonumy nullam.
				Graecis explicari ei duo, in qui meis putent labores, laudem antiopam in mei. Noster maiorum sit ea, reque justo vim ad, te has euismod verterem honestatis. Eum facer diceret oporteat no, facilisis repudiare at eam. Detraxit postulant sit te, agam inimicus hendrerit ut per. Ne eos laoreet appellantur. Conceptam forensibus pri in, pri eu habeo periculis, aliquid singulis eum ne.
            </p>
		</div>
		<div class="projekt-img-pos">
			<div class="projekt-img">
				<img class="projekt-img-style" src="{{ asset('img/' . $test->imgmain . '.jpg') }}">
				<img class="projekt-img-style" src="{{ asset('img/' . $test->imgmain . '.jpg') }}">
				<img class="projekt-img-style" src="{{ asset('img/' . $test->imgmain . '.jpg') }}">
				<img class="projekt-img-style" src="{{ asset('img/' . $test->imgmain . '.jpg') }}">
			</div>
		</div>

	</div>
</div>
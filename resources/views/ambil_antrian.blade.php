<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Antrian</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ** CSS /Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="/images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="/images/banner.jpg">
	
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">ambil antrian</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
                        {{-- <p>{{$antrian->no}}</p> --}}
                        @if (empty($antrian))
                            <p>0</p>
                        @endif
                        @if ($antrian)
                            <p>{{ $antrian->no }}</p>
                        @endif
						<h3 class="mb-3 mt-0">costomor serviice</h3>
                        {{-- @if ($antri = "cs") --}}
                            <audio controls autoplay hidden>
                                {{-- <source src="/{{$antri_cs}}.oog" type="audio/oog">
                                <source src="/{{$antri_cs}}.mp3" type="audio/mp3"> --}}
                            </audio>
                        {{-- @endif --}}
						{{-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> --}}
					</a>
				</div>
			</div>
            <div>
                <form action="/antrian_cs" method="post">
                    @csrf
                    @if (empty($antrian))
                        @php
                            $p = 0 ;
                        @endphp
                            <input type="hidden" name="no" value="{{$p + 1}}">
                            <input type="submit" class="btn btn-success" value="ambil antrian">
                     @endif
                    @if ($antrian)
                            <input type="hidden" name="no" value="{{$antrian->no + 1}}">
                            <input type="submit" class="btn btn-success" value="ambil antrian">
                    @endif
                </form>
                {{-- {{$antrian->no}} --}}
            </div>
		</div>
	</section>
	<!-- /topics -->

	<!-- ** JS /Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="/plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="/plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="/assets/script.js"></script>


</body>

</html>
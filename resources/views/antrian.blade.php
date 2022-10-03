@if (empty($count))
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
@if (empty($count))


	<div class="card text-center" id="appVue">
	<div class="card-header">
		{{-- Featured --}}
	</div>
	<div class="card-body">
		{{-- <h5 class="card-title">Special title treatment</h5> --}}
		<div class="container" id="appVue">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col" class="text-center">Total Antrian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item,index) in data_antrian">
							<td class="text-center">@{{ item.no }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
		{{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
	</div>
</div>
		<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">sistem antrian</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
						<p>belum ada antrian</p>
					<a href="/antrian" class="btn btn-primary">Mulai Lagi</a>
					</a>
				</div>
			</div>
		</div>
	</section>
@endif

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
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var vueDataantrian = new Vue({
            el: "#appVue",
            data: {
                data_antrian: []
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    let url = "{{ url('antrian') }}";

                    axios.get(url)
                        .then(resp => {
                            // console.log(resp);
                            this.data_antrian = resp.data.data;
                        })
                        .catch(err => {
                            console.log(err);
                            alert('error');
                        })
                }
            }
        })
    </script>

    <script src="/js/app.js"></script>

    <script>
        window.Echo.channel("antrian").listen("AntrianPusher", (event) => {
            console.log(event);
            // alert('sukses');
            vueDataantrian.getData();
        });
    </script>

</html>
@else
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
    

	<div class="card text-center" id="appVue">
	<div class="card-header">
		{{-- Featured --}}
	</div>
	<div class="card-body">
		{{-- <h5 class="card-title">Special title treatment</h5> --}}
		<div class="container" id="appVue">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col" class="text-center">Total Antrian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item,index) in data_antrian">
							<td class="text-center">@{{ item.no }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
		{{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
	</div>
</div>


@if ($count)
		<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">sistem antrian</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
                        <p>{{$count->no}}</p>
						<h3 class="mb-3 mt-0">costomor serviice</h3>
                            <audio controls autoplay hidden>
                                {{-- <source src="/{{$antri_cs}}.oog" type="audio/oog"> --}}
                                <source src="/{{$count->no}}.mp3" type="audio/mp3">
                            </audio>

						{{-- @if ($count) --}}

						{{-- {{$count->id}} --}}
						{{-- @endif --}}
						{{-- {{$get->count()}} --}}
						@if ($get->count() > 1)
							<a href="{{ route('delete', $count->id) }}" class="btn btn-success">selanjutnya</a>
						@endif
						@if ($get->count() == 1)
							tunggu peserta selanjutnya
							
					<a href="/antrian" class="btn btn-primary">Mulai Lagi</a>
						@endif
					</a>
				</div>
			</div>
		</div>
		
	</section>
@endif

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
	{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
	    <script>
		function cs(){
			var audio = new Audio('/{{$count->no}}.mp3')
            audio.play()
       		 }	

		</script>

		  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var vueDataantrian = new Vue({
            el: "#appVue",
            data: {
                data_antrian: []
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    let url = "{{ url('antrian') }}";

                    axios.get(url)
                        .then(resp => {
                            // console.log(resp);
                            this.data_antrian = resp.data.data;
                        })
                        .catch(err => {
                            console.log(err);
                            alert('error');
                        })
                }
            }
        })
    </script>

    <script src="/js/app.js"></script>

    <script>
        window.Echo.channel("antrian").listen("AntrianPusher", (event) => {
            console.log(event);
            // alert('sukses');
            vueDataantrian.getData();
        });
    </script>

</html>
@endif
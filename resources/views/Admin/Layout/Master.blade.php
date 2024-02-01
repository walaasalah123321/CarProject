
<!DOCTYPE html>
<html lang="en">
  <head>
	@include("Admin.Include.CssForList")

</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			@include('sweetalert::alert')
			@include("Admin.Include.Asidebar")

			<!-- top navigation -->
			@include("Admin.Include.navigation")
			<!-- /top navigation -->

			<!-- page content -->

									@include("Admin.Include.Setting")
									@yield("content")
						  </div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
		
            @include("Admin.Include.Footer")
			<!-- /footer content -->
		</div>
	</div>

	@include("Admin.Include.JsForList")


</body></html>

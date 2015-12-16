<html>
	<head>
		<title>Laravel</title>

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #000000;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<table class="table table-striped">
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Acciones</th>
					</tr>
					@foreach($results as $result)
						<tr data-id="{{ $result->id }}">
							<td>{{ $result->id }}</td>
							<td>{{ $result->user->full_name }}</td>
							<td>{{ $result->student->full_name }}</td>
							<td></td>
							<td></td>

						</tr>
					@endforeach
				</table>

			</div>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		{{ partial('index/header') }}
	</head>
	<body>
                {{ partial('index/navbar') }}
                
		{{ content() }}
                
                {{ partial('index/footer') }}
	</body>
</html>
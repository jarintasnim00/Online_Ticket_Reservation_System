<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <form action="session" method="POST">
        
        @csrf

    	<input type="text" name="user" placeholder="enter name"><br><br>
    	<input type="password" name="password" placeholder="enter password"><br><br>
    	<button type="submit">Login</button>
    	
    </form>

</body>
</html>
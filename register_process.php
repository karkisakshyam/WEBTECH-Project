














$name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "insert into users (name, phone, email, password) values('$name', '$phone', '$email', '$password')"
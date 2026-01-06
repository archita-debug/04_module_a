$name = $_POST[$name];
$email = $_POST[$email];
$password = $_POST[$password];
$mobile = $_POST[$mobile];

if($password.length < 6){ 
     echo failure;
     return;
}
if($mobile.length !=10){
    echo failure;
    return;
}

echo success;



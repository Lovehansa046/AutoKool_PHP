<?php
class Register
{
    // REGISTER
    public static function registerUser()
    {
        $controll = array(0 => false, 1 => 'error');
        if (isset($_POST['save'])) {
            $errorString = "";
            $Username = $_POST['name'];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if (!$email) {
                $errorString .= "Неправильный email<br />";
            }
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            if (!$password || !$confirm || mb_strlen($password) < 6) {
                $errorString .= "Пароль должен быть больше 5 символов <br />";
            }
            if ($password != $confirm) {
                $errorString .= "Пароли не совпадают<br />";
            }
            if (mb_strlen($errorString) == 0) {
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $date = Date("Y-m-d");

                $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`,
                `status`, `registration_date`, `pass`) VALUES (NULL, '$Username', '$email', '$passwordHash',
                'user', '$date', '$password')";
                $db = new Database();
                $item = $db->executeRun($sql);
                if ($item)
                    $controll = array(0 => true);
                else
                    $controll = array(0 => false, 1 => 'error');
            } else {
                $controll = array(0 => false, 1 => $errorString);
            }
        }
        return $controll;
    }
}

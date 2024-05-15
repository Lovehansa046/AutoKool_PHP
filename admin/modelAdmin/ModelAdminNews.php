<?php

class ModelAdminNews
{
    public static function getNewsList()
    {
        $query = "SELECT application.*, category.category_name_est, users.username from application,
        category, users WHERE application.category_id=category.category_id AND
        application.user_id=users.id ORDER BY `application`.`application_id` DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    // Add
//    public static function getNewsAdd()
//    {
//        $test = false;
//        if (isset($_POST['save'])) {
//            if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {
//
//                $title = $_POST['title'];
//                $text = $_POST['text'];
//                $idCategory = $_POST['idCategory'];
//
//                // Images type blob
//                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
//                // ----------------
//
//                $sql = "INSERT INTO `news` (`id`, `title`, `text`, `picture`, `category_id`,
//                `user_id`) VALUES (NULL, '$title', '$text', '$image', '$idCategory', '1')";
//                $db = new Database();
//                $item = $db->executeRun($sql);
//                if ($item == true) {
//                    $test = true;
//                }
//            }
//        }
//        return $test;
//    }
    public static function getNewsAdd()
    {
        if (isset($_POST['save'])) {
            if (isset($_POST['name'], $_POST['lastname'], $_POST['idCategory']) !== null) {
                $Username = $_SESSION['name'];
                $Name = $_POST['name'];
                $LastName = $_POST['lastname'];
                $idCategory = $_POST['idCategory'];
                $user_id = $_SESSION['userId']; // Здесь подставьте реальный идентификатор пользователя (может быть из сессии)

                // Подготовка изображения для вставки в базу данных
//                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

                // Инициализируем объект базы данных
                $db = new Database();

                // Проверяем, существует ли уже запись для данного пользователя и категории
                $check_sql = "SELECT COUNT(*) AS count FROM `application` WHERE `user_id` = :user_id AND `category_id` = :category_id";
                $params = [':user_id' => $user_id, ':category_id' => $idCategory];
                $stmt = $db->executePreparedStatement($check_sql, $params);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result['count'] > 0) {
                    // Запись уже существует для данного пользователя и категории
                    error_log("Запись уже существует");
                    return false; // Возвращаем false, так как новость не может быть добавлена
                } else {
                    // Если записи нет, можно добавить новую новость
                    $insert_sql = "INSERT INTO `application` (`application_id`,`username`,`name`, `lastname`, `user_id`, `category_id`) 
                               VALUES (NULL, :username,:name, :lastname, :user_id, :category_id)";
                    $params = [
                        ':username' => $Username,
                        ':name' => $Name,
                        ':lastname' => $LastName,
                        ':category_id' => $idCategory,
                        ':user_id' => $user_id
                    ];
                    $stmt = $db->executePreparedStatement($insert_sql, $params);

                    if ($stmt->rowCount() > 0) {
                        return true; // Новость успешно добавлена
                    } else {
                        // Обработка ошибки при выполнении запроса на добавление новости
                        error_log("Ошибка при добавлении новости");
                        return false;
                    }
                }
            } else {
                // Не все необходимые данные были переданы из формы
                return false;
            }
        }

        return false; // Возврат false, если не была нажата кнопка "save"
    }

    // News Detail id
    public static function getNewsDetail($id)
    {
        $query = "SELECT application.*, category.category_name_est, users.username from application,
        category, users WHERE application.category_id=category.category_id AND
        application.user_id=users.id AND application.application_id=" . $id;
        $db = new Database();
        $arr = $db->getOne($query);
        return $arr;
    }



    //Метод удаление заявки, без применения систем PDO
    public static function getNewsDelete($application_id)
    {
        $test = false;
        if (isset($_POST['save'])) {
            $sql = "DELETE FROM `application` WHERE `application`.`application_id` = " . $application_id;
            $db = new Database();
            $item = $db->executeRun($sql);
            if ($item == true) {
                $test = true;
            }
        }
        return $test;
    }


    //Метод удаление заявки, посредством костыля и создание дополнительной функции executeRun__2, так как функция ранее, не хотела принимать переменную $params
//    public static function getNewsDelete($application_id)
//    {
//        $test = false;
//
//        if (isset($_POST['save'])) {
//            $db = new Database();
//
//            try {
//                $sql = "DELETE FROM `application` WHERE `application_id` = :application_id";
//                $params = [':application_id' => $application_id];
//
//                $stmt = $db->executeRun__2($sql, $params);
//
//                // Kontrolli, kas mõjutati mingeid ridu
//                if ($stmt instanceof PDOStatement && $stmt->rowCount() > 0) {
//                    $test = true;
//                }
//            } catch (PDOException $e) {
//                echo "Päringu täitmisel ilmnes viga: " . $e->getMessage();
//            } catch (Exception $e) {
//                echo "Viga: " . $e->getMessage();
//            }
//        }
//
//        return $test;
//    }




}  // class

<?php

class ModelAdminNews
{
    public static function getNewsList()
    {
        $query = "SELECT news.*, category.name, users.username from news,
        category, users WHERE news.category_id=category.id AND
        news.user_id=users.id ORDER BY `news`.`id` DESC";
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
            if (isset($_POST['title'], $_POST['text'], $_POST['idCategory'], $_FILES['picture']['tmp_name'])) {
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                $user_id = $_SESSION['userId']; // Здесь подставьте реальный идентификатор пользователя (может быть из сессии)

                // Подготовка изображения для вставки в базу данных
                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

                // Инициализируем объект базы данных
                $db = new Database();

                // Проверяем, существует ли уже запись для данного пользователя и категории
                $check_sql = "SELECT COUNT(*) AS count FROM `news` WHERE `user_id` = :user_id AND `category_id` = :category_id";
                $params = [':user_id' => $user_id, ':category_id' => $idCategory];
                $stmt = $db->executePreparedStatement($check_sql, $params);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result['count'] > 0) {
                    // Запись уже существует для данного пользователя и категории
                    error_log("Запись уже существует");
                    return false; // Возвращаем false, так как новость не может быть добавлена
                } else {
                    // Если записи нет, можно добавить новую новость
                    $insert_sql = "INSERT INTO `news` (`title`, `text`, `picture`, `category_id`, `user_id`) 
                               VALUES (:title, :text, :image, :category_id, :user_id)";
                    $params = [
                        ':title' => $title,
                        ':text' => $text,
                        ':image' => $image,
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
        $query = "SELECT news.*, category.name, users.username from news,
        category, users WHERE news.category_id=category.id AND
        news.user_id=users.id AND news.id=" . $id;
        $db = new Database();
        $arr = $db->getOne($query);
        return $arr;
    }


    // News Edit
    public static function getNewsEdit($id)
    {
        $test = false;
        if (isset($_POST['save'])) {
            if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {

                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];

                // Images type blob
                $image = $_FILES['picture']['name'];
                if ($image != "") {
                    $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

                    // Images type text (Saves img to folder)
                    // $uploaddir = '../images/';
                    // $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
                    // copy($_FILES['picture']['tmp_name'], $uploadfile);
                }
                // ----------------
                if ($image == "") {
                    $sql = "UPDATE `news` SET `title` = '$title', `text` = '$text',
                    `category_id` = '$idCategory' WHERE `news`.`id` = " . $id;
                } else {
                    $sql = "UPDATE `news` SET `title` = '$title', `text` = '$text',
                    `picture`='$image', `category_id` = '$idCategory' WHERE `news`.`id` = " . $id;
                }

                $db = new Database();
                $item = $db->executeRun($sql);
                if ($item == true) {
                    $test = true;
                }
            }
        }
        return $test;
    }

    // Delete


//    public static function getNewsDelete($id)
//    {
//        $test = false;
//        if (isset($_POST['save'])) {
//            $sql = "DELETE FROM `news` WHERE `news`.`id` = " . $id;
//            $db = new Database();
//            $item = $db->executeRun($sql);
//            if ($item == true) {
//                $test = true;
//            }
//        }
//        return $test;
//    }

    public static function getNewsDelete($newsId)
    {
        $db = new Database();

        // Удаляем связанные комментарии
        $deleteCommentsSql = "DELETE FROM `comments` WHERE `news_id` = :news_id";
        $params = [':news_id' => $newsId];
        $db->executePreparedStatement($deleteCommentsSql, $params);

        // Затем удаляем новость
        $deleteNewsSql = "DELETE FROM `news` WHERE `id` = :news_id";
        $db->executePreparedStatement($deleteNewsSql, $params);

        // Возвращаем успешное завершение операции
        return true;
    }


//    public static function getNewsDelete($id)
//    {
//        $test = false;
//
//        if (isset($_POST['save'])) {
//            $db = new Database();
//
//            try {
//                // Подготовленный запрос на удаление новости
//                $sql = "DELETE FROM `news` WHERE `id` = :id";
//                $params = [':id' => $id];
//
//                $stmt = $db->executeRun($sql, $params); // Выполнение подготовленного запроса
//
//                // Проверка успешности выполнения запроса
//                if ($stmt->rowCount() > 0) {
//                    $test = true;
//                }
//            } catch (PDOException $e) {
//                // Обработка ошибки выполнения запроса
//                echo "Ошибка выполнения запроса: " . $e->getMessage();
//            }
//        }
//
//        return $test;
//    }

}  // class

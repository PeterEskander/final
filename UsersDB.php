<? php
class CategoryDB {
    public static function getCategories() {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts'
        $statement = $db->prepare($query);
        $statement->execute();
        
        $categories = array();
        foreach ($statement as $row) {
            $category = new Category($row['id'],
                                     $row['email'],
                                     $row['fname'],
                                     $row['lname'],
                                     $row['phone'],
                                     $row['birthday'],
                                     $row['gender'],
                                     $row['password']);
            $categories[] = $category;
        }
        return $categories;
    }

?>
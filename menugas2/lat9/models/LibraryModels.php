<<<<<<< HEAD
<?php

class LibraryModel
{

    function __construct()
    {
        $this->connection = new mysqli(
            'localhost',
            'root',
            '',
            'library'
        );
    }

    public function getLibrary()
    {
        $query = "SELECT * FROM book";
        $result = $this->connection->query($query);
        return $result;
    }
}
=======
<?php

class LibraryModel
{

    function __construct()
    {
        $this->connection = new mysqli(
            'localhost',
            'root',
            '',
            'library'
        );
    }

    public function getLibrary()
    {
        $query = "SELECT * FROM book";
        $result = $this->connection->query($query);
        return $result;
    }
}
>>>>>>> 6c8b2a876aab2ab24bfa52700fc5c0ee34fa6166

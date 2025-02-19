<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task8</title>
</head>
<body>
    <h1>
        Task1
        </h1>
<p>
<!-- <?php
// echo '<br>';
// class Author {
//     private string $name;
//     private string $email;
//     private array $books = [];

//     public function __construct(string $name, string $email) {
//         $this->name = $name;
//         $this->email = $email;
//     }

//     public function addBook(Book $book): void {
//         $this->books[] = $book;
//     }

//     public function getAuthorBooks(): array {
//         return $this->books;
//     }

//     public function getName(): string {
//         return $this->name;
//     }
// }

// class Book {
//     private string $title;
//     private Author $author;
//     private string $isbn;
//     private string $status = "available";

//     public function __construct(string $title, Author $author, string $isbn) {
//         $this->title = $title;
//         $this->author = $author;
//         $this->isbn = $isbn;
//         $author->addBook($this);
//     }

//     public function borrowBook(): void {
//         $this->status = "borrowed";
//     }

//     public function returnBook(): void {
//         $this->status = "available";
//     }

//     public function getBookInfo(): string {
//         return "Title: $this->title, Author: " . $this->author->getName() . ", ISBN: $this->isbn, Status: $this->status";
//     }

//     public function getStatus(): string {
//         return $this->status;
//     }

//     public function getISBN(): string {
//         return $this->isbn;
//     }
// }

// class Library {
//     private array $books = [];

//     public function addBook(Book $book): void {
//         $this->books[] = $book;
//     }

//     public function getAllBooks(): array {
//         return $this->books;
//     }

//     public function findBookByISBN(string $isbn): ?Book {
//         foreach ($this->books as $book) {
//             if ($book->getISBN() === $isbn) {
//                 return $book;
//             }
//         }
//         return null;
//     }

//     public function listAvailableBooks(): array {
//         return array_filter($this->books, fn($book) => $book->getStatus() === "available");
//     }
// }

// $author1 = new Author("J.K. Rowling", "jk@example.com");
// $author2 = new Author("George R.R. Martin", "grrm@example.com");

// $book1 = new Book("Harry Potter", $author1, "123456");
// $book2 = new Book("Game of Thrones", $author2, "789101");

// $library = new Library();
// $library->addBook($book1);
// $library->addBook($book2);

// echo "Before borrowing:\n";
// echo $book1->getBookInfo() . "\n";echo '<br>';

// $book1->borrowBook();
// echo "After borrowing:\n";
// echo $book1->getBookInfo() . "\n";echo '<br>';

// $book1->returnBook();
// echo "After returning:\n";
// echo $book1->getBookInfo() . "\n";echo '<br>';


// echo "\nAvailable Books:\n";echo '<br>';

// foreach ($library->listAvailableBooks() as $availableBook) {
//     echo $availableBook->getBookInfo() . "\n";
// }
?> -->
</p>
<h1>Task2</h1>
<p>
<?php

// class Author {
//     private string $name;
//     private string $email;
//     private array $books = [];

//     public function __construct(string $name, string $email) {
//         $this->setName($name);
//         $this->setEmail($email);
//     }

//     public function addBook(Book $book): void {
//         $this->books[] = $book;
//     }

//     public function getAuthorBooks(): array {
//         return $this->books;
//     }

//     public function getName(): string {
//         return $this->name;
//     }

//     public function setName(string $name): void {
//         $this->name = $name;
//     }

//     public function getEmail(): string {
//         return $this->email;
//     }

//     public function setEmail(string $email): void {
//         $this->email = $email;
//     }
// }

// class Book {
//     private string $title;
//     private Author $author;
//     private string $isbn;
//     private string $status = "available";

//     public function __construct(string $title, Author $author, string $isbn) {
//         $this->setTitle($title);
//         $this->author = $author;
//         $this->setISBN($isbn);
//         $author->addBook($this);
//     }

//     public function borrowBook(): void {
//         $this->status = "borrowed";
//     }

//     public function returnBook(): void {
//         $this->status = "available";
//     }

//     public function getBookInfo(): string {
//         return "Title: {$this->title}, Author: " . $this->author->getName() . ", ISBN: {$this->isbn}, Status: {$this->status}";
//     }

//     public function getStatus(): string {
//         return $this->status;
//     }

//     public function getISBN(): string {
//         return $this->isbn;
//     }

//     public function setISBN(string $isbn): void {
//         $this->isbn = $isbn;
//     }

//     public function getTitle(): string {
//         return $this->title;
//     }

//     public function setTitle(string $title): void {
//         $this->title = $title;
//     }
// }

// class Library {
//     private array $books = [];

//     public function addBook(Book $book): void {
//         $this->books[] = $book;
//     }

//     public function getAllBooks(): array {
//         return $this->books;
//     }

//     public function findBookByISBN(string $isbn): ?Book {
//         foreach ($this->books as $book) {
//             if ($book->getISBN() === $isbn) {
//                 return $book;
//             }
//         }
//         return null;
//     }

//     public function listAvailableBooks(): array {
//         return array_filter($this->books, fn($book) => $book->getStatus() === "available");
//     }
// }

// $author1 = new Author("J.K. Rowling", "jk@example.com");
// $author2 = new Author("George R.R. Martin", "grrm@example.com");

// $book1 = new Book("Harry Potter", $author1, "123456");
// $book2 = new Book("Game of Thrones", $author2, "789101");

// $library = new Library();
// $library->addBook($book1);
// $library->addBook($book2);

// echo "Before borrowing:\n";
// echo $book1->getBookInfo() . "\n";
// $book1->borrowBook();
// echo "After borrowing:\n";
// echo $book1->getBookInfo() . "\n";
// $book1->returnBook();
// echo "After returning:\n";
// echo $book1->getBookInfo() . "\n";

// echo "\nAvailable Books:\n";
// foreach ($library->listAvailableBooks() as $availableBook) {
//     echo $availableBook->getBookInfo() . "\n";
// }
?>

</p>
<h1>Task 3</h1>
<p>
<?php

// class Author {
//     private $name;
//     private $email;
//     private $books = [];

//     public function __construct($name, $email) {
//         $this->name = $name;
//         $this->email = $email;
//     }

//     public function addBook(Book $book) {
//         $this->books[] = $book;
//     }

//     public function getAuthorBooks() {
//         return $this->books;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getEmail() {
//         return $this->email;
//     }
// }

// class Book {
//     private $title;
//     private $author;
//     private $isbn;
//     private $status;

//     public function __construct($title, Author $author, $isbn) {
//         $this->title = $title;
//         $this->author = $author;
//         $this->isbn = $isbn;
//         $this->status = 'available';
//         $this->author->addBook($this);
//     }

//     public function borrowBook() {
//         if ($this->status == 'available') {
//             $this->status = 'borrowed';
//         } else {
//             echo "The book is already borrowed.\n";
//         }
//     }

//     public function returnBook() {
//         if ($this->status == 'borrowed') {
//             $this->status = 'available';
//         } else {
//             echo "The book is already available.\n";
//         }
//     }

//     public function getBookInfo() {
//         return [
//             'Title' => $this->title,
//             'Author' => $this->author->getName(),
//             'ISBN' => $this->isbn,
//             'Status' => $this->status
//         ];
//     }

//     public function getISBN() {
//         return $this->isbn;
//     }

//     public function getStatus() {
//         return $this->status;
//     }
// }

// class DigitalBook extends Book {
//     private $fileSize;

//     public function __construct($title, Author $author, $isbn, $fileSize) {
//         parent::__construct($title, $author, $isbn);
//         $this->fileSize = $fileSize;
//     }

//     public function getBookInfo() {
//         $bookInfo = parent::getBookInfo();
//         $bookInfo['File Size (MB)'] = $this->fileSize;
//         return $bookInfo;
//     }

//     public function getFileSize() {
//         return $this->fileSize;
//     }
// }

// class Library {
//     private $books = [];

//     public function addBook(Book $book) {
//         $this->books[] = $book;
//     }

//     public function getAllBooks() {
//         $bookList = [];
//         foreach ($this->books as $book) {
//             $bookList[] = $book->getBookInfo();
//         }
//         return $bookList;
//     }

//     public function findBookByISBN($isbn) {
//         foreach ($this->books as $book) {
//             if ($book->getISBN() == $isbn) {
//                 return $book->getBookInfo();
//             }
//         }
//         return null;
//     }

//     public function listAvailableBooks() {
//         $availableBooks = [];
//         foreach ($this->books as $book) {
//             if ($book->getStatus() == 'available') {
//                 $availableBooks[] = $book->getBookInfo();
//             }
//         }
//         return $availableBooks;
//     }
// }

// $author1 = new Author("J.K. Rowling", "jk@hogwarts.com");
// $author2 = new Author("George Orwell", "george@orwell.com");
// $book1 = new Book("Harry Potter and the Philosopher's Stone", $author1, "123456");
// $book2 = new DigitalBook("1984 (E-Book)", $author2, "654321", 5.3);
// $library = new Library();

// $library->addBook($book1);
// $library->addBook($book2);

// $book1->borrowBook();

// echo "All Books in Library:\n";
// print_r($library->getAllBooks());

// echo "Available Books:\n";
// print_r($library->listAvailableBooks());

// echo "Book with ISBN 123456:\n";
// print_r($library->findBookByISBN("123456"));

// $book1->returnBook();

// echo "Available Books after returning a book:\n";
// print_r($library->listAvailableBooks());
// ?>

</p>
<h1>Task4</h1>
<p>
<?php

// class Author {
//     private $name;
//     private $email;
//     private $books = [];

//     public function __construct($name, $email) {
//         $this->name = $name;
//         $this->email = $email;
//     }

//     public function addBook(Book $book) {
//         $this->books[] = $book;
//     }

//     public function getAuthorBooks() {
//         return $this->books;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getEmail() {
//         return $this->email;
//     }
// }

// class Book {
//     private $title;
//     private $author;
//     private $isbn;
//     private $status;

//     public function __construct($title, Author $author, $isbn) {
//         $this->title = $title;
//         $this->author = $author;
//         $this->isbn = $isbn;
//         $this->status = 'available';
//         $this->author->addBook($this);
//     }

//     public function borrowBook() {
//         if ($this->status == 'available') {
//             $this->status = 'borrowed';
//         } else {
//             echo "The book is already borrowed.\n";
//         }
//     }

//     public function returnBook() {
//         if ($this->status == 'borrowed') {
//             $this->status = 'available';
//         } else {
//             echo "The book is already available.\n";
//         }
//     }

//     public function getBookInfo() {
//         return [
//             'Title' => $this->title,
//             'Author' => $this->author->getName(),
//             'ISBN' => $this->isbn,
//             'Status' => $this->status
//         ];
//     }

//     public function getISBN() {
//         return $this->isbn;
//     }

//     public function getStatus() {
//         return $this->status;
//     }
// }

// class DigitalBook extends Book {
//     private $fileSize;

//     public function __construct($title, Author $author, $isbn, $fileSize) {
//         parent::__construct($title, $author, $isbn);
//         $this->fileSize = $fileSize;
//     }


//     public function getBookInfo() {
//         $bookInfo = parent::getBookInfo(); 
//         $bookInfo['File Size (MB)'] = $this->fileSize;
//         return $bookInfo;
//     }

//     public function getFileSize() {
//         return $this->fileSize;
//     }
// }

// class Library {
//     private $books = [];

//     public function addBook(Book $book) {
//         $this->books[] = $book;
//     }

//     public function getAllBooks() {
//         $bookList = [];
//         foreach ($this->books as $book) {
//             $bookList[] = $book->getBookInfo();
//         }
//         return $bookList;
//     }

//     public function findBookByISBN($isbn) {
//         foreach ($this->books as $book) {
//             if ($book->getISBN() == $isbn) {
//                 return $book->getBookInfo(); 
//             }
//         }
//         return null;
//     }

//     public function listAvailableBooks() {
//         $availableBooks = [];
//         foreach ($this->books as $book) {
//             if ($book->getStatus() == 'available') {
//                 $availableBooks[] = $book->getBookInfo();
//             }
//         }
//         return $availableBooks;
//     }
// }


// $author1 = new Author("J.K. Rowling", "jk@hogwarts.com");
// $author2 = new Author("George Orwell", "george@orwell.com");

// $book1 = new Book("Harry Potter and the Philosopher's Stone", $author1, "123456");
// $book2 = new DigitalBook("1984 (E-Book)", $author2, "654321", 5.3);

// $library = new Library();
// $library->addBook($book1);
// $library->addBook($book2);
// $book1->borrowBook();

// echo "All Books in Library:\n";
// print_r($library->getAllBooks());

// echo "Available Books:\n";
// print_r($library->listAvailableBooks());

// echo "Book with ISBN 123456:\n";
// print_r($library->findBookByISBN("123456"));

// $book1->returnBook();

// echo "Available Books after returning a book:\n";
// print_r($library->listAvailableBooks());
// ?>

</p>
<h1>Task5</h1>
<p>
<?php

class Author {
    private $name;
    private $email;
    private $books = [];

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getAuthorBooks() {
        return $this->books;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

class Book {
    private $title;
    private $author;
    private $isbn;
    private $status;

    public function __construct($title, Author $author, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->status = 'available';
        $this->author->addBook($this);
    }

    public function borrowBook() {
        if ($this->status == 'available') {
            $this->status = 'borrowed';
        } else {
            echo "The book is already borrowed.\n";
        }
    }

    public function returnBook() {
        if ($this->status == 'borrowed') {
            $this->status = 'available';
        } else {
            echo "The book is already available.\n";
        }
    }

    public function getBookInfo() {
        return [
            'Title' => $this->title,
            'Author' => $this->author->getName(),
            'ISBN' => $this->isbn,
            'Status' => $this->status
        ];
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function getStatus() {
        return $this->status;
    }
}

class DigitalBook extends Book {
    private $fileSize; 

    public function __construct($title, Author $author, $isbn, $fileSize) {
        parent::__construct($title, $author, $isbn);
        $this->fileSize = $fileSize;
    }


    public function getBookInfo() {
        $bookInfo = parent::getBookInfo();
        $bookInfo['File Size (MB)'] = $this->fileSize; 
        return $bookInfo;
    }

    public function getFileSize() {
        return $this->fileSize;
    }
}

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getAllBooks() {
        $bookList = [];
        foreach ($this->books as $book) {
            $bookList[] = $book->getBookInfo();
        }
        return $bookList;
    }

    public function findBookByISBN($isbn) {
        foreach ($this->books as $book) {
            if ($book->getISBN() == $isbn) {
                return $book->getBookInfo(); 
            }
        }
        return null;
    }

    public function listAvailableBooks() {
        $availableBooks = [];
        foreach ($this->books as $book) {
            if ($book->getStatus() == 'available') {
                $availableBooks[] = $book->getBookInfo();
            }
        }
        return $availableBooks;
    }
}


$author1 = new Author("J.K. Rowling", "jk@hogwarts.com");
$author2 = new Author("George Orwell", "george@orwell.com");

$book1 = new Book("Harry Potter and the Philosopher's Stone", $author1, "123456");
$book2 = new DigitalBook("1984 (E-Book)", $author2, "654321", 5.3);

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$book1->borrowBook();
$book2->borrowBook();

echo "All Books in Library:\n";
print_r($library->getAllBooks());

echo "Available Books:\n";
print_r($library->listAvailableBooks());

$book1->returnBook();
echo "Available Books after returning a book:\n";
print_r($library->listAvailableBooks());

?>

</p>

</body>
</html>
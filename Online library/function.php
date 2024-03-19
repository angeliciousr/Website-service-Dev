<?php

//get book by title
function Details ($title) {
    $conn =mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('could not connect to MYSQL:' . mysqli_connect_error()); 
            $title= strtolower($title);
    $query="select * from books where title='".$title."'"; 
    $result = mysqli_query($conn, $query);
    $book_details=null;

    if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $book_details['title']=$row['title'];
            $book_details['authors']=$row['authors'];
            $book_details['pubyear']=$row['pubyear'];
            $book_details['description']=$row['description'];
            $book_details['language']=$row['language'];
            $book_details['isbn']=$row['isbn'];
            $book_details['reviews']=$row['reviews'];
            $book_details['bestseller']=$row['bestseller'];
            $book_details['coverphoto']=$row['coverphoto'];
            $book_details['category']=$row['category'];
    }

    return $book_details;
    }
}

//get book by author
function Author($author) {
    $conn =mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('could not connect to MYSQL:' . mysqli_connect_error()); 
    $author = strtolower($author);
    
    $query="select * from books where authors='".$author."'"; 
    $result = mysqli_query($conn, $query);
    $books = null;

    if ($result) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $books['title']=$row['title'];
        $books['authors']=$row['authors']; 
        $books['pubyear']=$row['pubyear'];
        $books['description'] = $row['description']; 
        $books['language']=$row['language'];
        $books['isbn']=$row['isbn']; 
        $books['reviews']=$row['reviews'];
        $books['bestseller ']=$row['bestseller'];
        $books['coverphoto']=$row['coverphoto']; 
        $books['category']=$row['category'];
        }
        
        return $books;
    }
}

//get book by year
function Year ($year) {
    $conn =mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('could not connect to MYSQL:' . mysqli_connect_error()); $year = strtolower($year);
    $query="select * from books where pubyear='".$year."'"; 
    $result = mysqli_query($conn, $query);
    $booky = null;

    if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $booky['title']=$row['title']; 
            $booky['authors']=$row['authors']; 
            $booky['pubyear']=$row['pubyear'];
            $booky ['description']=$row['description']; 
            $booky ['language']=$row['language'];
            $booky['isbn']=$row['isbn'];
            $booky ['reviews ']=$row['reviews']; 
            $booky['bestseller']=$row['bestseller']; 
            $booky['coverphoto']=$row['coverphoto'];
            $booky['category']=$row['category'];
    }

    return $booky;
    }
}

//get book by category

function Cat($cat){
    $conn =mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('could not connect to MYSQL: '. mysqli_connect_error()); 
        $cat = strtolower($cat);
    $query="select * from books where category='".$cat."'"; 
    $result = mysqli_query($conn, $query);
    $bookc = null;

    if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ $bookc ['title']=$row['title']; $bookc['authors']=$row['authors'];
            $bookc ['pubyear']=$row['pubyear']; 
            $bookc['description']=$row['description']; 
            $bookc[ 'language']=$row['language'];
            $bookc['isbn']=$row['isbn'];
            $bookc ['reviews']=$row['reviews']; 
            $bookc['bestseller']=$row['bestseller'];
            $bookc['coverphoto ']=$row['coverphoto'];
            $bookc ['category']=$row['category'];
    }
    return $bookc;
}

}


//get book by author and category
    function AC ($author, $category) {
    $conn =mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('could not connect to MYSQL:' . mysqli_connect_error());
    $category= strtolower($category);
    $author= strtolower($author);
    $query="select * from books where authors = '".$author."' AND category='".$category."'"; $result = mysqli_query($conn, $query);
    $bookac = null;

    if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $bookac['title']=$row['title'];
            $bookac['authors']=$row['authors']; 
            $bookac['pubyear']=$row['pubyear']; 
            $bookac['description']=$row['description']; 
            $bookac['language']=$row['language'];
            $bookac['isbn']=$row['isbn']; 
            $bookac['reviews']=$row['reviews'];
            $bookac['bestseller']=$row['bestseller']; 
            $bookac['coverphoto']=$row['coverphoto']; 
            $bookac['category']=$row['category'];
        }
    return $bookac;
    }
}



// get book by author and year 

function AY($author, $year){
    $conn =mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('could not connect to MYSQL:'. mysqli_connect_error()); 
    $year = strtolower($year);
    $author = strtolower($author);
    $query="select * from books where authors ='".$author."'AND pubyear='".$year."'";
    $result = mysqli_query($conn, $query);
    $bookay = null;

    if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $bookay['title']=$row['title'];
            $bookay['authors']=$row['authors']; 
            $bookay['pubyear']=$row['pubyear'];
            $bookay ['description'] = $row['description'];
            $bookay [ 'language']=$row['language']; 
            $bookay ['isbn']=$row['isbn'];
            $bookay['reviews']=$row['reviews'];
            $bookay['bestseller']=$row['bestseller'];
            $bookay['coverphoto']=$row['coverphoto'];
            $bookay['category']=$row['category'];
        }
        return $bookay;
    }
}

?>
<?php

/* Use Case #3

We are preparing three types of content for a website:

Articles
Ads
Vacancies

All of those have a title and text. When showing the title, they are modified as follows: 
articles remain as they are, ads are shown in all caps and vacancies are appended with " - apply now!". 
The original title should still be retrievable, so no modification is permanent.

Have an array with two articles, one ad and one vacancy. 
Use this array to show all content types (title + text).

Bonus: an article can be marked as "breaking news". 
If this is the case, the title is prepended with "BREAKING: ". 
Extra bonus: display all the content with the appropriate html tags. 
*/

class Content 
{
  public $title;
  public $text;
  public $type;
  public $important;

  public function __construct(string $title, string $text, string $type, bool $important)
  {
    $this->title = $title;
    $this->text = $text;
    $this->type = $type;
    $this->important = $important;
  }

  public function setTitle(){
    if($this->type == 'ad'){

      return strtoupper($this->title);

    }elseif ($this->type == 'vacancy'){
      
      return $this->title . " - apply now!";

    }elseif($this->important && $this->type == 'article'){
      return "Breaking: " . $this->title;
    }
    else{
      return $this->title;
    }
  }

}

$array = 
[
  new Content("Testing article title", "Article text bla bla bla", "article", false),
  new Content("Testing article title 2", "Second article text bla bla bla ", "article", true),
  new Content("Testing Ad Title", "This is an AD buy MY THINGS", "ad", true),
  new Content("Testing Vacancy!", "This is a vacancy for our new position!!!", "vacancy", false)
];


foreach ($array as $article) {
  echo "<br>";
  echo "<h3>" . $article->setTitle() . "</h2>";
  echo "\n";
  echo "<p>" . $article->text . "</p>";
  echo "<br>";
}

// $content = new Content("testing title", "testing textcontent", "ad");
// $content2 = new Content("testing title", "testing textcontent", "vacancy");


// echo $content->setTitle();
// echo "<br>";
// echo $content2->setTitle();
<?php

namespace gbcom\Blog;

use gbcom\Person\Person as Person;

class Post
{
   public function __construct(
       private Person $author,
       private string $text
   ) {
   }

   public function __toString()
   {
       return $this->author . ' пишет: ' . $this->text;
   }
}

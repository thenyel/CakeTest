<?php 
class ArticlesControllerTest extends CakeTestCase { 
   function startCase() { 
     echo '<h1>Starting Test Case</h1>'; 
   } 
   function endCase() { 
     echo '<h1>Ending Test Case</h1>'; 
   } 
   function startTest($method) { 
     echo '<h3>Starting method ' . $method . '</h3>'; 
   } 
   function endTest($method) { 
     echo '<hr />'; 
   } 
   function testIndex() { 
     $result = $this->testAction('/articles/index'); 
     debug($result); 
   } 
   function testIndexShort() { 
     $result = $this->testAction('/articles/index/short'); 
     debug($result); 
   } 
   function testIndexShortGetRenderedHtml() { 
     $result = $this->testAction('/articles/index/short', 
     array('return' => 'render')); 
     debug(htmlentities($result)); 
   } 
   function testIndexShortGetViewVars() { 
     $result = $this->testAction('/articles/index/short', 
     array('return' => 'vars')); 
     debug($result); 
   } 
   function testIndexFixturized() { 
     $result = $this->testAction('/articles/index/short', 
     array('fixturize' => true)); 
     debug($result); 
   } 
   function testIndexPostFixturized() { 
     $data = array('Article' => array('user_id' => 1, 'published' 
          => 1, 'slug'=>'new-article', 'title' => 'New Article', 'body' => 'New Body')); 
     $result = $this->testAction('/articles/index', 
     array('fixturize' => true, 'data' => $data, 'method' => 'post')); 
     debug($result); 
   } 
} 
?> 
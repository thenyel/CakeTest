  <?php
    App::import('Model', 'Article');
    
    class ArticleTestCase extends CakeTestCase {
        var $fixtures = array( 'app.article' );
    
        function testPublished() {
            $this->Article =& ClassRegistry::init('Article');
    
            $result = $this->Article->published(array('id', 'title'));
            $expected = array(
                array('Article' => array( 'id' => 1, 'title' => 'First Article' )),
                array('Article' => array( 'id' => 2, 'title' => 'Second Article' )),
                array('Article' => array( 'id' => 3, 'title' => 'Third Article' ))
            );
    
            $this->assertEqual($result, $expected);
        }
    }
    ?>    

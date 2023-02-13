<html>
<?php
class Page 
{
    private $page;
    private $title;
    private $year;
    private $copyright;

    function __construct($title, $year, $copyright)
    {
        $this->page = '';
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
    }

    function __destruct()
    {
        echo "<br><i>Copyright: &copy;$this->copyright</i><br>";
    }

    private function addHeader()
    {
        $this->page .= "<h2>$this->title</h2>";
    }

    public function addContent($content)    
    {
        $this->addHeader();
        $this->page .="
        Year: $this->year
        <br><br><br>
        $content";
    }

    public function get() 
    {
        return $this->page;
    }
}

$title = $_POST['title'];
$year = $_POST['year'];
$copyright = $_POST['copyright'];
$content = $_POST['content'];
$page = new Page($title, $year, $copyright);
$page->addContent($content);
echo $page->get();
?>
</html>
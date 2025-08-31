<?php 
    class Bankaccount
    {
        private $pin;
        private $balance;
        function __construct($first_name, $second_name, $pin)
        {
            $this->first_name = $first_name;
            $this->second_name = $second_name;
            $this->setPin($pin);
            $this->balance = 500;
        }

        // Setter 
        public function setPin($user_pin)
        {
            if (strlen(strval($user_pin)) === 4) {
                $this->pin = $user_pin;
            } else {
                throw new Exception("Neplatný pin!");
            }
        }

        // Getter 
        public function getBalance()
        { 
            return $this->balance; 
        }
    }
    
    // použití 
    $account = new Bankaccount("David", "Šetek", 1234);
    echo $account->getBalance();

?>
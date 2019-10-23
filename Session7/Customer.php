<?php
    include 'User.php';
    class Customer extends User{
        public $deliveryAddress;
        public $customerId;

        public function pay(){
            echo "Pay function";
        }
        public function orderHistory(){
            echo "OrderHistory function";
        }
    }

    $customer = new Customer();
    $customer->register();
    $customer->pay();
?>
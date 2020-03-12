<?php 
    class UserTest extends \PHPUnit\Framework\TestCase
    {
        public function testThatWeCanGetTheFirstName()
        {
            $user = new \App\Models\User;

            $user->setFirstName('Billy');

            $this->assertEquals($user->getFirstName(), 'Billy');
        }

        public function testThatWeCanGetTheLastName()
        {
            $user = new \App\Models\User;

            $user->setLastName('Smith');

            $this->assertEquals($user->getLastName(), 'Smith');
        }

        public function testFullNameIsReturned()
        {
            $user = new \App\Models\User;
            $user->setFirstName('Billy');
            $user->setLastName('Smith');

            $this->assertEquals($user->getFullName(), 'Billy Smith');
        }
    }
?>
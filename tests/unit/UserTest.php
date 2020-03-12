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

        public function testFirstAndLastNamesAreTrimmed()
        {
            $user = new \App\Models\User;
            $user->setFirstName(' Billy  ');
            $user->setLastName('  Smith    ');

            $this->assertEquals($user->getFirstName(), 'Billy');
            $this->assertEquals($user->getLastName(), 'Smith');
        }

        public function testEmailCanBeSet()
        {
            $user = new \App\Models\User;
            $user->setEmail('billy@example.com');

            $this->assertEquals($user->getEmail(), 'billy@example.com');
        }

        public function testEmailVariablesContainCorrectValues()
        {
            $user = new \App\Models\User;
            $user->setFirstName('Billy');
            $user->setLastName('Smith');
            $user->setEmail('billy@example.com');

            $emailVariables = $user->getEmailVariables();

            $this->assertArrayHasKey('full_name', $emailVariables);
            $this->assertArrayHasKey('email', $emailVariables);

            $this->assertEquals($emailVariables['full_name'], 'Billy Smith');
            $this->assertEquals($emailVariables['email'], 'billy@example.com');
        }
    }
?>
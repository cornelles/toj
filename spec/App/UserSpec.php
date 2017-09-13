<?php

namespace spec\App;

use App\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_updates_all_fields_on_put()
    {
        $this->beConstructedWith([
            'name' => 'Cornel Les',
            'email' => 'cornel.les@softvision.ro',
            'password' => 'secret'
        ]);

        $this->store('PUT', [
            'name' => 'Cornel Bogdan Les',
            'email' => 'thebogu@gmail.com',
            'password' => 'secret2'
        ]);

        $this->getName()->shouldBe('Cornel Bogdan Les');
        $this->getEmail()->shouldBe('thebogu@gmail.com');
        $this->getPassword()->shouldBe('secret2');
    }

    function it_updates_with_null_missing_fields_on_put()
    {
      $this->beConstructedWith([
        'name' => 'Cornel Les',
        'email' => 'cornel.les@softvision.ro',
        'password' => 'secret'
      ]);

      $this->store('PUT', [
        'email' => 'thebogu@gmail.com'
      ]);

      $this->getName()->shouldBe(null);
      $this->getEmail()->shouldBe('thebogu@gmail.com');
      $this->getPassword()->shouldBe(null);
    }

    function it_updateds_only_submitted_fields_on_patch()
    {
      $this->beConstructedWith([
        'name' => 'Cornel Les',
        'email' => 'cornel.les@softvision.ro',
        'password' => 'secret'
      ]);

      $this->store('PATCH', [
        'email' => 'thebogu@gmail.com'
      ]);

      $this->getName()->shouldBe('Cornel Les');
      $this->getEmail()->shouldBe('thebogu@gmail.com');
      $this->getPassword()->shouldBe('secret');
    }
}

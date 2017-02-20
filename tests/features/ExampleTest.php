<?php

class ExampleTest extends FeatureTestCase
{
    
    function test_basic_example()
    {
        
        $user = factory(\App\User::class)->create([
            'name'=> 'Ruben Peralta',
            'email'=> 'rubenperalta@hotmail.com',
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Ruben Peralta')
             ->see('rubenperalta@hotmail.com');
    }
}

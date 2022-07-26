<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher=$passwordHasher;
        
    }
    public function load(ObjectManager $manager): void
    {
        $user =new User;
        $user->setLogin("client@gmail.com");
     

        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'passer'
            );
            $user->setPassword($hashedPassword);
            $user->setRoles(["ROLE_CLIENT"]);
            $user1=new User();
            $user1->setLogin("gestionnaire@gmail.com");
            $hashedPassword = $this->passwordHasher->hashPassword(
                $user1,
                'passer'
             ); 
            $user1->setPassword($hashedPassword);
            $user1->setRoles(["ROLE_GESTIONNAIRE"]);


        
        // $product = new Product();
         $manager->persist($user);
         $manager->persist($user1);
         $manager->flush();
    }
}

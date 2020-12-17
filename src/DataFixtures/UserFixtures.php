<?php

namespace App\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;


class UserFixtures extends BaseFixture
{
    private $passwordEncoder;


    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(
            User::class,
            30,
            function( User $user, $i ) {
                if ( $i == 0 ) {
                    $user->setEmail( 'admin@mail.ru' );
                    $user->setUsername( 'Admin' );
                    $user->setNativeLang( User::possibleLanguages()[rand(0,1)] );
                    $user->setRoles( $user->getRoles() );
                    $user->setPassword( $this->passwordEncoder->encodePassword($user, '2222') );
                }
                elseif ($i == 1 ) {
                    $user->setEmail( 'user@mail.ru' );
                    $user->setUsername( 'User' );
                    $user->setNativeLang( User::possibleLanguages()[rand(0,1)] );
                    $user->setRoles( $user->getRoles() );
                    $user->setPassword( $this->passwordEncoder->encodePassword($user, '2222') );
                } else {
                    $user->setEmail( $this->faker->email );
                    $user->setUsername( $this->faker->name.'_'.$i );
                    $user->setNativeLang( User::possibleLanguages()[rand(0,1)] );
                    $user->setRoles( $user->getRoles() );
                    $user->setPassword( $this->passwordEncoder->encodePassword($user, '2222') );
                }
            });

        $manager->flush();
    }



    /*public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < count($this->mails); $i++) {
            $user = new User();
            $user->setEmail( $this->mails[$i] );
            $user->setUsername( $this->names[$i] );
            $user->setNativeLang('ru');
            $user->setRoles([]);
            $user->setPassword( $this->passwordEncoder->encodePassword($user, '2222') );
            $manager->persist($user);

            $manager->flush();
        }

    }*/


}

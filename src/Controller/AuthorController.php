<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Author;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AuthorController extends AbstractController
{

    /**
     * @Route("/author", name="author")
     */
    public function actionIndex(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }


    /**
     * @Route("/author/create", name="author-create")
     * Method ({"GET", "POST"})
     */
    public function actionCreate(Request $request, ValidatorInterface $validator): Response
    {

        $repository = $this->getDoctrine()->getRepository(Author::class);
        if ($request->isMethod('GET')) {
            return $this->render('author/create.html.twig');
        }

        /**** TEST ****/
        //$em = $this->getDoctrine()->getManager();
        dd($repository);
        //dd($validator->validate($author));
        return $this->render('author/create.html.twig');
    }


    /**
     * @Route("/author/update", name="author-update")
     */
    public function actionUpdate(): Response
    {

    }

    /**
     * @Route("/author/delete", name="author-delete")
     */
    public function actionDelete(): Response
    {

    }
}

<?php

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use App\Entity\Article;
    class ArticleController extends AbstractController {

        /**
         * @Route("/", name="article_list")
         * @Method("{GET}")
         */
        public function index()
        {
            $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
            return $this->render('articles/index.html.twig', array('name'=>'APK', 'articles' => $articles));
        }

        // /**
        //  * @Route("/articel/save")
        //  */

        /**
         * @Route("/article/{id}", name="article_show")
         */
        public function show($id) 
        {
            $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

            return $this->render('articles/show.html.twig',array('article' => $article));
        }

        public function save()
        {
            $entityManager = $this->getDoctrine()->getManager();

            $articel = new Article();

            $articel->setTitle("Hello WOrld");
            $articel->setBody("HI my name is apk. I am from mm");
            $entityManager->persist($articel);
            $entityManager->flush();

            return new Response('Save on article with id of'.$articel->getId());
        }

    }



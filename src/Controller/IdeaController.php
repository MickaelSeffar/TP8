<?php


namespace App\Controller;


use App\Entity\Idea;
use App\Form\IdeaType;
use App\Services\Censurator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route(path="idea/", name="idea_")
 */
class IdeaController extends AbstractController
{
    /**
     * @Route(path="", name="list", methods={"GET"})
     */
    public function list(EntityManagerInterface $entityManager) {

        // Récupération des entités dans la BDD
        $ideas = $entityManager->getRepository('App:Idea')->getAll(1);

        return $this->render('idea/list.html.twig', ['ideas' => $ideas]);
    }

    /**
     * @Route(path="{id}", requirements={"id": "\d+"}, name="detail", methods={"GET"})
     */
    public function detail(Request $request, EntityManagerInterface $entityManager) {

        // Récupération du paramètre GET (PATH) dans la requête
        $id = $request->get('id');

        // Récupération de l'entité dans la BDD
        $idea = $entityManager->getRepository('App:Idea')->find($id);

        // Vérification Interne
        if (is_null($idea)) {
            throw $this->createNotFoundException();
        }

        return $this->render('idea/detail.html.twig', ['idea' => $idea]);
    }

    /** @Route("new", name="new") */
    public function create(Request $request, EntityManagerInterface $em, Censurator $censurator):Response {
        $idea = new Idea();
        $idea
            ->setIsPublished(true)
            ->setDateCreated(new \DateTime())
            ->setAuthor($this->getUser()->getUsername())
        ;
        $form = $this->createForm(IdeaType::class, $idea);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $idea->setDescription($censurator->purify($idea->getDescription()) );
            $em->persist($idea);
            $em->flush();
            $this->addFlash('success', 'Your idea has been added!');
            return $this->redirectToRoute('idea_detail', ['id'=>$idea->getId()]);
        }
        return $this->render('idea/create.html.twig', ['form' => $form->createView()]);
    }
}
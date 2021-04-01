<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="home_")
 */
class HomeController extends AbstractController
{
    /**
     * @Route(path="", name="index", methods={"GET"})
     * @Route(path="home", name="index_2", methods={"GET"})
     */
    public function index() {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route(path="contact", name="contact", methods={"GET"})
     */
    public function contact() {
        return $this->render('home/contact.html.twig');
    }

    /**
     * @Route(path="about-us", name="about_us", methods={"GET"})
     */
    public function aboutUs() {
        return $this->render('home/about_us.html.twig');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 4/24/2018
 * Time: 2:05 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/");
     */
    public function homepage(){
        return new Response('Symfony annotations ..working');
    }

    /**
     * @Route("/news/{slug}");
     */
    public function show($slug) {
        return new Response(sprintf('Show articles by Slug: %s', $slug));
    }
}
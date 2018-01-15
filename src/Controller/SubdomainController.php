<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 04/01/18
 * Time: 11:13
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SubdomainController extends Controller
{
    /**
     * @Route(
     *     "/",
     *     name="subdomain",
     *     host="{subdomain}.symfony-challenge.dev")
     *
     */

    public function subdomain()
    {
        return $this->render('index.html.twig');
    }
}
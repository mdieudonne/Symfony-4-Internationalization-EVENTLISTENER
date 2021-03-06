<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 05/01/18
 * Time: 09:14
 */

namespace App\EventListener;

use App\Entity\Country;
use App\Entity\Language;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RequestListener
{
    protected $twig;

    public function __construct(\Twig_Environment $twig, EntityManager $em)
    {
        $this->twig = $twig;
        $this->em = $em;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
        $url = $request->getHost();
        $subdomain = explode(".", $url);

        $countryRep =  $this->em->getRepository(Country::class);
        $languageRep =  $this->em->getRepository(Language::class);
        $country = $countryRep->findOneBy(array(
            'country' => $subdomain
        ));

        $language=$languageRep->findOneBy(array(
            'country' => $country
        ));

        $this->twig->addGlobal('description', $language->getDescription() );
        $this->twig->addGlobal('keyword', $language->getKeyword() );
        $this->twig->addGlobal('title', $language->getTitle() );


        switch ($subdomain[0]) {

            //FRANCE

            case 'france':
                $request->setLocale('fr');
                $this->twig->addGlobal('languageData', 'fr' );
                break;

            case 'belgique':
                $request->setLocale('fr');
                $this->twig->addGlobal('languageData', 'fr-BE' );
                break;

            case 'luxembourg':
                $request->setLocale('fr');
                $this->twig->addGlobal('languageData', 'fr-LU' );
                break;

            case 'suisse':
                $request->setLocale('fr');
                $this->twig->addGlobal('languageData', 'fr-CH' );
                break;

            //ENGLISH
            case 'www':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-US' );
                break;

            case 'united-kingdom':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-UK' );
                break;

            case 'australia':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-AU' );
                break;

            case 'united-states':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-US' );
                break;

            case 'new-zealand':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-NZ' );
                break;

            case 'ireland':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-IE' );
                break;

            case 'canada':
                $request->setLocale('en');
                $this->twig->addGlobal('languageData', 'en-CA' );
                break;

            //DEUTSCH
            case 'deutschland':
                $request->setLocale('de');
                $this->twig->addGlobal('languageData', 'de-DE' );
                break;

            case 'schweiz':
                $request->setLocale('de');
                $this->twig->addGlobal('languageData', 'de-CH' );
                break;

            case 'osterreich':
                $request->setLocale('de');
                $this->twig->addGlobal('languageData', 'de-AT' );
                break;

            //NEDERLANDS
            case 'nederland':
                $request->setLocale('nl');
                $this->twig->addGlobal('languageData', 'nl-NL' );
                break;

            case 'belgie':
                $request->setLocale('nl');
                $this->twig->addGlobal('languageData', 'nl-BE' );
                break;

        }

    }
}

<?php

/* base.html.twig */
class __TwigTemplate_dd95f984b61923c2cdd8ff37d97a4b6e26e74696038d1901f9372699039bb0d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8c41fc31de43b933b5b4ba887193ef0046ce41c080cd2a3c4a46a652cd02e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c41fc31de43b933b5b4ba887193ef0046ce41c080cd2a3c4a46a652cd02e46->enter($__internal_d8c41fc31de43b933b5b4ba887193ef0046ce41c080cd2a3c4a46a652cd02e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0bb39be23ef8bc48efcf2f6d0dbfdca3b9e68e24b1fa83193c7815e6694c7b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb39be23ef8bc48efcf2f6d0dbfdca3b9e68e24b1fa83193c7815e6694c7b7a->enter($__internal_0bb39be23ef8bc48efcf2f6d0dbfdca3b9e68e24b1fa83193c7815e6694c7b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["languageData"]) || array_key_exists("languageData", $context) ? $context["languageData"] : (function () { throw new Twig_Error_Runtime('Variable "languageData" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
</body>
</html>
";
        
        $__internal_d8c41fc31de43b933b5b4ba887193ef0046ce41c080cd2a3c4a46a652cd02e46->leave($__internal_d8c41fc31de43b933b5b4ba887193ef0046ce41c080cd2a3c4a46a652cd02e46_prof);

        
        $__internal_0bb39be23ef8bc48efcf2f6d0dbfdca3b9e68e24b1fa83193c7815e6694c7b7a->leave($__internal_0bb39be23ef8bc48efcf2f6d0dbfdca3b9e68e24b1fa83193c7815e6694c7b7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b676f7409b3fd81a1db007f8b5ceed9a6119863a586ae86fef0930a29a55a110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b676f7409b3fd81a1db007f8b5ceed9a6119863a586ae86fef0930a29a55a110->enter($__internal_b676f7409b3fd81a1db007f8b5ceed9a6119863a586ae86fef0930a29a55a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc5538cad305c4070dba480a08ea868a875cc9363eab8578560ed3d4dde98927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5538cad305c4070dba480a08ea868a875cc9363eab8578560ed3d4dde98927->enter($__internal_fc5538cad305c4070dba480a08ea868a875cc9363eab8578560ed3d4dde98927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc5538cad305c4070dba480a08ea868a875cc9363eab8578560ed3d4dde98927->leave($__internal_fc5538cad305c4070dba480a08ea868a875cc9363eab8578560ed3d4dde98927_prof);

        
        $__internal_b676f7409b3fd81a1db007f8b5ceed9a6119863a586ae86fef0930a29a55a110->leave($__internal_b676f7409b3fd81a1db007f8b5ceed9a6119863a586ae86fef0930a29a55a110_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_277634f919297d8121d5d5d262dd0074dd2e1516e5158b084c93c037a2a0db65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277634f919297d8121d5d5d262dd0074dd2e1516e5158b084c93c037a2a0db65->enter($__internal_277634f919297d8121d5d5d262dd0074dd2e1516e5158b084c93c037a2a0db65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5335cfd704f2b15581af53704799f2b92e7f2ba5afb6bb8c5c62223f7c72fad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5335cfd704f2b15581af53704799f2b92e7f2ba5afb6bb8c5c62223f7c72fad1->enter($__internal_5335cfd704f2b15581af53704799f2b92e7f2ba5afb6bb8c5c62223f7c72fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">";
        
        $__internal_5335cfd704f2b15581af53704799f2b92e7f2ba5afb6bb8c5c62223f7c72fad1->leave($__internal_5335cfd704f2b15581af53704799f2b92e7f2ba5afb6bb8c5c62223f7c72fad1_prof);

        
        $__internal_277634f919297d8121d5d5d262dd0074dd2e1516e5158b084c93c037a2a0db65->leave($__internal_277634f919297d8121d5d5d262dd0074dd2e1516e5158b084c93c037a2a0db65_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_803177da73a2ffe516ef24543ef365c80dcef97639564238dfdaeb12bddf8420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803177da73a2ffe516ef24543ef365c80dcef97639564238dfdaeb12bddf8420->enter($__internal_803177da73a2ffe516ef24543ef365c80dcef97639564238dfdaeb12bddf8420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd8cde53d1cf15790190c4576d7a68cb49a25dbd65d798e16c775655c510cae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8cde53d1cf15790190c4576d7a68cb49a25dbd65d798e16c775655c510cae6->enter($__internal_fd8cde53d1cf15790190c4576d7a68cb49a25dbd65d798e16c775655c510cae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"ban\">
        <h1>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messages.goodmorning", array(), "messages");
        echo "</h1>
    </div>

    <a href=\"http://www.symfony-challenge.dev\">International</a>

    <h2>Francais</h2>
    <ul>
        <li><a href=\"http://france.symfony-challenge.dev\">fr-FR</a></li>
        <li><a href=\"http://belgique.symfony-challenge.dev\">fr-BE</a></li>
        <li><a href=\"http://luxembourg.symfony-challenge.dev\">fr-LU</a></li>
        <li><a href=\"http://suisse.symfony-challenge.dev\">fr-CH</a></li>
    </ul>

    <h2>English</h2>
    <ul>
        <li><a href=\"http://united-kingdom.symfony-challenge.dev\">en-GB</a></li>
        <li><a href=\"http://australia.symfony-challenge.dev\">en-AU</a></li>
        <li><a href=\"http://united-states.symfony-challenge.dev\">en-US</a></li>
        <li><a href=\"http://new-zealand.symfony-challenge.dev\">en-NZ</a></li>
        <li><a href=\"http://ireland.symfony-challenge.dev\">en-IE</a></li>
        <li><a href=\"http://canada.symfony-challenge.dev\">en-CA</a></li>
    </ul>

    <h2>Deutsch</h2>
    <ul>
        <li><a href=\"http://deutschland.symfony-challenge.dev\">de-DE</a></li>
        <li><a href=\"http://schweiz.symfony-challenge.dev\">de-CH</a></li>
        <li><a href=\"http://osterreich.symfony-challenge.dev\">de-AT</a></li>

    </ul>

    <h2>Nederlands</h2>
    <ul>
        <li><a href=\"http://nederland.symfony-challenge.dev\">nl-NL</a></li>
        <li><a href=\"http://belgie.symfony-challenge.dev\">nl-BE</a></li>
    </ul>

";
        
        $__internal_fd8cde53d1cf15790190c4576d7a68cb49a25dbd65d798e16c775655c510cae6->leave($__internal_fd8cde53d1cf15790190c4576d7a68cb49a25dbd65d798e16c775655c510cae6_prof);

        
        $__internal_803177da73a2ffe516ef24543ef365c80dcef97639564238dfdaeb12bddf8420->leave($__internal_803177da73a2ffe516ef24543ef365c80dcef97639564238dfdaeb12bddf8420_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_040f590dcdbeb71778d8589122248a3a9594db59f55cbd20518b63a1abd3aabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040f590dcdbeb71778d8589122248a3a9594db59f55cbd20518b63a1abd3aabc->enter($__internal_040f590dcdbeb71778d8589122248a3a9594db59f55cbd20518b63a1abd3aabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1d3f2d190927e8ba6ccc80599a099e550defe39da5b4a71d387ea87e8c4eaadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3f2d190927e8ba6ccc80599a099e550defe39da5b4a71d387ea87e8c4eaadb->enter($__internal_1d3f2d190927e8ba6ccc80599a099e550defe39da5b4a71d387ea87e8c4eaadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d3f2d190927e8ba6ccc80599a099e550defe39da5b4a71d387ea87e8c4eaadb->leave($__internal_1d3f2d190927e8ba6ccc80599a099e550defe39da5b4a71d387ea87e8c4eaadb_prof);

        
        $__internal_040f590dcdbeb71778d8589122248a3a9594db59f55cbd20518b63a1abd3aabc->leave($__internal_040f590dcdbeb71778d8589122248a3a9594db59f55cbd20518b63a1abd3aabc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  114 => 12,  110 => 10,  101 => 9,  83 => 6,  65 => 5,  52 => 51,  50 => 50,  48 => 9,  44 => 7,  42 => 6,  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{languageData}}\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">{% endblock %}
</head>
<body>
{% block body %}

    <div class=\"ban\">
        <h1>{% trans from \"messages\" %}messages.goodmorning{% endtrans %}</h1>
    </div>

    <a href=\"http://www.symfony-challenge.dev\">International</a>

    <h2>Francais</h2>
    <ul>
        <li><a href=\"http://france.symfony-challenge.dev\">fr-FR</a></li>
        <li><a href=\"http://belgique.symfony-challenge.dev\">fr-BE</a></li>
        <li><a href=\"http://luxembourg.symfony-challenge.dev\">fr-LU</a></li>
        <li><a href=\"http://suisse.symfony-challenge.dev\">fr-CH</a></li>
    </ul>

    <h2>English</h2>
    <ul>
        <li><a href=\"http://united-kingdom.symfony-challenge.dev\">en-GB</a></li>
        <li><a href=\"http://australia.symfony-challenge.dev\">en-AU</a></li>
        <li><a href=\"http://united-states.symfony-challenge.dev\">en-US</a></li>
        <li><a href=\"http://new-zealand.symfony-challenge.dev\">en-NZ</a></li>
        <li><a href=\"http://ireland.symfony-challenge.dev\">en-IE</a></li>
        <li><a href=\"http://canada.symfony-challenge.dev\">en-CA</a></li>
    </ul>

    <h2>Deutsch</h2>
    <ul>
        <li><a href=\"http://deutschland.symfony-challenge.dev\">de-DE</a></li>
        <li><a href=\"http://schweiz.symfony-challenge.dev\">de-CH</a></li>
        <li><a href=\"http://osterreich.symfony-challenge.dev\">de-AT</a></li>

    </ul>

    <h2>Nederlands</h2>
    <ul>
        <li><a href=\"http://nederland.symfony-challenge.dev\">nl-NL</a></li>
        <li><a href=\"http://belgie.symfony-challenge.dev\">nl-BE</a></li>
    </ul>

{% endblock %}
{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/templates/base.html.twig");
    }
}

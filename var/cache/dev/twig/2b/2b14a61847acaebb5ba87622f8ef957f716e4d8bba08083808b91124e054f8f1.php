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
        $__internal_1ffdb7fb14e13e43698d9d13fff9643bd73944ab7ae9df9e30840bb3132d5740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffdb7fb14e13e43698d9d13fff9643bd73944ab7ae9df9e30840bb3132d5740->enter($__internal_1ffdb7fb14e13e43698d9d13fff9643bd73944ab7ae9df9e30840bb3132d5740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3cdd9ca4069e1f2fecad8f35521f062991ce5c6c988c4262bae7374b2b18122c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdd9ca4069e1f2fecad8f35521f062991ce5c6c988c4262bae7374b2b18122c->enter($__internal_3cdd9ca4069e1f2fecad8f35521f062991ce5c6c988c4262bae7374b2b18122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "
</body>
</html>
";
        
        $__internal_1ffdb7fb14e13e43698d9d13fff9643bd73944ab7ae9df9e30840bb3132d5740->leave($__internal_1ffdb7fb14e13e43698d9d13fff9643bd73944ab7ae9df9e30840bb3132d5740_prof);

        
        $__internal_3cdd9ca4069e1f2fecad8f35521f062991ce5c6c988c4262bae7374b2b18122c->leave($__internal_3cdd9ca4069e1f2fecad8f35521f062991ce5c6c988c4262bae7374b2b18122c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8373cb7c522d4272add34c5d8f7553829617f6b56f5222e3b2a2292b21ef955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8373cb7c522d4272add34c5d8f7553829617f6b56f5222e3b2a2292b21ef955->enter($__internal_b8373cb7c522d4272add34c5d8f7553829617f6b56f5222e3b2a2292b21ef955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9266f1615c449b49db9173668050b178d2a50681985cbe85c18af5423008cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9266f1615c449b49db9173668050b178d2a50681985cbe85c18af5423008cc4->enter($__internal_a9266f1615c449b49db9173668050b178d2a50681985cbe85c18af5423008cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a9266f1615c449b49db9173668050b178d2a50681985cbe85c18af5423008cc4->leave($__internal_a9266f1615c449b49db9173668050b178d2a50681985cbe85c18af5423008cc4_prof);

        
        $__internal_b8373cb7c522d4272add34c5d8f7553829617f6b56f5222e3b2a2292b21ef955->leave($__internal_b8373cb7c522d4272add34c5d8f7553829617f6b56f5222e3b2a2292b21ef955_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0891ba1347599ae0c720d5de01b1773fde63c594ac79825b7d9801969b062d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0891ba1347599ae0c720d5de01b1773fde63c594ac79825b7d9801969b062d81->enter($__internal_0891ba1347599ae0c720d5de01b1773fde63c594ac79825b7d9801969b062d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e513c3687fc3dc466ad9b5ae20ed9e28bc8a7bfbeb969e7c131880cbb7663c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e513c3687fc3dc466ad9b5ae20ed9e28bc8a7bfbeb969e7c131880cbb7663c3->enter($__internal_1e513c3687fc3dc466ad9b5ae20ed9e28bc8a7bfbeb969e7c131880cbb7663c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">";
        
        $__internal_1e513c3687fc3dc466ad9b5ae20ed9e28bc8a7bfbeb969e7c131880cbb7663c3->leave($__internal_1e513c3687fc3dc466ad9b5ae20ed9e28bc8a7bfbeb969e7c131880cbb7663c3_prof);

        
        $__internal_0891ba1347599ae0c720d5de01b1773fde63c594ac79825b7d9801969b062d81->leave($__internal_0891ba1347599ae0c720d5de01b1773fde63c594ac79825b7d9801969b062d81_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d0b32a0ec534c5cb2212a3ab8e0b3931d1386e5486e9841df1eb4b69d70ecab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0b32a0ec534c5cb2212a3ab8e0b3931d1386e5486e9841df1eb4b69d70ecab->enter($__internal_1d0b32a0ec534c5cb2212a3ab8e0b3931d1386e5486e9841df1eb4b69d70ecab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afc201a585267d17cfb8c74e7273b1d8443cb26001ceeb68f02160d60d8c4bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc201a585267d17cfb8c74e7273b1d8443cb26001ceeb68f02160d60d8c4bae->enter($__internal_afc201a585267d17cfb8c74e7273b1d8443cb26001ceeb68f02160d60d8c4bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"ban\">
        <h1>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messages.goodmorning", array(), "messages");
        echo "</h1>
    </div>
    <div class=\"content\">
        <a href=\"http://www.symfony-challenge.dev\">International</a>
        <br>
        <br>

        <table>
            <tr>
                <th>Francais</th>
                <th>English</th>
                <th>Deutsch</th>
                <th>Nederlands</th>
            </tr>

            <tr>
                <td><a href=\"http://france.symfony-challenge.dev\">fr-FR</a></td>
                <td><a href=\"http://united-kingdom.symfony-challenge.dev\">en-GB</a></td>
                <td><a href=\"http://deutschland.symfony-challenge.dev\">de-DE</a></td>
                <td><a href=\"http://nederland.symfony-challenge.dev\">nl-NL</a></td>
            </tr>
            <tr>
                <td><a href=\"http://belgique.symfony-challenge.dev\">fr-BE</a></td>
                <td><a href=\"http://australia.symfony-challenge.dev\">en-AU</a></td>
                <td><a href=\"http://schweiz.symfony-challenge.dev\">de-CH</a></td>
                <td><a href=\"http://belgie.symfony-challenge.dev\">nl-BE</a></td>

            </tr>

            <tr>
                <td><a href=\"http://luxembourg.symfony-challenge.dev\">fr-LU</a></td>
                <td><a href=\"http://united-states.symfony-challenge.dev\">en-US</a></td>
                <td><a href=\"http://osterreich.symfony-challenge.dev\">de-AT</a></td>
                <td></td>
            </tr>

            <tr>
                <td><a href=\"http://suisse.symfony-challenge.dev\">fr-CH</a></td>
                <td><a href=\"http://new-zealand.symfony-challenge.dev\">en-NZ</a></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td><a href=\"http://ireland.symfony-challenge.dev\">en-IE</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><a href=\"http://canada.symfony-challenge.dev\">en-CA</a></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>


";
        
        $__internal_afc201a585267d17cfb8c74e7273b1d8443cb26001ceeb68f02160d60d8c4bae->leave($__internal_afc201a585267d17cfb8c74e7273b1d8443cb26001ceeb68f02160d60d8c4bae_prof);

        
        $__internal_1d0b32a0ec534c5cb2212a3ab8e0b3931d1386e5486e9841df1eb4b69d70ecab->leave($__internal_1d0b32a0ec534c5cb2212a3ab8e0b3931d1386e5486e9841df1eb4b69d70ecab_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5a3306f2f483d437e07dff8dbb76624df71fae6f36f3dc7bab72d850b60ebe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a3306f2f483d437e07dff8dbb76624df71fae6f36f3dc7bab72d850b60ebe7->enter($__internal_e5a3306f2f483d437e07dff8dbb76624df71fae6f36f3dc7bab72d850b60ebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4783b48d65049d804e78cbf1277ea003430843dba700dc8e7fb09e1a166e7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4783b48d65049d804e78cbf1277ea003430843dba700dc8e7fb09e1a166e7eb->enter($__internal_d4783b48d65049d804e78cbf1277ea003430843dba700dc8e7fb09e1a166e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4783b48d65049d804e78cbf1277ea003430843dba700dc8e7fb09e1a166e7eb->leave($__internal_d4783b48d65049d804e78cbf1277ea003430843dba700dc8e7fb09e1a166e7eb_prof);

        
        $__internal_e5a3306f2f483d437e07dff8dbb76624df71fae6f36f3dc7bab72d850b60ebe7->leave($__internal_e5a3306f2f483d437e07dff8dbb76624df71fae6f36f3dc7bab72d850b60ebe7_prof);

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
        return array (  185 => 73,  114 => 12,  110 => 10,  101 => 9,  83 => 6,  65 => 5,  52 => 74,  50 => 73,  48 => 9,  44 => 7,  42 => 6,  38 => 5,  32 => 2,  29 => 1,);
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
    <div class=\"content\">
        <a href=\"http://www.symfony-challenge.dev\">International</a>
        <br>
        <br>

        <table>
            <tr>
                <th>Francais</th>
                <th>English</th>
                <th>Deutsch</th>
                <th>Nederlands</th>
            </tr>

            <tr>
                <td><a href=\"http://france.symfony-challenge.dev\">fr-FR</a></td>
                <td><a href=\"http://united-kingdom.symfony-challenge.dev\">en-GB</a></td>
                <td><a href=\"http://deutschland.symfony-challenge.dev\">de-DE</a></td>
                <td><a href=\"http://nederland.symfony-challenge.dev\">nl-NL</a></td>
            </tr>
            <tr>
                <td><a href=\"http://belgique.symfony-challenge.dev\">fr-BE</a></td>
                <td><a href=\"http://australia.symfony-challenge.dev\">en-AU</a></td>
                <td><a href=\"http://schweiz.symfony-challenge.dev\">de-CH</a></td>
                <td><a href=\"http://belgie.symfony-challenge.dev\">nl-BE</a></td>

            </tr>

            <tr>
                <td><a href=\"http://luxembourg.symfony-challenge.dev\">fr-LU</a></td>
                <td><a href=\"http://united-states.symfony-challenge.dev\">en-US</a></td>
                <td><a href=\"http://osterreich.symfony-challenge.dev\">de-AT</a></td>
                <td></td>
            </tr>

            <tr>
                <td><a href=\"http://suisse.symfony-challenge.dev\">fr-CH</a></td>
                <td><a href=\"http://new-zealand.symfony-challenge.dev\">en-NZ</a></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td><a href=\"http://ireland.symfony-challenge.dev\">en-IE</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><a href=\"http://canada.symfony-challenge.dev\">en-CA</a></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>


{% endblock %}
{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/templates/base.html.twig");
    }
}

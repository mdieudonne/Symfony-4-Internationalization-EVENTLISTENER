<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a9f0cd4069c782ef6b848909bebb9b8fa15f9ea62a53c085f8e28cea8be05659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5afc56279ea8ba2d3915f2f2acf2341cf1e36a926675571d333a202561a23d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afc56279ea8ba2d3915f2f2acf2341cf1e36a926675571d333a202561a23d50->enter($__internal_5afc56279ea8ba2d3915f2f2acf2341cf1e36a926675571d333a202561a23d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_58b643750a991aa3abc7d5a7d5416f6ad7af3aa22b676d2cd083b0213defb04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b643750a991aa3abc7d5a7d5416f6ad7af3aa22b676d2cd083b0213defb04a->enter($__internal_58b643750a991aa3abc7d5a7d5416f6ad7af3aa22b676d2cd083b0213defb04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5afc56279ea8ba2d3915f2f2acf2341cf1e36a926675571d333a202561a23d50->leave($__internal_5afc56279ea8ba2d3915f2f2acf2341cf1e36a926675571d333a202561a23d50_prof);

        
        $__internal_58b643750a991aa3abc7d5a7d5416f6ad7af3aa22b676d2cd083b0213defb04a->leave($__internal_58b643750a991aa3abc7d5a7d5416f6ad7af3aa22b676d2cd083b0213defb04a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c683a50f8c95b81ba37306d5b8a30c6d442e9e2683f8bf636722d6d13b221cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c683a50f8c95b81ba37306d5b8a30c6d442e9e2683f8bf636722d6d13b221cb->enter($__internal_0c683a50f8c95b81ba37306d5b8a30c6d442e9e2683f8bf636722d6d13b221cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f66c2d62dc5dd1c16a03841b3bf8125279664e7bf40afe1d44162d730a72df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66c2d62dc5dd1c16a03841b3bf8125279664e7bf40afe1d44162d730a72df53->enter($__internal_f66c2d62dc5dd1c16a03841b3bf8125279664e7bf40afe1d44162d730a72df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f66c2d62dc5dd1c16a03841b3bf8125279664e7bf40afe1d44162d730a72df53->leave($__internal_f66c2d62dc5dd1c16a03841b3bf8125279664e7bf40afe1d44162d730a72df53_prof);

        
        $__internal_0c683a50f8c95b81ba37306d5b8a30c6d442e9e2683f8bf636722d6d13b221cb->leave($__internal_0c683a50f8c95b81ba37306d5b8a30c6d442e9e2683f8bf636722d6d13b221cb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c783d7fbe84e0a529947d1b6128c5802f627c10c530a2a7f4da14a73db9b6992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c783d7fbe84e0a529947d1b6128c5802f627c10c530a2a7f4da14a73db9b6992->enter($__internal_c783d7fbe84e0a529947d1b6128c5802f627c10c530a2a7f4da14a73db9b6992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9d3ce74db9df07f9712844215f9cdcd0fb0ddd636d0dd96d02dc175a1b5810c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d3ce74db9df07f9712844215f9cdcd0fb0ddd636d0dd96d02dc175a1b5810c->enter($__internal_e9d3ce74db9df07f9712844215f9cdcd0fb0ddd636d0dd96d02dc175a1b5810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e9d3ce74db9df07f9712844215f9cdcd0fb0ddd636d0dd96d02dc175a1b5810c->leave($__internal_e9d3ce74db9df07f9712844215f9cdcd0fb0ddd636d0dd96d02dc175a1b5810c_prof);

        
        $__internal_c783d7fbe84e0a529947d1b6128c5802f627c10c530a2a7f4da14a73db9b6992->leave($__internal_c783d7fbe84e0a529947d1b6128c5802f627c10c530a2a7f4da14a73db9b6992_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_836332eaa81437569103c329fd30b50e9c818bdf3069d3ca9735db52df66cbde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836332eaa81437569103c329fd30b50e9c818bdf3069d3ca9735db52df66cbde->enter($__internal_836332eaa81437569103c329fd30b50e9c818bdf3069d3ca9735db52df66cbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_514a1249ef5f1aa09709588808c372a6f74d18217ce854ca4d2c79a4999730ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514a1249ef5f1aa09709588808c372a6f74d18217ce854ca4d2c79a4999730ac->enter($__internal_514a1249ef5f1aa09709588808c372a6f74d18217ce854ca4d2c79a4999730ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_514a1249ef5f1aa09709588808c372a6f74d18217ce854ca4d2c79a4999730ac->leave($__internal_514a1249ef5f1aa09709588808c372a6f74d18217ce854ca4d2c79a4999730ac_prof);

        
        $__internal_836332eaa81437569103c329fd30b50e9c818bdf3069d3ca9735db52df66cbde->leave($__internal_836332eaa81437569103c329fd30b50e9c818bdf3069d3ca9735db52df66cbde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}

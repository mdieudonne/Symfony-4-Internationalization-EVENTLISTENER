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
        $__internal_7435c12eb12fd157c4b41a7b8fd19f600fab78efa4c8d2bca881475056cbf699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7435c12eb12fd157c4b41a7b8fd19f600fab78efa4c8d2bca881475056cbf699->enter($__internal_7435c12eb12fd157c4b41a7b8fd19f600fab78efa4c8d2bca881475056cbf699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ad42ee0d858af73feb3b036128dead122ccba829c7cff565edb6fc767b250baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad42ee0d858af73feb3b036128dead122ccba829c7cff565edb6fc767b250baf->enter($__internal_ad42ee0d858af73feb3b036128dead122ccba829c7cff565edb6fc767b250baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7435c12eb12fd157c4b41a7b8fd19f600fab78efa4c8d2bca881475056cbf699->leave($__internal_7435c12eb12fd157c4b41a7b8fd19f600fab78efa4c8d2bca881475056cbf699_prof);

        
        $__internal_ad42ee0d858af73feb3b036128dead122ccba829c7cff565edb6fc767b250baf->leave($__internal_ad42ee0d858af73feb3b036128dead122ccba829c7cff565edb6fc767b250baf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d67cc93a476ff78a2e0d45ea961a9c0a83d8ed81b7f495c5ee8a880e7872495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d67cc93a476ff78a2e0d45ea961a9c0a83d8ed81b7f495c5ee8a880e7872495->enter($__internal_4d67cc93a476ff78a2e0d45ea961a9c0a83d8ed81b7f495c5ee8a880e7872495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1074b6307614e8f3d4003ea1d1b35016d45c2cce3d87912a314fa1032ca59a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1074b6307614e8f3d4003ea1d1b35016d45c2cce3d87912a314fa1032ca59a1b->enter($__internal_1074b6307614e8f3d4003ea1d1b35016d45c2cce3d87912a314fa1032ca59a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1074b6307614e8f3d4003ea1d1b35016d45c2cce3d87912a314fa1032ca59a1b->leave($__internal_1074b6307614e8f3d4003ea1d1b35016d45c2cce3d87912a314fa1032ca59a1b_prof);

        
        $__internal_4d67cc93a476ff78a2e0d45ea961a9c0a83d8ed81b7f495c5ee8a880e7872495->leave($__internal_4d67cc93a476ff78a2e0d45ea961a9c0a83d8ed81b7f495c5ee8a880e7872495_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d21090597880cdf651539348e14450e7814f142e5668502d81f9a9bc655d227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d21090597880cdf651539348e14450e7814f142e5668502d81f9a9bc655d227->enter($__internal_6d21090597880cdf651539348e14450e7814f142e5668502d81f9a9bc655d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4bc86374dc483b2e305e9a45ba0390ff0c70a1c6f6e1a9c6bf89910e3338ff61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc86374dc483b2e305e9a45ba0390ff0c70a1c6f6e1a9c6bf89910e3338ff61->enter($__internal_4bc86374dc483b2e305e9a45ba0390ff0c70a1c6f6e1a9c6bf89910e3338ff61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4bc86374dc483b2e305e9a45ba0390ff0c70a1c6f6e1a9c6bf89910e3338ff61->leave($__internal_4bc86374dc483b2e305e9a45ba0390ff0c70a1c6f6e1a9c6bf89910e3338ff61_prof);

        
        $__internal_6d21090597880cdf651539348e14450e7814f142e5668502d81f9a9bc655d227->leave($__internal_6d21090597880cdf651539348e14450e7814f142e5668502d81f9a9bc655d227_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e19ce96caca3ce02baea362d4649dd40746b419b9aedbd1297af2e056acd4d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19ce96caca3ce02baea362d4649dd40746b419b9aedbd1297af2e056acd4d1f->enter($__internal_e19ce96caca3ce02baea362d4649dd40746b419b9aedbd1297af2e056acd4d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a533f29972c45f4af5d2800c10600ced3b049ca5cd136e530c11a39db784693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a533f29972c45f4af5d2800c10600ced3b049ca5cd136e530c11a39db784693->enter($__internal_3a533f29972c45f4af5d2800c10600ced3b049ca5cd136e530c11a39db784693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3a533f29972c45f4af5d2800c10600ced3b049ca5cd136e530c11a39db784693->leave($__internal_3a533f29972c45f4af5d2800c10600ced3b049ca5cd136e530c11a39db784693_prof);

        
        $__internal_e19ce96caca3ce02baea362d4649dd40746b419b9aedbd1297af2e056acd4d1f->leave($__internal_e19ce96caca3ce02baea362d4649dd40746b419b9aedbd1297af2e056acd4d1f_prof);

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

<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4a2433472da15207c1b55ed571231df2dcd4ca1cdc36ef1596a515d295434268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_170cf0f6978f7cf767a76db383b611c0d5d3fa998d5dbe3998f91a788d055d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170cf0f6978f7cf767a76db383b611c0d5d3fa998d5dbe3998f91a788d055d5d->enter($__internal_170cf0f6978f7cf767a76db383b611c0d5d3fa998d5dbe3998f91a788d055d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_09946de181a8ece684d383b62e772e740ad888f0bdfb1192dbdd59afdbca9c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09946de181a8ece684d383b62e772e740ad888f0bdfb1192dbdd59afdbca9c05->enter($__internal_09946de181a8ece684d383b62e772e740ad888f0bdfb1192dbdd59afdbca9c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_170cf0f6978f7cf767a76db383b611c0d5d3fa998d5dbe3998f91a788d055d5d->leave($__internal_170cf0f6978f7cf767a76db383b611c0d5d3fa998d5dbe3998f91a788d055d5d_prof);

        
        $__internal_09946de181a8ece684d383b62e772e740ad888f0bdfb1192dbdd59afdbca9c05->leave($__internal_09946de181a8ece684d383b62e772e740ad888f0bdfb1192dbdd59afdbca9c05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
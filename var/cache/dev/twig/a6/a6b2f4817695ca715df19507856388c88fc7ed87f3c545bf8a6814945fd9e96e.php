<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_957ab8cfbae58dc04666902bcc6faf86ada9aa136edf019e20662df028b5c55a extends Twig_Template
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
        $__internal_f8591f3b9e2b2b1f2c6c222100648d446cdba63c7419e3fc64354efc98c09a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8591f3b9e2b2b1f2c6c222100648d446cdba63c7419e3fc64354efc98c09a02->enter($__internal_f8591f3b9e2b2b1f2c6c222100648d446cdba63c7419e3fc64354efc98c09a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c71c018835f098dff29c6983c00f1dadd6c079c75cb286c1bbdd49a67606d94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71c018835f098dff29c6983c00f1dadd6c079c75cb286c1bbdd49a67606d94a->enter($__internal_c71c018835f098dff29c6983c00f1dadd6c079c75cb286c1bbdd49a67606d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f8591f3b9e2b2b1f2c6c222100648d446cdba63c7419e3fc64354efc98c09a02->leave($__internal_f8591f3b9e2b2b1f2c6c222100648d446cdba63c7419e3fc64354efc98c09a02_prof);

        
        $__internal_c71c018835f098dff29c6983c00f1dadd6c079c75cb286c1bbdd49a67606d94a->leave($__internal_c71c018835f098dff29c6983c00f1dadd6c079c75cb286c1bbdd49a67606d94a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}

<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94a67e0a3e5bb0a739876a506923b15f58cd529558c3638b96ba8bea64491029 extends Twig_Template
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
        $__internal_f37f319d31b3de31eb0390eb54ef676898cab8db408126ae906e63f0eadebf55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37f319d31b3de31eb0390eb54ef676898cab8db408126ae906e63f0eadebf55->enter($__internal_f37f319d31b3de31eb0390eb54ef676898cab8db408126ae906e63f0eadebf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_091940e4cc50814c57d8d161c270fc8bf4774ac0ed6eb1f800c7f16ae6311a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091940e4cc50814c57d8d161c270fc8bf4774ac0ed6eb1f800c7f16ae6311a72->enter($__internal_091940e4cc50814c57d8d161c270fc8bf4774ac0ed6eb1f800c7f16ae6311a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f37f319d31b3de31eb0390eb54ef676898cab8db408126ae906e63f0eadebf55->leave($__internal_f37f319d31b3de31eb0390eb54ef676898cab8db408126ae906e63f0eadebf55_prof);

        
        $__internal_091940e4cc50814c57d8d161c270fc8bf4774ac0ed6eb1f800c7f16ae6311a72->leave($__internal_091940e4cc50814c57d8d161c270fc8bf4774ac0ed6eb1f800c7f16ae6311a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}

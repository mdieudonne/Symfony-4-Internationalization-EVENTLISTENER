<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_423c3a8987e2c468488fa98b2fddbe3a5e8e1d6b9c537ab4fdf042337cff450f extends Twig_Template
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
        $__internal_4e0d897aaeb246f0f5e9cc3ac28ae3989c556f1f00dd70c85a4654a93ffadb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0d897aaeb246f0f5e9cc3ac28ae3989c556f1f00dd70c85a4654a93ffadb09->enter($__internal_4e0d897aaeb246f0f5e9cc3ac28ae3989c556f1f00dd70c85a4654a93ffadb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_926c4e62dfdec92d45685ba2d0313687652c4f7582844c57cf4e20d92e2a0981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926c4e62dfdec92d45685ba2d0313687652c4f7582844c57cf4e20d92e2a0981->enter($__internal_926c4e62dfdec92d45685ba2d0313687652c4f7582844c57cf4e20d92e2a0981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4e0d897aaeb246f0f5e9cc3ac28ae3989c556f1f00dd70c85a4654a93ffadb09->leave($__internal_4e0d897aaeb246f0f5e9cc3ac28ae3989c556f1f00dd70c85a4654a93ffadb09_prof);

        
        $__internal_926c4e62dfdec92d45685ba2d0313687652c4f7582844c57cf4e20d92e2a0981->leave($__internal_926c4e62dfdec92d45685ba2d0313687652c4f7582844c57cf4e20d92e2a0981_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}

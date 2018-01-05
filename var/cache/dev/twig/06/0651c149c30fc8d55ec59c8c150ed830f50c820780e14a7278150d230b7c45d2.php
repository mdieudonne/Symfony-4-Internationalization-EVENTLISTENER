<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_047592ea709d77d832140b968fbabab24b85d38a629e0c17a54b32dd9e085f15 extends Twig_Template
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
        $__internal_b9ecdfe4b17b10b31138f2bb2e81a477bbb1a0fa5a79d30b91278a20c1bba398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ecdfe4b17b10b31138f2bb2e81a477bbb1a0fa5a79d30b91278a20c1bba398->enter($__internal_b9ecdfe4b17b10b31138f2bb2e81a477bbb1a0fa5a79d30b91278a20c1bba398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0492721ce21dd40b8659cff94de0328fa12b65ecaa5bc21cb5fe3292af0a9759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0492721ce21dd40b8659cff94de0328fa12b65ecaa5bc21cb5fe3292af0a9759->enter($__internal_0492721ce21dd40b8659cff94de0328fa12b65ecaa5bc21cb5fe3292af0a9759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b9ecdfe4b17b10b31138f2bb2e81a477bbb1a0fa5a79d30b91278a20c1bba398->leave($__internal_b9ecdfe4b17b10b31138f2bb2e81a477bbb1a0fa5a79d30b91278a20c1bba398_prof);

        
        $__internal_0492721ce21dd40b8659cff94de0328fa12b65ecaa5bc21cb5fe3292af0a9759->leave($__internal_0492721ce21dd40b8659cff94de0328fa12b65ecaa5bc21cb5fe3292af0a9759_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}

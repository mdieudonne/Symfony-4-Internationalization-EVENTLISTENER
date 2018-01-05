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
        $__internal_c6bdf0ae0bd3e5dc5c28cc6c855692975c003905b709f4367997ea840e6893f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bdf0ae0bd3e5dc5c28cc6c855692975c003905b709f4367997ea840e6893f4->enter($__internal_c6bdf0ae0bd3e5dc5c28cc6c855692975c003905b709f4367997ea840e6893f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_43a5e61855842c9afaeff5f64278e614227045b172eb94bae7e80e691df51357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a5e61855842c9afaeff5f64278e614227045b172eb94bae7e80e691df51357->enter($__internal_43a5e61855842c9afaeff5f64278e614227045b172eb94bae7e80e691df51357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c6bdf0ae0bd3e5dc5c28cc6c855692975c003905b709f4367997ea840e6893f4->leave($__internal_c6bdf0ae0bd3e5dc5c28cc6c855692975c003905b709f4367997ea840e6893f4_prof);

        
        $__internal_43a5e61855842c9afaeff5f64278e614227045b172eb94bae7e80e691df51357->leave($__internal_43a5e61855842c9afaeff5f64278e614227045b172eb94bae7e80e691df51357_prof);

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

<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b798b501f9b67c2698bc471e43112029054429a533d9c2ab6c87aed397dc520b extends Twig_Template
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
        $__internal_f5a1031f9f468a3faf0efb4f55d1bed6abfe4af1965fdd439a5e4bb0d3b2d111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a1031f9f468a3faf0efb4f55d1bed6abfe4af1965fdd439a5e4bb0d3b2d111->enter($__internal_f5a1031f9f468a3faf0efb4f55d1bed6abfe4af1965fdd439a5e4bb0d3b2d111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_460a7bb913c2bb78b96900648b50a3b1141441b73908e3e1d933d6c768aa05ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460a7bb913c2bb78b96900648b50a3b1141441b73908e3e1d933d6c768aa05ba->enter($__internal_460a7bb913c2bb78b96900648b50a3b1141441b73908e3e1d933d6c768aa05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f5a1031f9f468a3faf0efb4f55d1bed6abfe4af1965fdd439a5e4bb0d3b2d111->leave($__internal_f5a1031f9f468a3faf0efb4f55d1bed6abfe4af1965fdd439a5e4bb0d3b2d111_prof);

        
        $__internal_460a7bb913c2bb78b96900648b50a3b1141441b73908e3e1d933d6c768aa05ba->leave($__internal_460a7bb913c2bb78b96900648b50a3b1141441b73908e3e1d933d6c768aa05ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

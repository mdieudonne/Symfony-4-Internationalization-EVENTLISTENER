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
        $__internal_06a0fbc1fca3b09ba256adbba3b2af7e7fdf16ba4b860b35b84479d50e520c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a0fbc1fca3b09ba256adbba3b2af7e7fdf16ba4b860b35b84479d50e520c81->enter($__internal_06a0fbc1fca3b09ba256adbba3b2af7e7fdf16ba4b860b35b84479d50e520c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b3e31fa822b9f0ee52626ab6b6dbd497fad1e23f6fc46219b4f33f9516ab61ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e31fa822b9f0ee52626ab6b6dbd497fad1e23f6fc46219b4f33f9516ab61ac->enter($__internal_b3e31fa822b9f0ee52626ab6b6dbd497fad1e23f6fc46219b4f33f9516ab61ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_06a0fbc1fca3b09ba256adbba3b2af7e7fdf16ba4b860b35b84479d50e520c81->leave($__internal_06a0fbc1fca3b09ba256adbba3b2af7e7fdf16ba4b860b35b84479d50e520c81_prof);

        
        $__internal_b3e31fa822b9f0ee52626ab6b6dbd497fad1e23f6fc46219b4f33f9516ab61ac->leave($__internal_b3e31fa822b9f0ee52626ab6b6dbd497fad1e23f6fc46219b4f33f9516ab61ac_prof);

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

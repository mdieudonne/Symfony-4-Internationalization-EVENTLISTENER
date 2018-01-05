<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f39734932829ea31064d3be3a5641661c1ca07f927fc7c8c6782bfd74bbdfa19 extends Twig_Template
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
        $__internal_2af38f4c1959e5f64644e8b593371610363f7982e5623a77b3c4279d197852f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af38f4c1959e5f64644e8b593371610363f7982e5623a77b3c4279d197852f7->enter($__internal_2af38f4c1959e5f64644e8b593371610363f7982e5623a77b3c4279d197852f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3ac96b4ce0d0f42bfa58d49e0d38fe0da93773e7d6eb5c2e6bd327b20451c54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac96b4ce0d0f42bfa58d49e0d38fe0da93773e7d6eb5c2e6bd327b20451c54a->enter($__internal_3ac96b4ce0d0f42bfa58d49e0d38fe0da93773e7d6eb5c2e6bd327b20451c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2af38f4c1959e5f64644e8b593371610363f7982e5623a77b3c4279d197852f7->leave($__internal_2af38f4c1959e5f64644e8b593371610363f7982e5623a77b3c4279d197852f7_prof);

        
        $__internal_3ac96b4ce0d0f42bfa58d49e0d38fe0da93773e7d6eb5c2e6bd327b20451c54a->leave($__internal_3ac96b4ce0d0f42bfa58d49e0d38fe0da93773e7d6eb5c2e6bd327b20451c54a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}

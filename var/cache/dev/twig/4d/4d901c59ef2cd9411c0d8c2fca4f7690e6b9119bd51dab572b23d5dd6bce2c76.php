<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_53683051294c3a3cab6aa7f35bb313a52437231c63887464f4d1e9b7d4cda750 extends Twig_Template
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
        $__internal_d4958e6e39227db367bd9048e9a221f65d0983762615088dd1a3863650a64065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4958e6e39227db367bd9048e9a221f65d0983762615088dd1a3863650a64065->enter($__internal_d4958e6e39227db367bd9048e9a221f65d0983762615088dd1a3863650a64065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_76c59f4d0b5c244c6b60c6545dbfbafa55becc7fc01ecaa50b33eb4c430c99b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c59f4d0b5c244c6b60c6545dbfbafa55becc7fc01ecaa50b33eb4c430c99b9->enter($__internal_76c59f4d0b5c244c6b60c6545dbfbafa55becc7fc01ecaa50b33eb4c430c99b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d4958e6e39227db367bd9048e9a221f65d0983762615088dd1a3863650a64065->leave($__internal_d4958e6e39227db367bd9048e9a221f65d0983762615088dd1a3863650a64065_prof);

        
        $__internal_76c59f4d0b5c244c6b60c6545dbfbafa55becc7fc01ecaa50b33eb4c430c99b9->leave($__internal_76c59f4d0b5c244c6b60c6545dbfbafa55becc7fc01ecaa50b33eb4c430c99b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}

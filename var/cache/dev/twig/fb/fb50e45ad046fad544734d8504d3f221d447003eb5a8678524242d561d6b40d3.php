<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c91745a6fe41f5205cef2f0523e2f6e54b120e57a1c5c5918400f71d28b6a76a extends Twig_Template
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
        $__internal_7885ffc393314e251a194e08979ceddb88bd8db80dc257b6d3f0bd305c839322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7885ffc393314e251a194e08979ceddb88bd8db80dc257b6d3f0bd305c839322->enter($__internal_7885ffc393314e251a194e08979ceddb88bd8db80dc257b6d3f0bd305c839322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d9d76e46ec4e90d336d13093930adf24e9f11af638c60436b10c968788ecd8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d76e46ec4e90d336d13093930adf24e9f11af638c60436b10c968788ecd8ff->enter($__internal_d9d76e46ec4e90d336d13093930adf24e9f11af638c60436b10c968788ecd8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7885ffc393314e251a194e08979ceddb88bd8db80dc257b6d3f0bd305c839322->leave($__internal_7885ffc393314e251a194e08979ceddb88bd8db80dc257b6d3f0bd305c839322_prof);

        
        $__internal_d9d76e46ec4e90d336d13093930adf24e9f11af638c60436b10c968788ecd8ff->leave($__internal_d9d76e46ec4e90d336d13093930adf24e9f11af638c60436b10c968788ecd8ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}

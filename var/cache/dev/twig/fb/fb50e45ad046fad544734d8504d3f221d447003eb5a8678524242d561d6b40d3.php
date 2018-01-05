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
        $__internal_a73a1bb914eb4dcc3780948b770ec8c076e805d5cc7ddfdee92c7983d9fa9beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73a1bb914eb4dcc3780948b770ec8c076e805d5cc7ddfdee92c7983d9fa9beb->enter($__internal_a73a1bb914eb4dcc3780948b770ec8c076e805d5cc7ddfdee92c7983d9fa9beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cb96080b735f62244f296370645466dc089d9ed0492036901603853baf7616b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb96080b735f62244f296370645466dc089d9ed0492036901603853baf7616b2->enter($__internal_cb96080b735f62244f296370645466dc089d9ed0492036901603853baf7616b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a73a1bb914eb4dcc3780948b770ec8c076e805d5cc7ddfdee92c7983d9fa9beb->leave($__internal_a73a1bb914eb4dcc3780948b770ec8c076e805d5cc7ddfdee92c7983d9fa9beb_prof);

        
        $__internal_cb96080b735f62244f296370645466dc089d9ed0492036901603853baf7616b2->leave($__internal_cb96080b735f62244f296370645466dc089d9ed0492036901603853baf7616b2_prof);

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

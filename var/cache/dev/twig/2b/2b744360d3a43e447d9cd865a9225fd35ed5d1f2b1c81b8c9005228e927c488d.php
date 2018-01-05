<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2ff974ce79d375aa11de5e9ba8056949acc1e9e92236920770d741e461542353 extends Twig_Template
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
        $__internal_3c6591565ef1b104309ec97c0c820cbb7c34c01703b32ddbfb9839852e1a8e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6591565ef1b104309ec97c0c820cbb7c34c01703b32ddbfb9839852e1a8e3c->enter($__internal_3c6591565ef1b104309ec97c0c820cbb7c34c01703b32ddbfb9839852e1a8e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_074534494a926bbfb1f91b28703f7cf6cf2d1f8878b24f31f9aaa5c2d30c187f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074534494a926bbfb1f91b28703f7cf6cf2d1f8878b24f31f9aaa5c2d30c187f->enter($__internal_074534494a926bbfb1f91b28703f7cf6cf2d1f8878b24f31f9aaa5c2d30c187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3c6591565ef1b104309ec97c0c820cbb7c34c01703b32ddbfb9839852e1a8e3c->leave($__internal_3c6591565ef1b104309ec97c0c820cbb7c34c01703b32ddbfb9839852e1a8e3c_prof);

        
        $__internal_074534494a926bbfb1f91b28703f7cf6cf2d1f8878b24f31f9aaa5c2d30c187f->leave($__internal_074534494a926bbfb1f91b28703f7cf6cf2d1f8878b24f31f9aaa5c2d30c187f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}

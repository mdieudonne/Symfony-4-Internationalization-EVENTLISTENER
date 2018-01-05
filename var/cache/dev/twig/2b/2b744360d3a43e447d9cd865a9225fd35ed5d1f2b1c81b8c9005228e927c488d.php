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
        $__internal_4434c9bc708ddb6c3f55bab3677de85c950baa610191122db7e3c2a58f7b4b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4434c9bc708ddb6c3f55bab3677de85c950baa610191122db7e3c2a58f7b4b92->enter($__internal_4434c9bc708ddb6c3f55bab3677de85c950baa610191122db7e3c2a58f7b4b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_67796f49f8c17eea5c4c5d4e780ccd5f12ac6abba96211ec56df580144421b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67796f49f8c17eea5c4c5d4e780ccd5f12ac6abba96211ec56df580144421b7d->enter($__internal_67796f49f8c17eea5c4c5d4e780ccd5f12ac6abba96211ec56df580144421b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4434c9bc708ddb6c3f55bab3677de85c950baa610191122db7e3c2a58f7b4b92->leave($__internal_4434c9bc708ddb6c3f55bab3677de85c950baa610191122db7e3c2a58f7b4b92_prof);

        
        $__internal_67796f49f8c17eea5c4c5d4e780ccd5f12ac6abba96211ec56df580144421b7d->leave($__internal_67796f49f8c17eea5c4c5d4e780ccd5f12ac6abba96211ec56df580144421b7d_prof);

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

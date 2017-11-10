<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_440599ceace608ecd13f84a63679849ba7f0983aa88e80a89191b42fc0db5044 extends Twig_Template
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
        $__internal_235ffcd097b8739ae5eb5bb849298feb37d29b9b2099bba0e98177ebe5efb6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235ffcd097b8739ae5eb5bb849298feb37d29b9b2099bba0e98177ebe5efb6d0->enter($__internal_235ffcd097b8739ae5eb5bb849298feb37d29b9b2099bba0e98177ebe5efb6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7d6ffaae38bcfdf5b1e78ed0ecba11470b327bf5597d9acc425000904ef5ab81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6ffaae38bcfdf5b1e78ed0ecba11470b327bf5597d9acc425000904ef5ab81->enter($__internal_7d6ffaae38bcfdf5b1e78ed0ecba11470b327bf5597d9acc425000904ef5ab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_235ffcd097b8739ae5eb5bb849298feb37d29b9b2099bba0e98177ebe5efb6d0->leave($__internal_235ffcd097b8739ae5eb5bb849298feb37d29b9b2099bba0e98177ebe5efb6d0_prof);

        
        $__internal_7d6ffaae38bcfdf5b1e78ed0ecba11470b327bf5597d9acc425000904ef5ab81->leave($__internal_7d6ffaae38bcfdf5b1e78ed0ecba11470b327bf5597d9acc425000904ef5ab81_prof);

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
", "@Framework/Form/form_errors.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

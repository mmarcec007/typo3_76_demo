<?php
class FluidCache_SimpleBlog_Blog_partial_Blog_FormFields_60b9df4f511e9a045b35f2cce5348ea435106d26 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
<label for="title">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'tx_simpleblog_domain_model_blog.title';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' <span class="required">(required)</span>
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments3 = array();
$arguments3['property'] = 'title';
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['required'] = false;
$arguments3['type'] = 'text';
$arguments3['name'] = NULL;
$arguments3['value'] = NULL;
$arguments3['autofocus'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['maxlength'] = NULL;
$arguments3['readonly'] = NULL;
$arguments3['size'] = NULL;
$arguments3['placeholder'] = NULL;
$arguments3['pattern'] = NULL;
$arguments3['errorClass'] = 'f3-form-error';
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper5->initializeArgumentsAndRender();

$output0 .= '<br />
<label for="date">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'tx_simpleblog_domain_model_blog.date';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments8 = array();
$arguments8['property'] = 'date';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments9 = array();
$arguments9['date'] = NULL;
$arguments9['format'] = '';
$arguments9['base'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'date', $renderingContext);
};
$arguments8['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['required'] = false;
$arguments8['type'] = 'text';
$arguments8['name'] = NULL;
$arguments8['autofocus'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['pattern'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper12->setArguments($arguments8);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '<br />
<label for="teaser">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'tx_simpleblog_domain_model_blog.teaser';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments15 = array();
$arguments15['property'] = 'teaser';
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['required'] = false;
$arguments15['type'] = 'text';
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['autofocus'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['maxlength'] = NULL;
$arguments15['readonly'] = NULL;
$arguments15['size'] = NULL;
$arguments15['placeholder'] = NULL;
$arguments15['pattern'] = NULL;
$arguments15['errorClass'] = 'f3-form-error';
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output0 .= $viewHelper17->initializeArgumentsAndRender();

$output0 .= '<br />
<label for="message">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'tx_simpleblog_domain_model_blog.message';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= ' <span class="required">(required)</span>
</label><br />
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments20 = array();
$arguments20['property'] = 'message';
$arguments20['cols'] = '40';
$arguments20['rows'] = '15';
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['name'] = NULL;
$arguments20['value'] = NULL;
$arguments20['autofocus'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['placeholder'] = NULL;
$arguments20['errorClass'] = 'f3-form-error';
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '<br />
<label for="image">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'tx_simpleblog_domain_model_blog.image';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
</label><br />
	<span>File upload is not implemented!</span><br  /><br />
';


return $output0;
}


}
#1491568559    9801      
<?php
class FluidCache_SimpleBlog_Blog_action_list_c18f218534e28f0402729afcf31e783738ffa4eb extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>Listing for Gaming Blog</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['renderMode'] = NULL;
$arguments1['as'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['queueIdentifier'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

	<div  class="tx_simpleblog" >
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = $currentVariableContainer->getOrNull('blogs');
$arguments4['as'] = 'blog';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
			<article>
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<figure>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments7 = array();
$arguments7['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'image.originalResource.publicUrl', $renderingContext);
$arguments7['width'] = '200';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['height'] = NULL;
$arguments7['minWidth'] = NULL;
$arguments7['minHeight'] = NULL;
$arguments7['maxWidth'] = NULL;
$arguments7['maxHeight'] = NULL;
$arguments7['treatIdAsReference'] = false;
$arguments7['image'] = NULL;
$arguments7['crop'] = NULL;
$arguments7['absolute'] = false;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['alt'] = NULL;
$arguments7['ismap'] = NULL;
$arguments7['longdesc'] = NULL;
$arguments7['usemap'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output6 .= $viewHelper9->initializeArgumentsAndRender();

$output6 .= '
						</figure>
					</div>
					<div class="col-sm-6 col-md-8">
						<span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
						<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'title', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output6 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output6 .= '</h4>
						<section>
							<i class="glyphicon glyphicon-folder-open"></i>Bootstrap
							<i class="glyphicon glyphicon-user"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'teaser', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output6 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output6 .= '
							<i class="glyphicon glyphicon-calendar"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments16 = array();
$arguments16['date'] = NULL;
$arguments16['format'] = '';
$arguments16['base'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'date', $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '
							<i class="glyphicon glyphicon-eye-open"></i>10000
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments18 = array();
$arguments18['class'] = 'btn btn-default btn-sm pull-right';
$arguments18['action'] = 'show';
// Rendering Array
$array19 = array();
$array19['blog'] = $currentVariableContainer->getOrNull('blog');
$arguments18['arguments'] = $array19;
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['controller'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['pageType'] = 0;
$arguments18['noCache'] = false;
$arguments18['noCacheHash'] = false;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['linkAccessRestrictedPages'] = false;
$arguments18['additionalParams'] = array (
);
$arguments18['absolute'] = false;
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['addQueryStringMethod'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['name'] = NULL;
$arguments18['rel'] = NULL;
$arguments18['rev'] = NULL;
$arguments18['target'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'More ... ';
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper21->setArguments($arguments18);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output6 .= $viewHelper21->initializeArgumentsAndRender();

$output6 .= '
						</section>
					</div>
				</div>
			</article>
		';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments22 = array();
$arguments22['action'] = 'new';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['controller'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['pluginName'] = NULL;
$arguments22['pageUid'] = NULL;
$arguments22['pageType'] = 0;
$arguments22['noCache'] = false;
$arguments22['noCacheHash'] = false;
$arguments22['section'] = '';
$arguments22['format'] = '';
$arguments22['linkAccessRestrictedPages'] = false;
$arguments22['additionalParams'] = array (
);
$arguments22['absolute'] = false;
$arguments22['addQueryString'] = false;
$arguments22['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments22['addQueryStringMethod'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['name'] = NULL;
$arguments22['rel'] = NULL;
$arguments22['rev'] = NULL;
$arguments22['target'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'New Blog';
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper24->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output25 = '';

$output25 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments26 = array();
$arguments26['name'] = 'Default';
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output25 .= $viewHelper28->initializeArgumentsAndRender();

$output25 .= '

This Template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments29 = array();
$arguments29['name'] = 'main';
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
	<h1>Listing for Gaming Blog</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['renderMode'] = NULL;
$arguments32['as'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['queueIdentifier'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '

	<div  class="tx_simpleblog" >
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments35 = array();
$arguments35['each'] = $currentVariableContainer->getOrNull('blogs');
$arguments35['as'] = 'blog';
$arguments35['key'] = '';
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
			<article>
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<figure>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments38 = array();
$arguments38['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'image.originalResource.publicUrl', $renderingContext);
$arguments38['width'] = '200';
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['height'] = NULL;
$arguments38['minWidth'] = NULL;
$arguments38['minHeight'] = NULL;
$arguments38['maxWidth'] = NULL;
$arguments38['maxHeight'] = NULL;
$arguments38['treatIdAsReference'] = false;
$arguments38['image'] = NULL;
$arguments38['crop'] = NULL;
$arguments38['absolute'] = false;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['alt'] = NULL;
$arguments38['ismap'] = NULL;
$arguments38['longdesc'] = NULL;
$arguments38['usemap'] = NULL;
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '
						</figure>
					</div>
					<div class="col-sm-6 col-md-8">
						<span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
						<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'title', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output37 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));

$output37 .= '</h4>
						<section>
							<i class="glyphicon glyphicon-folder-open"></i>Bootstrap
							<i class="glyphicon glyphicon-user"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'teaser', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output37 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));

$output37 .= '
							<i class="glyphicon glyphicon-calendar"></i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments47 = array();
$arguments47['date'] = NULL;
$arguments47['format'] = '';
$arguments47['base'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('blog'), 'date', $renderingContext);
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output37 .= '
							<i class="glyphicon glyphicon-eye-open"></i>10000
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments49 = array();
$arguments49['class'] = 'btn btn-default btn-sm pull-right';
$arguments49['action'] = 'show';
// Rendering Array
$array50 = array();
$array50['blog'] = $currentVariableContainer->getOrNull('blog');
$arguments49['arguments'] = $array50;
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = 0;
$arguments49['noCache'] = false;
$arguments49['noCacheHash'] = false;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['linkAccessRestrictedPages'] = false;
$arguments49['additionalParams'] = array (
);
$arguments49['absolute'] = false;
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'More ... ';
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper52->setArguments($arguments49);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output37 .= $viewHelper52->initializeArgumentsAndRender();

$output37 .= '
						</section>
					</div>
				</div>
			</article>
		';
return $output37;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output31 .= '
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments53 = array();
$arguments53['action'] = 'new';
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = 0;
$arguments53['noCache'] = false;
$arguments53['noCacheHash'] = false;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['linkAccessRestrictedPages'] = false;
$arguments53['additionalParams'] = array (
);
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['addQueryStringMethod'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['name'] = NULL;
$arguments53['rel'] = NULL;
$arguments53['rev'] = NULL;
$arguments53['target'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'New Blog';
};
$viewHelper55 = $self->getViewHelper('$viewHelper55', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper55->setArguments($arguments53);
$viewHelper55->setRenderingContext($renderingContext);
$viewHelper55->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output31 .= $viewHelper55->initializeArgumentsAndRender();

$output31 .= '
';
return $output31;
};

$output25 .= '';

$output25 .= '
';


return $output25;
}


}
#1491568538    22668     
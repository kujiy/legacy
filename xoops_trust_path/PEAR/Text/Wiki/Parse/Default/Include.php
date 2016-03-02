<?php

/**
* 
* Includes the contents of another PHP script into the source text.
* 
* @category Text
* 
* @package Text_Wiki
* 
* @author Paul M. Jones <pmjones@php.net>
* 
* @license LGPL
* 
* @version $Id: Include.php,v 1.3 2005/02/23 17:38:29 pmjones Exp $
* 
*/

/**
* 
* This class implements a Text_Wiki_Parse to include the results of a
* script directly into the source at parse-time; thus, the output of the
* script will be parsed by Text_Wiki.  This differs from the 'embed'
* rule, which incorporates the results at render-time, meaning that the
* 'embed' content is not parsed by Text_Wiki.
*
* DANGER!
* 
* This rule is inherently not secure; it allows cross-site scripting to
* occur if the embedded output has <script> or other similar tags.  Be
* careful.
*
* @category Text
* 
* @package Text_Wiki
* 
* @author Paul M. Jones <pmjones@php.net>
* 
*/

class Text_Wiki_Parse_Include extends Text_Wiki_Parse
{
    
    public $conf = array(
        'base' => '/path/to/scripts/'
    );
    
    public $file = null;
    
    public $output = null;
    
    public $vars = null;

    /**
    * 
    * The regular expression used to find source text matching this
    * rule.
    * 
    * @access public
    * 
    * @var string
    * 
    */
    
    public $regex = '/(\[\[include )(.+?)( .+?)?(\]\])/i';
    
    
    /**
    * 
    * Includes the results of the script directly into the source; the output
    * will subsequently be parsed by the remaining Text_Wiki rules.
    * 
    * @access public
    *
    * @param array &$matches The array of matches from parse().
    *
    * @return The results of the included script.
    *
    */
    
    public function process(&$matches)
    {
        // save the file location
        $this->file = $this->getConf('base', './') . $matches[2];

        // extract attribs as variables in the local space
        $this->vars = $this->getAttrs($matches[3]);
        unset($this->vars['this']);
        extract($this->vars);

        // run the script
        ob_start();
        include($this->file);
        $this->output = ob_get_contents();
        ob_end_clean();
    
        // done, place the script output directly in the source
        return $this->output;
    }
}

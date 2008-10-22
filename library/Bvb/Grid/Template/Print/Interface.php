<?php
/**
 * Mascker
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License 2.0
 * It is  available through the world-wide-web at this URL:
 * http://www.opensource.org/licenses/gpl-2.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to geral@petala-azul.com so we can send you a copy immediately.
 *
 * @package    Mascker_Grid
 * @copyright  Copyright (c); Mascker (http://www.petala-azul.com);
 * @license    http://www.opensource.org/licenses/gpl-2.0.php   GNU General Public License 2.0
 * @version    0.1  mascker $
 * @author     Mascker (Bento Vilas Boas); <geral@petala-azul.com > 
 */


interface  Bvb_Grid_Template_Print_Interface

{

    function globalStart ();
    
    

    function globalEnd ();
    
    

    function header ();
    
    

    function titlesStart ();
    
    

    function titlesEnd ();
    
    


    function titlesLoop ();
    
    


    function noResults();
    
    



    function hRow();
    
    


    function loopStart ();
    


    
    function loopEnd ();
    
    
    

    function loopLoop ();
    
    
    
    
    function sqlExpStart ();
    
    
    

    function sqlExpEnd ();
    
    
    

    function sqlExpLoop ();
    

}

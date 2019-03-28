<?php
declare(strict_types=1);
/**
 *  WpNonce
 *
 *  wp_nonce* functions wrapper in OOP flavour
 *
 *  @author javier@haicku.es
 */
namespace Jgpats2w\WpNoonce;

class Nonce
{
    private $action = null;
    private $name = null;

    /**
     * WpNonce constructor.
     * @action (optional) Action name. Should give the context to what is
     * taking place. Optional but recommended. Default -1
     * @param int $action
     * @param string $name
     */
    public function __construct(string $action = '-1', string $name = '_wpnonce')
    {
        $this->action = $action;
        $this->name = $name;
    }

    /**
    * Ays
    *
    * Display 'The link you followed has expired.' message to confirm the action being taken.
    * https://codex.wordpress.org/Function_Reference/wp_nonce_ays
    *
    *
    * @return void
    */
    public function ays()
    {
        \wp_nonce_ays($this->action);
    }

    /**
    * Field
    *
    * Retrieves or displays the nonce hidden form field.
    * https://codex.wordpress.org/Function_Reference/wp_nonce_field
    *
    * @name string optional) Nonce name. This is the name of the nonce hidden form field to be
     * created.Once the form is submitted, you can access the generated nonce via $_POST[$name].
     * Default: '_wpnonce'.
     * @referer boolean  Whether also the referer hidden form field should be created with the
     * wp_referer_field() function. Default true.
    * @echo boolean $param1 A string containing the parameter, do this for each parameter to the
     * function, make sure to make it descriptive
    * @return string The nonce hidden form field, optionally followed by the referer hidden
     * form field if the $referer argument is set to true.
    */

    public function field(bool $referer = true, bool $echo = true)
    {
        \wp_nonce_field($this->action, $this->name, $referer, $echo);
    }

    /**
    * Url
    *
    * Retrieves or displays the nonce hidden form field.
    * https://codex.wordpress.org/Function_Reference/wp_nonce_url
    *
    * @actionurl string (required) URL to add nonce action
    * @actionurl string (required) URL to add nonce action
    *
    * @return string URL with nonce action added.
    */
    public function url(string $actionurl) : string
    {
        return \wp_nonce_url($actionurl, $this->action, $this->name);
    }

    // Getters and Setters
    /**
    * @return int|null
    */
    public function action(): ?string
    {
        return $this->action;
    }

    /**
    * @return string|null
    */
    public function name(): ?string
    {
        return $this->name;
    }
}

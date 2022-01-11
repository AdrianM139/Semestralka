<?php


namespace App\Core\Responses;


class RedirectResponse extends Response
{

    private string $redirectUrl;

    /**
     * RedirectResponse constructor.
     * @param string $redirectUrl
     */
    public function __construct(string $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    public function generate()
    {
        header('Location:' . $this->redirectUrl);
    }
}
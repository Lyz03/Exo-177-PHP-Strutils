<?php

class StrUtils
{

    private string $str = '';

    public function __construct(string $yourStr) {
        $this->setStr($yourStr);
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * Bold
     * @return string
     */
    public function bold(): string {
        return 'font-weight: bold';
    }

    /**
     * Italic
     * @return string
     */
    public function italic(): string {
        return 'font-style: italic';
    }

    /**
     * Underline
     * @return string
     */
    public function underline(): string {
        return 'text-decoration-line: underline';
    }

    /**
     * Capitalized
     * @return string
     */
    public function capitalized(): string {
        return 'text-transform: capitalize';
    }

    /**
     * Bold, Italic, Underline
     * @return string
     */
    public function uglify(): string {
        return $this->bold() . "; " . $this->italic() . "; "  . $this->underline();
    }
}
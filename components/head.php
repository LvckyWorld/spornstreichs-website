<?php

$headerContent = new headerContent();

class headerContent
{
    /**
     * print out the Head
     *
     * @param string $titleExtra The title extra Spornstreich.DE - <extra>
     * @return void echo content
     */
    public static function printHead(string $titleExtra): void
    {
        echo '<title>SPORNSTREICHS.DE | ' . $titleExtra . '</title>';
        echo ' <link rel="icon" href="https://lvckyworld.net/images/logo222.png" />';
    }

    /**
     * print out the Head
     *
     * @param string $titleExtra The title extra Spornstreich.DE - <extra>
     * @param string $url The url
     * @return void echo content
     */
    public static function printMeta(string $titleExtra, string $url): void
    {
        echo '<meta name="description" content="Coded by LvckyWorld" />';
        echo '<meta property="og:title" content="SPORNSTREICHS.DE - ' . $titleExtra . '" />';
        echo '<meta property="og:description" content="SPORNSTREICHS.DE - So reichet mir spornstreichs den Quellcode!" />';
        echo '<meta property="og:image" content="https://lvckyworld.net/images/logo2222.jpg" />';
        echo '<meta property="og:type" content="website" />';
        echo '<meta property="og:url" content="https://SPORNSTREICHS.DE/' . $url . '" />';
        echo '<meta name="theme-color" content="#03e817">';
    }

}



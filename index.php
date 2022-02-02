<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.
require __DIR__ . '/StrUtils.php';

$myStr = new StrUtils('test');

$style = $myStr->bold();
echo '<span style="' . $style . '">' . $myStr->getStr() . '</span><br>';

$style = $myStr->italic();
echo '<span style="' . $style . '">' . $myStr->getStr() . '</span><br>';

$style = $myStr->underline();
echo '<span style="' . $style . '">' . $myStr->getStr() . '</span><br>';

$style = $myStr->capitalized();
echo '<span style="' . $style . '">' . $myStr->getStr() . '</span><br>';

$style = $myStr->uglify();
echo '<span style="' . $style . '">' . $myStr->getStr() . '</span><br>';
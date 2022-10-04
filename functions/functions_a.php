<?php

// Wrong
function feedCats($cats) {
    $cats->feed();
    $cats->walk();
    $cats->wash();
}

// Better
function feedCat($cat) {
    $cat->feed();
}
function walkCat($cat) {
    $cat->walk();
}
function washCat($cat) {
    $cat->wash();
}
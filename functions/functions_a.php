
// Wrong
function feedCats($cats): void
{
    $cats->feed();
    $cats->walk();
    $cats->wash();
}

// Better
function feedCat($cat): void
{
    $cat->feed();
}
function walkCat($cat): void
{
    $cat->walk();
}
function washCat($cat): void
{
    $cat->wash();
}
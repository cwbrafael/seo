## Native lazy-loading for iFrames by @joehall

## Paste this into your functions.php file and all iframes embedded in page and post content, will now lazy load!

add_filter('the_content','lazyIF');
function lazyIF($content) {
    $content = str_replace('<iframe','<iframe loading="lazy"', $content);
    return $content;
}

## Disable native lazy-loading for images in Wordpress

add_filter('wp_lazy_loading_enabled', '__return_false');

## How to defer JS on Wordpress

function defer_js ( $url ) {
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  if ( is_user_logged_in() ) return $url;
  return "$url' defer ";
}
add_filter( 'clean_url', 'defer_js', 11, 1 );

## Lazy-loading for all images in WordPress
### Add this code to your WordPress theme in the function.php file to lazy load all images in posts and pages.

add_filter('the_content','lazyIMG');
function lazyIMG($content) {
    $content = str_replace('<img','<img loading="lazy"', $content);
    return $content;
}

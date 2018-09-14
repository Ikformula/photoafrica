<?php

use App\Helpers\General\HtmlHelper;

/*
 * Global helpers file with misc functions.
 */
if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (! function_exists('include_route_files')) {

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function include_route_files($folder)
    {
        try {
            $rdi = new recursiveDirectoryIterator($folder);
            $it = new recursiveIteratorIterator($rdi);

            while ($it->valid()) {
                if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                    require $it->key();
                }

                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

if (! function_exists('home_route')) {

    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'admin.dashboard';
            } else {
                return 'frontend.user.dashboard';
            }
        }

        return 'frontend.index';
    }
}

if (! function_exists('style')) {

    /**
     * @param       $url
     * @param array $attributes
     * @param null  $secure
     *
     * @return mixed
     */
    function style($url, $attributes = [], $secure = null)
    {
        return resolve(HtmlHelper::class)->style($url, $attributes, $secure);
    }
}

if (! function_exists('script')) {

    /**
     * @param       $url
     * @param array $attributes
     * @param null  $secure
     *
     * @return mixed
     */
    function script($url, $attributes = [], $secure = null)
    {
        return resolve(HtmlHelper::class)->script($url, $attributes, $secure);
    }
}

if (! function_exists('form_cancel')) {

    /**
     * @param        $cancel_to
     * @param        $title
     * @param string $classes
     *
     * @return mixed
     */
    function form_cancel($cancel_to, $title, $classes = 'btn btn-danger btn-sm')
    {
        return resolve(HtmlHelper::class)->formCancel($cancel_to, $title, $classes);
    }
}

if (! function_exists('form_submit')) {

    /**
     * @param        $title
     * @param string $classes
     *
     * @return mixed
     */
    function form_submit($title, $classes = 'btn btn-success btn-sm pull-right')
    {
        return resolve(HtmlHelper::class)->formSubmit($title, $classes);
    }
}

if (! function_exists('get_user_timezone')) {

    /**
     * @return string
     */
    function get_user_timezone()
    {
        if (auth()->user()) {
            return auth()->user()->timezone;
        }

        return 'UTC';
    }
}

if (! function_exists('get_country_amount_currency')) {

    /**
     * @return array
     */
    function get_country_amount_currency($country)
    {
        switch ($country){
            case 'Nigeria':
                $charge = ['amount' => 5000, 'currency' => 'NGN', 'country_code' => 'NG'];
                break;
            case 'South Africa':
                $charge = ['amount' => 5000, 'currency' => 'NGN', 'country_code' => 'NG'];
                break;
            case 'Ghana':
                $charge = ['amount' => 5000, 'currency' => 'NGN', 'country_code' => 'NG'];
                break;
            default:
                $charge = ['amount' => 5000, 'currency' => 'NGN', 'country_code' => 'NG'];
        }

        return $charge;
    }
}

if (! function_exists('get_contestant_thumbnail')) {

    /**
     * @return string
     */
    function get_contestant_thumbnail($contestant)
    {
        // returns rules for thumbnails
        //        http://res.cloudinary.com/photoafrica/image/upload/v1536673057/x6seys66vzwa7y0jtzv2.jpg
        $rule = '/c_thumb,g_face,h_500,w_500/';
        $tmb = 'http://res.cloudinary.com/'.env('CLOUDINARY_CLOUD_NAME').'/'.$contestant['avatar_resource_type'].'/'.$contestant['avatar_type'].$rule.$contestant['avatar_filename'].'.'.$contestant['avatar_format'];
       return $tmb;
    }
}

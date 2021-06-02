<?php


use App\Helper\Helper;
use App\Model\Category;
use App\Coupon;
use App\Forum;
use App\PostReply;
use App\ForumPostView;
use App\HelpfulAnswer;
use App\Blog;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

//this function for open Json file to read language json file
function openJSONFile($code)
{
    $jsonString = [];
    if (File::exists(base_path('resources/lang/' . $code . '.json'))) {
        $jsonString = file_get_contents(base_path('resources/lang/' . $code . '.json'));
        $jsonString = json_decode($jsonString, true);
    }
    return $jsonString;
}

//save the new language json file
function saveJSONFile($code, $data)
{
    ksort($data);
    $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents(base_path('resources/lang/' . $code . '.json'), stripslashes($jsonData));
}

//translate the key with json
function translate($key)
{
    $key = ucfirst(str_replace('_', ' ', $key));
    if (File::exists(base_path('resources/lang/en.json'))) {
        $jsonString = file_get_contents(base_path('resources/lang/en.json'));
        $jsonString = json_decode($jsonString, true);
        if (!isset($jsonString[$key])) {
            $jsonString[$key] = $key;
            saveJSONFile('en', $jsonString);
        }
    }
    return __($key);
}


//scan directory for load flag
function readFlag()
{
    $dir = base_path('public/uploads/lang');
    $file = scandir($dir);
    return $file;
}


//auto Rename Flag
function flagRenameAuto($name)
{
    $nameSubStr = substr($name, 8);
    $nameReplace = ucfirst(str_replace('_', ' ', $nameSubStr));
    $nameReplace2 = ucfirst(str_replace('.png', '', $nameReplace));
    return $nameReplace2;
}


function defaultCurrency()
{
    $sc = session('currency');
    if ($sc != null) {
        $id = $sc;
    } else {
        $id = (int)getSystemSetting('default_currencies')->value;
    }
    $currency = \App\Model\Currency::find($id);
    return $currency->code;
}

//format the Price
function formatPrice($price)
{
    $sc = session('currency');
    if ($sc != null) {
        $id = $sc;
    } else {
        $id = (int)getSystemSetting('default_currencies')->value;
    }

    $currency = \App\Model\Currency::find($id);
    $fmt = new NumberFormatter(app()->getLocale(), NumberFormatter::CURRENCY);
    // remove symbol from NumberFormatter
    $fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '');

    $p = $price * $currency->rate;
    return $currency->align == 0 ? $fmt->formatCurrency($p, $currency->code) . $currency->symbol : $currency->symbol . $fmt->formatCurrency($p, $currency->code);
}

//format the Price
function noFormatPrice($huh)
{
    $x = session('currency');
    if ($x != null) {
        $ids = $x;
    } else {
        $ids = (int)getSystemSetting('default_currencies')->value;
    }

    $currency = \App\Model\Currency::find($ids);
    $fmt = new NumberFormatter(app()->getLocale(), NumberFormatter::CURRENCY);
    // remove symbol from NumberFormatter
    $fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '');
    $p = $huh * $currency->rate;

    return $fmt->formatCurrency($p, $currency->code);
}

//format the Price Code
function formatPriceCode()
{
    $priceCode = session('currency');
    $currency = \App\Model\Currency::find($priceCode);
    return $currency->code;
}

function getPriceRate($code)
{
    $getPriceCode = \App\Model\Currency::where('code', $code)->first();
    return $getPriceCode->rate ?? 0;
}

/*only price for payment*/
function onlyPrice($price)
{
    $sc = session('currency');
    if ($sc != null) {
        $id = $sc;
    } else {
        $id = (int)getSystemSetting('default_currencies')->value;
    }

    $currency = \App\Model\Currency::find($id);
    $p = $price * $currency->rate;
    return $p;

}


function PaytmPrice($price)
{

    switch (activeCurrency()) {
        case 'USD':
            return noFormatPrice($price) * getPriceRate('INR');
            break;

        case 'BDT':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'INR':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'LKR':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'PKR':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'NPR':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'ZAR':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'JPY':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'KRW':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'IDR':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'AED':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'TRY':
            return noFormatPrice($price) / getPriceRate(activeCurrency()) * getPriceRate('INR');
            break;

        case 'UZS':
            return noFormatPrice($price) / getPriceRate(activeCurrency());
            break;

        default:
            # code...
            break;
    }
}

function StripePrice($stripePrice)
{
    return noFormatPrice($stripePrice);
}

function PaypalPrice($PaypalPrice)
{
    return noFormatPrice($PaypalPrice);
}

/*Active Currency*/
function activeCurrency()
{
    $sc = session('currency');
    if ($sc != null) {
        $id = $sc;
    } else {
        $id = (int)getSystemSetting('default_currencies')->value;
    }

    $currency = \App\Model\Currency::find($id);
    return $currency->code;
}

/*Active Currency*/
function activeCurrencySymbol()
{
    $sc = session('currency');
    if ($sc != null) {
        $id = $sc;
    } else {
        $id = (int)getSystemSetting('default_currencies')->value;
    }

    $currency = \App\Model\Currency::find($id);
    return $currency->symbol;
}

//override or add env file or key
function overWriteEnvFile($type, $val)
{
    $path = base_path('.env');
    if (file_exists($path)) {
        $val = '"' . trim($val) . '"';
        if (is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0) {
            file_put_contents($path, str_replace($type . '="' . env($type) . '"', $type . '=' . $val, file_get_contents($path)));
        } else {
            file_put_contents($path, file_get_contents($path) . "\r\n" . $type . '=' . $val);
        }
    }
}


//get system setting data
function getSystemSetting($key)
{
    return \App\Model\SystemSetting::where('type', $key)->first();
}

//get Subscription setting data
function getSubscriptionSetting($key)
{
    return \App\SubscriptionSettings::where('type', $key)->first();
}

//get Subscription setting data
function enableCourse()
{
    $enableCourse = \App\SubscriptionSettings::where('type', 'enable_all_course')->first();

    if ($enableCourse != null && $enableCourse->value == true) {
        return true;
    } else {

        return false;
    }
}

//get Subscription setting data
function enableInstructorRequest()
{
    $enableInstructorRequest = \App\SubscriptionSettings::where('type', 'enable_instructor_request')->first();
    if ($enableInstructorRequest != null && $enableInstructorRequest->value == true) {
        return true;
    } else {

        return false;
    }
}

//get Subscription setting data
function enableFreeTrial()
{
    $enableFreeTrial = \App\SubscriptionSettings::where('type', 'enable_free_trial')->first()->value;
    if ($enableFreeTrial == true) {
        return true;
    } else {

        return false;
    }
}

//Get file path
//path is storage/app/
function filePath($file)
{
    return asset($file);
}


function course()
{
    return \App\Model\Course::Published()->get();
}

//delete file
function fileDelete($file)
{
    if ($file != null) {
        if (file_exists(public_path($file))) {
            unlink(public_path($file));
        }
    }
}

//uploads file
// uploads/folder
function fileUpload($file, $folder)
{
    return $file->store('uploads/' . $folder);
}


//get instructor
function instructorDetails($id)
{
    return \App\Model\Instructor::where('user_id', $id)->first();
}

function studentDetails($id)
{
    return \App\Model\Student::where('user_id', $id)->first();
}


/*categories*/
function categories()
{

    return Category::where('parent_category_id', 0)->with('child')->Published()->get();
}


/*duration*/
function duration($value)
{
    $init = $value;
    $hours = floor($init / 60);
    $minutes = floor($init % 60);
    $seconds = floor(($init / 60) % 60);
    $single_sec = mb_strlen((string)$seconds);
    $duration = $hours . ':' . $minutes . ':' . ($single_sec === 1 ? '0' . $seconds : $seconds);
    return date('H:i:s', strtotime($duration));
}


/*best selling tags*/
function bestSellingTags($id)
{
    $start = Carbon::parse(date('y-m-d'))
        ->startOfMonth()
        ->toDateTimeString();
    $end = Carbon::parse(date('y-m-d'))
        ->endOfMonth()
        ->toDateTimeString();

    $enroll = \App\Model\Enrollment::where('course_id', $id)->whereBetween('created_at', [$start, $end])->get();

    if ($enroll->count() > 5) {
        return true;
    }
    return false;
}


/*affiliate status*/
function affiliateStatus()
{
    try {
        $affiliate = getSystemSetting('affiliate')->value;
        if ($affiliate == 'Active') {
            return true;
        } else {
            return false;
        }
    } catch (Exception $exception) {
        return false;
    }

}

/*affiliate commission*/
function commission()
{
    $commission = (int)getSystemSetting('commission')->value;
    return $commission;
}

//cookie time day
function cookiesLimit()
{
    $days = (int)getSystemSetting('cookies_limit')->value;
    /*return day*/

    return ($days * 1440);
}

/*cashout*/
function withdrawLimit()
{
    $amount = (int)getSystemSetting('withdraw_limit')->value;
    return $amount;
}

//CHECK MEDIA MANAGER ACTIVATION
function MediaActive()
{
    if (env('MEDIA_MANAGER') === "YES") {
        return true;
    } else {
        return false;
    }
}


/*Certificate addons activations */
function certificate()
{
    if (env('CERTIFICATE_ACTIVE') === "YES") {
        return true;
    } else {
        return false;
    }
}


// check Paytm route for Mapping

function paytmRoute()
{
    if (file_exists(base_path('routes/paytm.php'))) {
        return true;
    } else {
        return false;
    }
}

// check Paytm route for blade
function paytmRouteForBlade()
{
    if (file_exists(base_path('routes/paytm.php'))) {
        return true;
    } else {
        return false;
    }
}

// check Paytm route for blade
function paytmActive()
{
    if (env('PAYTM_ACTIVE') == 'YES') {
        return true;
    }
    return false;
}

/*quiz*/
function quizActive()
{
    if (env('QUIZ_ACTIVE') == 'YES') {
        return true;
    }
    return false;
}

// check quiz route for Mapping

function quizRoute()
{
    if (file_exists(base_path('routes/quiz.php'))) {
        return true;
    } else {
        return false;
    }
}

// check quiz route for blade
function quizRouteForBlade()
{
    if (file_exists(base_path('routes/quiz.php'))) {
        return true;
    } else {
        return false;
    }
}

// check quiz route for blade
function couponRouteForBlade()
{
    if (file_exists(base_path('routes/coupon.php'))) {
        return true;
    } else {
        return false;
    }
}


// check certificate route for blade
function certificateForRoute()
{
    if (file_exists(base_path('routes/certificate.php'))) {
        return true;
    } else {
        return false;
    }
}


// check Paytm route for Mapping

function zoomRoute()
{
    if (file_exists(base_path('routes/zoom.php'))) {
        return true;
    } else {
        return false;
    }
}

// check Paytm route for blade
function zoomRouteForBlade()
{
    if (file_exists(base_path('routes/zoom.php'))) {
        return true;
    } else {
        return false;
    }
}

// check Paytm route for blade
function zoomActive()
{
    if (env('ZOOM_ACTIVE') == 'YES') {
        return true;
    }
    return false;
}

// check Paytm route for blade
function couponActive()
{
    if (env('COUPON_ACTIVE') == 'YES') {
        return true;
    }
    return false;
}


// Forum


// check forum route for Mapping

function forumRoute()
{
    if (file_exists(base_path('routes/forum.php'))) {
        return true;
    } else {
        return false;
    }
}

// check forum route for blade
function forumRouteForBlade()
{
    if (file_exists(base_path('routes/forum.php'))) {
        return true;
    } else {
        return false;
    }
}

// check forum route for blade
function forumActive()
{
    if (env('FORUM_PANEL') == 'YES') {
        return true;
    }
    return false;
}


// subscription

// check forum route for Mapping

function subscriptionRoute()
{
    if (file_exists(base_path('routes/subscription.php'))) {
        return true;
    } else {
        return false;
    }
}

// check forum route for blade
function subscriptionRouteForBlade()
{
    if (file_exists(base_path('routes/subscription.php'))) {
        return true;
    } else {
        return false;
    }
}

// check forum route for blade
function subscriptionActive()
{
    if (env('SUBSCRIPTION_ACTIVE') == 'YES') {
        return true;
    }
    return false;
}


/*active theme*/
function themeManager()
{
    try {
        if (env('THEME_MANAGER') === "YES") {
                return 'frontend';
        } else {
            return 'frontend';
        }
    } catch (Exception $exception) {
        return 'frontend';
    }

}


function adminPower()
{
    return Auth::user()->user_type === "Admin";
}

function instructorPower()
{
    return Auth::user()->user_type === "Instructor";
}

function studentPower()
{
    return Auth::user()->user_type === "Student";
}

/**
 * EXPIRE
 */

function expire($subscription_id)
{
    return App\SubscriptionEnrollment::where('subscription_id', $subscription_id)->where('end_at', '>', Carbon::now())->count();
}


function enrolmentStare($count)
{
    switch ($count) {
        case $count > 50:
            return 5;
            break;
        case $count < 45 && $count > 35:
            return 4;
            break;
        case $count < 35 && $count > 25:
            return 3;
            break;
        default:
            return 2;
    }


}


function allBlogTags()
{
    $tags = array();
    $blogs = \App\Blog::all();

    foreach ($blogs as $blog) {
        $blogPost = json_decode($blog->tags);

        foreach ($blogPost as $tag) {
            array_push($tags, $tag);
        }

    }

    $data = array_unique($tags, false);
    return $data;

}

/**
 * couponRoute
 */

function couponRoute()
{
    if (file_exists(base_path('routes/coupon.php'))) {
        return true;
    } else {
        return false;
    }
}

/**
 * COUPON SESSION
 */

function couponDiscount($code)
{
    $rate = Coupon::where('code', $code)->select('rate')->first();
    return formatPrice($rate->rate);
}

function couponDiscountPrice($code)
{
    $rate = Coupon::where('code', $code)->select('rate')->first();
    return $rate->rate;
}

/**
 * FORUMLY
 */

function forumComp($blade)
{
    return 'forum.forumly.components.' . $blade;
}

function forumPostCount()
{
    return Forum::count();
}

function forumCategoryCount($category)
{
    return Forum::where('category', $category)->count();
}

function forumCategory($category)
{
    return Forum::where('category', $category)->get();
}

function forumPostReplyCount()
{
    return PostReply::count();
}

function latestForumPostCount()
{
    return Forum::whereDate('created_at', Carbon::today())->count();
}

function latestFostReplyCount()
{
    return PostReply::whereDate('created_at', Carbon::today())->count();
}

function blogCount()
{
    return Blog::count();
}

function post_replies_count($id)
{
    return $post_replies_count = PostReply::where('post_id', $id)->count();
}

function post_views_count($id)
{
    return $post_views_count = ForumPostView::where('post_id', $id)->count();
}

function helpful_count($id)
{
    return $helpful_count = HelpfulAnswer::where('post_id', $id)->count();
}

function popularQuestion()
{
    return ForumPostView::select('post_id')
        ->groupBy('post_id')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
}

function popularQuestions($id)
{
    return Forum::where('id', $id)->select('id', 'title', 'user_id')->latest()->take(10)->get();
}


function helpfulReplyId()
{
    return HelpfulAnswer::select('post_reply_id')
            ->groupBy('post_reply_id')
            ->orderByRaw('COUNT(*) DESC')
            ->take(1)
            ->first()->post_reply_id ?? null;
}

function save64ToFile($body, $folderName)
{
    if ($body) {
        // base64 to file
        $dom = new \DomDocument();
        @$dom->loadHTML(mb_convert_encoding($body, 'HTML-ENTITIES', 'UTF-8'));
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if (is_base64($data)) {
                list($type, $data) = explode(';', $data);
                list($type, $data) = explode(',', $data);
                $data = base64_decode($data);
                $storeDirectory = 'public/uploads/summernote/'.$folderName.'/';
                $image_name = $storeDirectory . time() . $k . '.png';
                if (! \File::isDirectory($storeDirectory)) {
                    $dir = \File::makeDirectory($storeDirectory, 0777, true);
                    file_put_contents($image_name, $data);
                } else {
                    file_put_contents($image_name, $data);
                }
                $img->removeAttribute('src');
                $img->setAttribute('src', env('APP_URL') . '/' . $image_name);
            }
        }
        return $dom->saveHTML();
    } else {
        return $body;
    }
}

function clearFilesFromDisk($body)
{
    if($body) {
        // base64 to file
        $dom = new \DomDocument();
        @$dom->loadHTML(mb_convert_encoding($body, 'HTML-ENTITIES', 'UTF-8'));
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if ($data) {
                $filePath = Str::after($data, env('APP_URL') . '/');
                unlink($filePath);
            }
        }
    } else {
        return $body;
    }

}

function paginate($items, $perPage = 10, $page = null, $options = [])
{
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}

function is_base64($s)
{
    return (boolean) preg_match("/data:([a-zA-Z0-9]+\/[a-zA-Z0-9-.+]+).base64,.*/", $s);
}

function formateZoomDate($response)
{
    $utc = isset($response['start_time']) ? $response['start_time'] : NULL;
    $dt = new DateTime($utc);
    $tz = new DateTimeZone($response['timezone']); // or whatever zone you're after
    $dt->setTimezone($tz);
    $meeting_time = $dt->format('Y-m-d H:i:s');
    return $meeting_time;
}

function formateZoomDateView($response)
{
    $meeting_time = formateZoomDate($response);
    return Carbon::parse($meeting_time)->format('d-m-Y H:i:s');
}